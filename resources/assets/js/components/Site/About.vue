<template>
    <div id="about-us">
        <div class="heading main centered">
            <h3 class="uppercase lg-title"><span class="titles">{{ header }}</span></h3>
            <p class="text-color">
                {{ content }}
            </p>
        </div>
        <div class="container">
            <div class="row teammates">
                <div class="col-md-3 col-md-offset-3" v-for="person in team">
                    <div class="team-box box-1">
                        <div class="team-img">
                            <img alt="" src="">
                            <span></span>
                        </div>
                        <div class="team-details t-center">
                            <div class="chairman">
                                <h4 class="team-name">{{ person.name }}</h4>
                                <h5 class="uppercase main-color">{{ person.role }}</h5>
                            </div>
                            <div class="person-info">
                                <h5 class="uppercase main-color">Python,Linux,PHP</h5>
                            </div>

                        </div>
                        <div class="team-socials">
                            <div class="social-list tbl">
                                <a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Facebook"><i class="fa fa-facebook ic-facebook"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Twitter"><i class="fa fa-twitter ic-twitter"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Linkedin"><i class="fa fa-linkedin ic-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>



                <!--
                <div class="col-md-3 col-md-offset-3">
                    <div class="team-box box-1">
                        <div class="team-img">
                            <img alt="" src="">
                            <span></span>
                        </div>
                        <div class="team-details t-center">
                            <div class="chairman">
                                <h4 class="team-name">Emre Engin</h4>
                                <h5 class="uppercase main-color">Kurucu</h5>
                            </div>
                            <div class="person-info">
                                <h5 class="uppercase main-color">Python,Linux,PHP</h5>
                            </div>

                        </div>
                        <div class="team-socials">
                            <div class="social-list tbl">
                                <a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Facebook"><i class="fa fa-facebook ic-facebook"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Twitter"><i class="fa fa-twitter ic-twitter"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Linkedin"><i class="fa fa-linkedin ic-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                -->

            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['header', 'content', 'team'],
        data(){
            return {

            }
        },


    }
</script>