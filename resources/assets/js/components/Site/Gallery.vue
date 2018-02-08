<template>
    <div id="gallery">
        <div class="heading main centered">
            <h3 class="uppercase lg-title"><span class="titles">{{ header }}</span></h3>
        </div>
        <div class="md-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="camera_wrap camera-slider lg-slider-cam" data-hide-pagination data-hide-play-pause data-height="500px" data-fx="simpleFade">
                            <div :data-thumb="image.image_path" :data-src="image.image_path" v-for="image in allImages">
                                <div class="camera_caption fadeFromBottom">
                                    {{ image.description }}
                                </div>
                            </div>

                            <!--
                            <div data-thumb="assets/images/gallery/thumb/pwnlydays.jpeg" data-src="assets/images/gallery/pwnlydays.jpeg">
                                <div class="camera_caption fadeFromBottom">
                                    Pwnlydays 2017 açılış konferansı Eğitim Fakültesi A Blok Konferans Salonu'nda gerçekleşti.
                                </div>
                            </div>
                            <div data-thumb="assets/images/gallery/thumb/ab2017.jpeg" data-src="assets/images/gallery/ab2017.jpeg">
                                <div class="camera_caption fadeFromBottom">
                                    Akademik Bilişim 2017'ye katıldık.
                                </div>
                            </div>
                            <div data-thumb="assets/images/gallery/thumb/ctfodul.jpeg" data-src="assets/images/gallery/ctfodul.jpeg">
                                <div class="camera_caption fadeFromBottom">
                                    OMUCTF'17 kazananlarına ödülleri verildi.
                                </div>
                            </div>
                            <div data-thumb="assets/images/gallery/thumb/denizparlak.jpeg" data-src="assets/images/gallery/denizparlak.jpeg">
                                <div class="camera_caption fadeFromBottom">
                                    Deniz Parlak okulumuzda siber güvenlik üzerine konuşma yaptı.
                                </div>
                            </div>
                            -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['header', 'images'],
        data(){
            return {
                allImages: this.images,
            }
        },

        methods: {

        }
    }
</script>