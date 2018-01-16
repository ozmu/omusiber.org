<template>
    <div class="row">
        <div class="heading">
            Proje Kısmı Düzenleme
        </div>
        <div class="add-error row" v-if="error">
            <div class=" alert alert-danger">
                Lütfen formu eksiksiz doldurunuz!
            </div>
        </div>
        <div class="row add-success" v-if="success">
            <div class=" alert alert-success">
                Güncellendi!
            </div>
        </div>

        <div class="add-project" v-if="!add" @click="add = !add">
            Proje Ekle
        </div>

        <div v-if="add">
            <div id="project-add">
                <div class="row">
                    <div class="col-md-12">
                        <label for="title">Proje Adı*</label>
                        <input type="text" id="title" class="form-control" v-model="name">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="short_description">Kısa Açıklama*</label>
                        <input type="text" id="short_description" class="form-control" v-model="short_desc">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="description">Uzun Açıklama*</label>
                        <textarea id="description" class="form-control" v-model="description" rows="3"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6" style="margin: 0 25%;">
                        <img :src="image">
                    </div>
                    <div class="col-md-12">
                        <label for="image">Afiş*</label>
                        <input type="file" class="form-control" id="image" name="image" v-on:change="onFileChange">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <label for="icon">İkon(Font Awesome)</label>
                        <input id="icon" type="text" class="form-control" v-model="icon">
                    </div>
                    <div class="col-md-3">
                        <label for="category">Kategori*</label>
                        <input type="text" id="category" class="form-control" v-model="category">
                    </div>
                    <div class="col-md-3">
                        <label for="date">Tarih*</label>
                        <input type="text" id="date" class="form-control" v-model="date">
                    </div>
                    <div class="col-md-3">
                        <label for="state">Durum*</label>
                        <input type="text" id="state" class="form-control" v-model="state">
                    </div>
                </div>

                <button class="btn btn-lg" @click="addProject">Proje Ekle</button>
            </div>
        </div>

        <div class="projects" v-if="!add">
            <div class="project" v-for="(project, index) in allProjects">
                <i class="fa fa-close" @click="deleteProject(index,project.id)"></i>
                <i class="fa fa-refresh" @click="updateProject(project)"></i>
                <div class="project-title">
                    {{ project.project_title }}
                </div>
                <div class="project-image">
                    <img :src="'/' + project.image_path" alt="img">
                </div>
                <div class="project-short-desc">
                    <h1>Kısa Açıklama</h1>
                    <div>{{ project.short_description }}</div>
                </div>
                <div class="project-description">
                    <h1>Açıklama</h1>
                    <div>{{ project.description }}</div>
                </div>
                <table class="project-meta">
                    <tr>
                        <td class="project-icon">İkon</td>
                        <td class="project-icon">{{ project.icon }}</td>
                    </tr>
                    <tr>
                        <td class="project-category">Kategori</td>
                        <td class="project-category">{{ project.category }}</td>
                    </tr>
                    <tr>
                        <td class="project-date">Tarih</td>
                        <td class="project-date">{{ project.date }}</td>
                    </tr>
                    <tr>
                        <td class="project-state">Durum</td>
                        <td class="project-state">{{ project.state }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
    import VueSweetalert2 from 'vue-sweetalert2';

    Vue.use(VueSweetalert2);

    export default {
        props: ['projects'],

        data(){
            return {
                name: '',
                short_desc: '',
                description: '',
                image: '',
                icon: '',
                category: '',
                date: '',
                state: '',
                add: false,
                success: false,
                error: false,
                allProjects: [],
            }
        },

        created(){
            this.allProjects = this.projects;
        },

        methods: {
            onFileChange(e) {
                let files = e.target.files || e.dataTransfer.files;
                if (!files.length)
                    return;
                this.createImage(files[0]);
            },

            createImage(file) {
                let reader = new FileReader();
                reader.onload = (e) => {
                    this.image = e.target.result;
                };
                reader.readAsDataURL(file);
            },

            addProject(){
                let formData = new FormData();
                let imagefile = document.querySelector('#image');
                formData.append('image', imagefile.files[0]);
                formData.append('name', this.name);
                formData.append('short_desc', this.short_desc);
                formData.append('long_desc', this.description);
                formData.append('icon', this.icon);
                formData.append('category', this.category);
                formData.append('date', this.date);
                formData.append('state', this.state);


                const headers = {
                    'Content-Type': 'multipart/form-data'
                };

                axios.post('/admin/projects', formData, headers).then((response) => {
                    this.success = true;
                    console.log(response);
                }).catch((e) => {
                    this.error = true;
                    console.log(e)
                })
            },

            deleteProject(index,project_id){
                var self = this;
                this.$swal({
                    title: 'Emin misin?',
                    text: "Sildiğin projeyi geri alamazsın!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Evet, sil!',
                    cancelButtonText: 'Hayır'
                }).then((result) => {
                    if (result.value) {
                        axios.delete('/admin/projects',{
                            params: {project_id: project_id}
                        }).then(response => {
                            if(response.status === 200){
                                self.$swal(
                                    'Silindi!',
                                    'Proje silindi.',
                                    'success'
                                );
                                self.allProjects.splice(index,1);
                            }
                        });

                    }
                });

            },

            updateProject(project){
                console.log(project)
            }
        }
    }

</script>