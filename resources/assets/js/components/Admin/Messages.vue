<template>
    <ul class="messages">
        <li class="message" v-for="(message, index) in contactItems">
            <div class="head">
                <div class="subject">{{ message.subject }}</div>
                <i class="fa fa-close" @click="deleteMessage(index,message.id)"></i>
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

        data(){
            return {
                contactItems: [],
            }
        },

        created(){
            for(let i = this.messages.length - 1; i >= 0; i--){
                this.contactItems.push(this.messages[i]);
            }
        },

        methods: {
            deleteMessage(index,message_id){
                var self = this;
                this.$swal({
                    title: 'Emin misin?',
                    text: "Sildiğin mesajı geri alamazsın!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Evet, sil!',
                    cancelButtonText: 'Hayır'
                }).then((result) => {
                    if (result.value) {
                        axios.delete('/admin/messages',{
                            params: {id: message_id}
                        }).then(response => {
                            if(response.status === 200){
                                self.$swal(
                                    'Silindi!',
                                    'Mesaj silindi.',
                                    'success'
                                );
                                self.contactItems.splice(index,1);
                            }
                        });

                    }
                });
            }
        }

    }
</script>

<style>
    ul.messages i.fa.fa-close {
        cursor: pointer;
    }
</style>