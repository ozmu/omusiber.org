<template>
    <div id="team">
        <div v-for="(person, index) in people">
            {{ person }}
        </div>
    </div>
</template>

<script>
    export default {
        props: ['team'],

        data(){
            return {
                people: this.team
            }
        },

        methods: {

        }
    }
</script>