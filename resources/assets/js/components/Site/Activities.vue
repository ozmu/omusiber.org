<template>
    <div class="activities">
        <h3 class="uppercase lg-title content-title">
            <span class="titles">Etkinliklerimiz</span>
        </h3>
        <div class="no-padding">
            <div class="row-eq-height">
                <div class="col-md-5"></div>

                <div class="col-md-2">
                    <div class="center-v-menu">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><h4><a href="#vision" role="tab" data-toggle="tab"><i class="fa fa-eye font-30 main-color clear-icon"></i>Our Company Vision</a></h4></li>
                            <li role="presentation"><h4><a href="#mission" role="tab" data-toggle="tab"><i class="fa fa-clock-o font-30 main-color clear-icon"></i>Our Company Mission</a></h4></li>
                            <li role="presentation"><h4><a href="#strategy" role="tab" data-toggle="tab"><i class="fa fa-gears font-30 main-color clear-icon"></i>Our Company Strategy</a></h4></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-5"></div>
            </div>

            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="vision">
                    <div class="row-eq-height">
                        <div class="col-md-5 md-padding gry-bg pattern-3">
                            <div class="tbl tbl-70">
                                <div class="heading style3">
                                    <h3 class="uppercase">Our Company <span class="main-color bolder">Vision</span></h3>
                                    <p>It is BOOKRA that change your life style</p>
                                </div>
                                <p class="t-justify lg-txt">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborumLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                </p>

                            </div>
                        </div>
                        <div class="col-md-2"><div class="dash-bord"></div></div>
                        <div class="col-md-5 md-padding" style="background:url('assets/images/bgs/education.jpg') no-repeat 0 0;background-size: cover;"></div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="mission">
                    <div class="row-eq-height">

                        <div class="col-md-5 md-padding" style="background:url('assets/images/bgs/girl.jpg') no-repeat 0 0;background-size: cover;"></div>
                        <div class="col-md-2"><div class="dash-bord"></div></div>
                        <div class="col-md-5 md-padding gry-bg pattern-2">
                            <div class="tbl tbl-70">
                                <div class="heading style3">
                                    <h3 class="uppercase">Our Company <span class="main-color bolder">Mission</span></h3>
                                    <p>It is BOOKRA that change your life style</p>
                                </div>
                                <p class="t-justify lg-txt">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborumLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="strategy">
                    <div class="row-eq-height">
                        <div class="col-md-5 md-padding gry-bg pattern-1">
                            <div class="tbl tbl-70">
                                <div class="heading style3">
                                    <h3 class="uppercase">Our Company <span class="main-color bolder">Strategy</span></h3>
                                    <p>It is BOOKRA that change your life style</p>
                                </div>
                                <p class="t-justify lg-txt">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborumLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                </p>

                            </div>
                        </div>
                        <div class="col-md-2"><div class="dash-bord"></div></div>
                        <div class="col-md-5 md-padding" style="background:url('assets/images/blog/large/1.jpg') no-repeat 0 0"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</template>

<script>
    export default{
        props: ['activities'],

        data(){
            return {

            }
        },

        methods: {

        }
    }
</script>