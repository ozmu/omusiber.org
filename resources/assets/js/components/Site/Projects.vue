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
                                    <div v-for="project in projects" class="portfolio-item" :class="project.category.toLowerCase()" @click="getProject(project.id)">
                                        <figure>
                                            <img :alt="project.project_title" src="http://html.it-rays.net/bookra/assets/images/portfolio/grid/1.jpg">
                                            <figcaption>
                                                <div class="port-captions">
                                                    <h4><a href="#">{{ project.project_title }}</a></h4>
                                                    <p class="description">{{ project.short_description }}</p>
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
                            </div>
                            <div class="col-md-12" v-show="!showAll">
                                <button @click="showAll = !showAll">back all</button>
                                <div class="project-title">
                                    Project Title {{ project_title }}
                                </div>
                                <div class="project-category">
                                    Project Category {{ project_category }}
                                </div>
                                <div class="project-image">
                                    Project Image {{ project_image }}
                                </div>
                                <div class="project-short-description">
                                    Project short description {{ project_short_description }}
                                </div>
                                <div class="project-description">
                                    Project long description {{ project_description }}
                                </div>
                                <div class="project-date">
                                    Project date {{ project_date }}
                                </div>
                                <div class="project-icon">
                                    Project icon {{ project_icon }}
                                </div>
                                <div class="project-state">
                                    Project state {{ project_state }}
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
                project_title: '',
                project_category: '',
                project_image: '',
                project_short_description: '',
                project_description: '',
                project_date: '',
                project_icon: '',
                project_state: ''

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

          getProject(id){
              const project = this.projects[id - 1];
              this.showAll = !this.showAll;
              this.project_title = project.project_title;
              this.project_category = project.category;
              this.project_image = project.image_path;
              this.project_short_description = project.short_description;
              this.project_description = project.description;
              this.project_date = project.date;
              this.project_icon = project.icon;
              this.project_state = project.state;

          }
        },

        created(){
            console.log(this.projects);
            this.about();
        },


    }
</script>