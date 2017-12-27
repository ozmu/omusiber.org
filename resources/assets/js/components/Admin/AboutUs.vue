<template>
    <div class="row">
        <div class="heading">
            Hakkımızda Kısmı Düzenleme
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
        <div id="edit">
            <div class="title">
                <textarea cols="30" rows="1" class="form-control" v-model="title"></textarea>
            </div>
            <div class="body">
                <textarea id="" cols="30" rows="5" class="form-control" maxlength="500" v-model="body"></textarea>
            </div>
            <button class="btn btn-lg" @click="updateAbout">Güncelle</button>
        </div>
    </div>
</template>

<script>
    export default {

        props: ['header','content'],

        data(){
            return {
                error: false,
                success: false,
                title: this.header,
                body: this.content
            }
        },

        methods: {
            updateAbout(){
                axios.post('/admin/about-us',{
                    about_us: this.title,
                    about_us_body: this.body
                }).then(() => {
                    this.success = true;
                }).catch(() => {
                    this.error = true;
                });
            }
        }
    }

</script>