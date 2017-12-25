<template>
    <ul class="messages">
        <li class="message" v-for="message in messages.slice().reverse()">
            <div class="head">
                <div class="subject">{{ message.subject }}</div>
                <i class="fa fa-close" @click="deleteMessage"></i>
                <i class="fa fa-reply"></i>
            </div>
            <div class="body">{{ message.message }}</div>
            <div class="email">{{ message.email }}</div>
            <div class="from">{{ message.name }} {{ message.surname }}</div>
            <div class="time">{{ message.created_at }}</div>
        </li>
    </ul>
</template>

<script>
    export default {
        props: ['messages'],

        computed: {

        },

        methods: {
            deleteMessage(){
                axios.delete('/admin/messages/delete',
                    {params: {'id': this.message.id}}).then(function(response){
                        console.log(response)
                }).catch(function (error) {
                    console.log(error)
                });
            }
        }

    }
</script>