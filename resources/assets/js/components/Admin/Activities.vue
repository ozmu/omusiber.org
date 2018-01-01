<template>
    <div class="row">
        <div class="heading">
            Etkinlikler Kısmı Düzenleme
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
            Etkinlik Ekle
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
                    <div class="col-md-6" style="margin: 0 25%;">
                        <img :src="image">
                    </div>
                    <div class="col-md-12">
                        <label for="image">Afiş*</label>
                        <input type="file" class="form-control" id="image" v-on:change="onFileChange">
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
            <div class="project">
                <div class="project-title">
                    Etkinlik Başlığı
                </div>
                <div class="project-image">
                    <img src="https://pbs.twimg.com/profile_images/825049984626221056/mAG1IJGY_400x400.jpg" alt="img">
                </div>
                <table class="project-meta">
                    <tr>
                        <td class="project-icon">ikon</td>
                        <td class="project-icon">ikon2</td>
                    </tr>
                    <tr>
                        <td class="project-category">kategori</td>
                        <td class="project-category">kategori2</td>
                    </tr>
                    <tr>
                        <td class="project-date">tarih</td>
                        <td class="project-date">tarih2</td>
                    </tr>
                    <tr>
                        <td class="project-state">durum</td>
                        <td class="project-state">durum2</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['projects'],

        data(){
            return {
                name: '',
                image: '',
                icon: '',
                category: '',
                date: '',
                state: '',
                add: false,
                success: false,
                error: false,
            }
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
            addActivities(){
                axios.post('/admin/activities',{
                    name: this.name,
                    image: this.image,
                    icon: this.icon,
                    category: this.category,
                    date: this.date,
                    state: this.state,
                }).then((response) => {
                    this.success = true;
                    console.log(response);
                }).catch(() => {
                    this.error = true;
                })
            }
        }
    }

</script>