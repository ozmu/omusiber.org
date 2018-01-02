<template>
    <div class="gallery">
        <div class="col-md-3 photo" v-for="(photo, index) in photos">
            <i class="fa">x</i>
            <img :src="photo.image_path" :alt="index">
            <div class="img-description">
                {{ photo.description }}
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['photos'],

        data(){
            return {

            }
        },

        methods: {

        }
    }
</script>