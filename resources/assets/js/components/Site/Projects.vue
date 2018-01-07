<template>
    <div>
        <h3 class="uppercase lg-title content-title">
            <span class="titles">Projelerimiz</span>
        </h3>
        <div class="projects">
                <div class="md-padding">
                        <div class="row">
                            <div class="col-md-12" v-show="showAll">
                                <div class="filter-by style2">
                                    <ul id="filters">
                                        <li class="selected"><a href="#" class="filter" data-filter="*"><span>Tümü</span></a></li>
                                        <li v-for="category in categories"><a href="#" class="filter" :data-filter="'.' + category.toLowerCase()"><span>{{ category }}</span></a></li>
                                    </ul>
                                </div>
                                <div class="portfolio grid p-3-cols p-style2" id="grid">
                                    <div v-for="project in projects" class="portfolio-item" :class="project.category.toLowerCase()">
                                        <figure>
                                            <img :alt="project.project_title" :src="project.image_path">
                                            <figcaption>
                                                <div class="port-captions">
                                                    <h4><a href="#">{{ project.project_title }}</a></h4>
                                                    <p class="description">{{ project.short_description }}</p>
                                                </div>
                                                <div class="icon-links">
                                                    <a href="#" class="link white-bg"><i class="fa fa-link"></i></a>
                                                    <a href="assets/images/portfolio/grid/1.jpg" class="zoom main-bg" title="Quality Products for Companies"><i class="fa fa-search-plus"></i></a>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </div>

                                    <div class="portfolio-item design">
                                        <figure>
                                            <img alt="" src="http://html.it-rays.net/bookra/assets/images/portfolio/grid/1.jpg">
                                            <figcaption>
                                                <div class="port-captions">
                                                    <h4><a href="portfolio-single.html">Quality Products for Companies</a></h4>
                                                    <p class="description"><a href="#">Design</a>, <a href="#">Development</a></p>
                                                </div>
                                                <div class="icon-links">
                                                    <a href="portfolio-single.html" class="link white-bg"><i class="fa fa-link"></i></a>
                                                    <a href="assets/images/portfolio/grid/1.jpg" class="zoom main-bg" title="Quality Products for Companies"><i class="fa fa-search-plus"></i></a>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>

                                <div class="filter-by style2">
                                    <ul id="filters2">
                                        <li class="selected"><a href="#" class="filter" data-filter="*"><span>Tümü</span></a></li>
                                        <li v-for="state in states"><a href="#" class="filter" :data-filter="'.' + state.toLowerCase()"><span>{{ state }}</span></a></li>
                                    </ul>
                                </div>
                                <button @click="showAll = !showAll">go project</button>
                            </div>
                            <div class="col-md-12" v-show="!showAll">
                                <button @click="showAll = !showAll">back all</button>
                                <div class="project-title">
                                    Project Title
                                </div>
                                <div class="project-image">
                                    Project Image
                                </div>
                                <div class="project-description">
                                    Project long description
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
    </div>
</template>

<script>
    export default{
        props: ['projects'],

        data(){
            return {
                showAll: true,
                categories: [],
                states: [],
            }
        },

        methods: {
          about() {
              let i;
              for(i=0; i<this.projects.length; i++){
                  this.categories.push(this.projects[i].category);
                  this.states.push(this.projects[i].state);
              }
              this.categories = Array.from(new Set(this.categories));
              this.states = Array.from(new Set(this.states));
          },
        },

        created(){
            console.log(this.projects);
            this.about();
        },


    }
</script>