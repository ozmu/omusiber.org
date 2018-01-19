<template>
    <div class="row">
        <div v-for="(category, index) in allCategories">
            {{ category }}
        </div>
    </div>
</template>

<script>
    export default {
        props: ['categories'],

        data(){
            return {
                allCategories: []
            }
        },

        created(){
            this.allCategories = this.categories;
        },

        methods: {

        }
    }
</script>