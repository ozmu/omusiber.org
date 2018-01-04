<template>
    <div>
        <div class="projects">
            <div v-for="project in projects">
                <div class="title">
                    {{ project.project_title }}
                </div>
                <div class="image">
                    {{ project.image_path }}
                </div>
                <div class="state">
                    {{ project.state }}
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

            }
        },

        created(){
            console.log(this.projects)
        }


    }
</script>