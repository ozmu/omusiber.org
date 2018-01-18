<template>
    <div class="row">
        <div class="heading">
            Galeri Düzenle
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
        <div class="add-photo" v-if="!add" @click="add = !add">
            Fotoğraf Ekle
        </div>
        <div v-if="add">
            <div id="photo-add">
                <div class="row">
                    <div class="col-md-12">
                        <label for="description">Açıklama*</label>
                        <input type="text" id="description" class="form-control" v-model="description">
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

                <button class="btn btn-lg" @click="addPhoto">Fotoğraf Ekle</button>
            </div>
        </div>
        <div class="gallery" v-if="!add">
            <div class="row">
                <div class="col-md-6 photo" v-for="(photo, index) in allPhotos">
                    <i class="fa fa-close" @click="deletePhoto(index,photo.id)"></i>
                    <img :src="'/' + photo.image_path" :alt="index">
                    <div class="img-description">
                        {{ photo.description }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['photos'],

        data(){
            return {
                allPhotos: [],
                description: '',
                image: '',
                error: false,
                success: false,
                add: false,

            }
        },

        created(){
            this.allPhotos = this.photos;
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

            addPhoto(){
                let formData = new FormData();
                let imagefile = document.querySelector('#image');
                formData.append('image', imagefile.files[0]);
                formData.append('description', this.description);


                const headers = {
                    'Content-Type': 'multipart/form-data'
                };

                axios.post('/admin/gallery', formData, headers).then((response) => {
                    this.success = true;
                    console.log(response);
                }).catch((e) => {
                    this.error = true;
                    console.log(e)
                })
            },


            deletePhoto(index,photo_id){
                var self = this;
                this.$swal({
                    title: 'Emin misin?',
                    text: "Sildiğin fotoğrafı geri alamazsın!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Evet, sil!',
                    cancelButtonText: 'Hayır'
                }).then((result) => {
                    if (result.value) {
                        axios.delete('/admin/gallery',{
                            params: {photo_id: photo_id}
                        }).then(response => {
                            if(response.status === 200){
                                self.$swal(
                                    'Silindi!',
                                    'Fotoğraf silindi.',
                                    'success'
                                );
                                self.allPhotos.splice(index,1);
                            }
                        });

                    }
                });

            },

        }
    }
</script>

<style>
    .photo.col-md-6 {
        background: #e1e1e1;
        padding: 20px;
    }

    .photo.col-md-6:nth-child(odd){
        border-right: 1px solid #000;
        border-bottom: 2px solid #000;
    }

    .photo.col-md-6:nth-child(even){
        border-left: 1px solid #000;
        border-bottom: 2px solid #000;
    }


    .photo .fa.fa-close {
        cursor: pointer;
        font-size: 16px;
        position: absolute;
        top: 5px;
        right: 5px;
    }

    .add-photo {
        margin: 0 auto;
        background-color: #d0d0d0;
        padding: 20px;
        text-align: center;
        width: 30%;
        cursor: pointer;
        display: block;
        font-size: 16px;
        text-transform: uppercase;
    }

    .gallery {
        margin:40px 0;
    }

    #photo-add button {
        display: block;
        margin: 0 auto;
        margin-bottom: 50px;
        width: 25%;
    }

    #photo-add div.row {
        margin-bottom: 20px;
    }
</style>