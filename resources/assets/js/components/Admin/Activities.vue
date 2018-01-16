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

        <div class="add-activity" v-if="!add" @click="add = !add">
            Etkinlik Ekle
        </div>

        <div v-if="add">
            <div id="activity-add">
                <div class="row">
                    <div class="col-md-12">
                        <label for="title">Etkinlik Başlığı*</label>
                        <input type="text" id="title" class="form-control" v-model="activity_title">
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
                    <div class="col-md-6">
                        <label for="location">Konum*</label>
                        <input type="text" id="location" class="form-control" v-model="location">
                    </div>
                    <div class="col-md-6">
                        <label for="short_description">Kısa Açıklama*</label>
                        <input type="text" id="short_description" class="form-control" v-model="short_desc">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="description">Açıklama*</label>
                        <textarea name="description" id="description" cols="30" rows="3" class="form-control" v-model="description"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <label for="from">Düzenleyen*</label>
                        <input id="from" type="text" class="form-control" v-model="from">
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

                <button class="btn btn-lg" @click="addActivity">Etkinlik Ekle</button>
            </div>
        </div>

        <div class="activities" v-if="!add">
            <div class="activity" v-for="(activity, index) in allActivities">
                <i class="fa fa-close" @click="deleteActivity(index,activity.id)"></i>
                <i class="fa fa-refresh" @click="updateActivity(activity)"></i>
                <div class="activity-title">
                    {{ activity.activity_title }}
                </div>
                <div class="activity-image">
                    <img src="https://pbs.twimg.com/profile_images/825049984626221056/mAG1IJGY_400x400.jpg" alt="img">
                </div>
                <div class="activity-short-desc">
                    <h1>Kısa Açıklama</h1>
                    <div>{{ activity.short_description }}</div>
                </div>
                <div class="activity-description">
                    <h1>Açıklama</h1>
                    <div>{{ activity.description }}</div>
                </div>
                <table class="activity-meta">
                    <tr>
                        <td class="activity-from">Düzenleyen</td>
                        <td class="activity-from">{{ activity.from }}</td>
                    </tr>
                    <tr>
                        <td class="activity-category">Kategori</td>
                        <td class="activity-category">{{ activity.category }}</td>
                    </tr>
                    <tr>
                        <td class="activity-date">Tarih</td>
                        <td class="activity-date">{{ activity.date }}</td>
                    </tr>
                    <tr>
                        <td class="activity-state">Durum</td>
                        <td class="activity-state">{{ activity.state }}</td>
                    </tr>
                    <tr>
                        <td class="activity-state">Mekan</td>
                        <td class="activity-state">{{ activity.location }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['activities'],

        data(){
            return {
                activity_title: '',
                location: '',
                short_desc: '',
                description: '',
                image: '',
                from: '',
                category: '',
                date: '',
                state: '',
                allActivities: [],
                add: false,
                success: false,
                error: false,
            }
        },

        created() {
            this.allActivities = this.activities;
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
            addActivity(){
                axios.post('/admin/activities',{
                    activity_title: this.activity_title,
                    location: this.location,
                    short_desc: this.short_desc,
                    description: this.description,
                    image: this.image,
                    from: this.from,
                    category: this.category,
                    date: this.date,
                    state: this.state,
                }).then((response) => {
                    this.success = true;
                    console.log(response);
                }).catch(() => {
                    this.error = true;
                })
            },

            deleteActivity(index,activity_id){
                var self = this;
                this.$swal({
                    title: 'Emin misin?',
                    text: "Sildiğin etkinliği geri alamazsın!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Evet, sil!',
                    cancelButtonText: 'Hayır'
                }).then((result) => {
                    if (result.value) {
                        axios.delete('/admin/activities',{
                            params: {activity_id: activity_id}
                        }).then(response => {
                            if(response.status === 200){
                                self.$swal(
                                    'Silindi!',
                                    'Etkinlik silindi.',
                                    'success'
                                );
                                self.allActivities.splice(index,1);
                            }
                        });

                    }
                });

            },

            updateActivity(activity){
                console.log(activity)
            }
        }
    }

</script>