<template>
    <div class="row">
        <div class="heading">
            Yönetim(Takım) Düzenleme
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

        <div class="add-project" v-if="!add && !update" @click="add = !add">
            Üye Ekle
        </div>

        <div v-if="add">
            <div id="person-add">
                <div class="row">
                    <div class="col-md-12">
                        <label for="title"> Adı*</label>
                        <input type="text" id="title" class="form-control" v-model="name">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="role">Rolü*</label>
                        <select name="role" id="role" v-model="role">
                            <option :value="index" v-for="(personRole, index) in roles">{{ personRole }}</option>
                        </select>
                    </div>
                </div>
                <div class="row socials">
                    <div class="col-md-2">
                        <label for="facebook">Facebook</label>
                        <input type="text" id="facebook" class="form-control" v-model="facebook">
                    </div>
                    <div class="col-md-2">
                        <label for="twitter">Twitter</label>
                        <input type="text" id="twitter" class="form-control" v-model="twitter">
                    </div>
                    <div class="col-md-2">
                        <label for="instagram">Instagram</label>
                        <input type="text" id="instagram" class="form-control" v-model="instagram">
                    </div>
                    <div class="col-md-2">
                        <label for="github">Github</label>
                        <input type="text" id="github" class="form-control" v-model="github">
                    </div>
                    <div class="col-md-2">
                        <label for="linkedin">Linkedin</label>
                        <input type="text" id="linkedin" class="form-control" v-model="linkedin">
                    </div>
                    <div class="col-md-2">
                        <label for="isactive">Aktif mi?</label>
                        <input type="checkbox" id="isactive" class="form-control" v-model="isactive">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6" style="margin: 0 25%;">
                        <img :src="image">
                    </div>
                    <div class="col-md-12">
                        <label for="image">Fotoğraf*</label>
                        <input type="file" class="form-control" id="image" name="image" v-on:change="onFileChange">
                    </div>
                </div>

                <button class="btn btn-lg" @click="addPerson">Üye Ekle</button>
            </div>
        </div>

        <div v-if="update" class="teams">
            <div class="team">
                <div class="team-title">
                    {{ current.name }}
                </div>
                <div class="person-image">
                    <img :src="'/' + current.image" alt="img">
                </div>
                <div class="person-role">
                    <h1>Rolü</h1>
                    <select name="role" id="roleUpdate">
                        <option :value="index" v-for="(personRole, index) in roles" :selected="personRole == current.role">{{ personRole }}</option>
                    </select>
                </div>
                <table class="person-meta">
                    <tr>
                        <td>Facebook</td>
                        <td>{{ current.facebook }}</td>
                    </tr>
                    <tr>
                        <td>Twitter</td>
                        <td>{{ current.twitter }}</td>
                    </tr>
                    <tr>
                        <td>Instagram</td>
                        <td>{{ current.instagram }}</td>
                    </tr>
                    <tr>
                        <td>Github</td>
                        <td>{{ current.github }}</td>
                    </tr>
                    <tr>
                        <td>Linkedin</td>
                        <td>{{ current.linkedin }}</td>
                    </tr>
                    <tr>
                        <td>Aktif mi?</td>
                        <td>{{ current.isactive }}</td>
                    </tr>
                </table>
                <button class="btn btn-lg update-person" @click="updatePersonPOST(person)">Güncelle</button>
            </div>
        </div>

        <div class="teams" v-if="!add && !update">
            <div class="team" v-for="(person, index) in people">
                <i class="fa fa-close" @click="deletePerson(index,person.id)"></i>
                <i class="fa fa-refresh" @click="updatePerson(person)"></i>
                <div class="team-title">
                    {{ person.name }}
                </div>
                <div class="person-image">
                    <img :src="'/' + person.image_path" alt="img">
                </div>
                <div class="person-role">
                    <h1>Rolü</h1>
                    <div>{{ person.role }}</div>
                </div>
                <table class="project-meta">
                    <tr>
                        <td>Facebook</td>
                        <td>{{ person.facebook }}</td>
                    </tr>
                    <tr>
                        <td>Twitter</td>
                        <td>{{ person.twitter }}</td>
                    </tr>
                    <tr>
                        <td>Instagram</td>
                        <td>{{ person.instagram }}</td>
                    </tr>
                    <tr>
                        <td>Github</td>
                        <td>{{ person.github }}</td>
                    </tr>
                    <tr>
                        <td>Linkedin</td>
                        <td>{{ person.linkedin }}</td>
                    </tr>
                    <tr>
                        <td>Aktif mi?</td>
                        <td>{{ person.is_active }}</td>
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
        props: ['team'],

        data(){
            return {
                people: this.team,
                role: '',
                name: '',
                image: '',
                facebook: '',
                twitter: '',
                instagram: '',
                github: '',
                linkedin: '',
                isactive: false,
                add: false,
                update: false,
                success: false,
                error: false,
                current: {
                    name: '',
                    role: '',
                    image: '',
                    facebook: '',
                    twitter: '',
                    instagram: '',
                    github: '',
                    linkedin: '',
                    isactive: false,
                },
                roles: {
                    kurucu: "Kurucu",
                    baskan: "Başkan",
                    baskanyrd: "Başkan Yardımcısı",
                    sekbaskani: "Sosyal Etkinlikler Komitesi Başkanı",
                    eykbaskani: "Eğlence ve Yarışma Komitesi Başkanı",
                    ekbaskani: "Eğitim Komitesi Başkanı",
                    sosyalmedya: "Sosyal Medya Yöneticisi",
                    sekbaskanyrd: "Sosyal Etkinlikler Komitesi Başkan Yardımcısı",
                    eykbaskanyrd: "Eğlence Yarışma Komitesi Başkan Yardımcısı",
                    ekbaskanyrd: "Eğitim Komitesi Başkan Yardımcısı"
                }
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

            addPerson(){
                let formData = new FormData();
                let imagefile = document.querySelector('#image');
                formData.append('image', imagefile.files[0]);
                formData.append('name', this.name);
                formData.append('role', this.role);
                formData.append('facebook', this.facebook);
                formData.append('twitter', this.twitter);
                formData.append('instagram', this.instagram);
                formData.append('github', this.github);
                formData.append('linkedin', this.linkedin);
                formData.append('isactive', this.isactive);
                formData.append('image', imagefile.files[0]);


                const headers = {
                    'Content-Type': 'multipart/form-data'
                };

                axios.post('/admin/team', formData, headers).then((response) => {
                    this.success = true;
                    console.log(response);
                }).catch((e) => {
                    this.error = true;
                    console.log(e)
                })
            },

            deletePerson(index,person_id){
                var self = this;
                this.$swal({
                    title: 'Emin misin?',
                    text: "Sildiğin üyeyi geri alamazsın!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Evet, sil!',
                    cancelButtonText: 'Hayır'
                }).then((result) => {
                    if (result.value) {
                        axios.delete('/admin/team',{
                            params: {person_id: person_id}
                        }).then(response => {
                            if(response.status === 200){
                                self.$swal(
                                    'Silindi!',
                                    'Üye silindi.',
                                    'success'
                                );
                                self.people.splice(index,1);
                            }
                        });

                    }
                });

            },

            updatePerson(person){
                this.current.name = person.name;
                this.current.role = person.role;
                this.current.image = person.image;
                this.current.facebook = person.facebook;
                this.current.twitter = person.twitter;
                this.current.instagram = person.instagram;
                this.current.linkedin = person.linkedin;
                this.current.github = person.github;
                this.current.isactive = person.is_active;

                this.update = true;
            },

            updatePersonPOST(person){
                console.log(person)
            }
        }
    }

</script>

<style scoped>
    div.row {
        margin:20px 0;
    }

    button.btn.btn-lg, select#roleUpdate {
        display: block;
        margin: 0 auto;
    }

    select#roleUpdate {
        margin-bottom:15px;
    }

    button.btn.btn-lg.update-person {
        margin-top: 20px;
        background: #fff;
    }

    div.person-role {
        margin: 20px 0;
        text-align: center;
    }

</style>