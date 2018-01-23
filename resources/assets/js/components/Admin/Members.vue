<template>
    <div>
        <table class="table">
            <thead>
                <th>ID</th>
                <th>İsim</th>
                <th>Telefon</th>
                <th>Email</th>
                <th>Telegram</th>
                <th>Rol</th>
                <th>Sosyal Etkinlik Komitesi</th>
                <th>Eğitim Komitesi</th>
                <th>Yarışma Eğlence Komitesi</th>
                <th></th>
            </thead>
            <tbody>
                <tr v-for="(member, index) in members">
                    <td>{{member.id}}</td>
                    <td>{{member.name}}</td>
                    <td>{{member.phone}}</td>
                    <td>{{member.email}}</td>
                    <td>{{member.telegram}}</td>
                    <td>
                        <select name="role" id="role">
                            <option :value="member.role.toLowerCase()">
                                {{ member.role }}
                            </option>
                            <option v-for="role in roles" :value="role.toLowerCase()">
                                {{ role }}
                            </option>
                        </select>
                    </td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>
                        <a href="#" class="btn btn-default">Düzenle</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        props: ['members'],

        data(){
            return {
                roles: ['Üye', 'Yönetim Kurulu Üyesi', 'Sayman', 'Sekreter', 'Başkan Yardımcısı', 'Başkan'],
            }
        },

        created(){
        }

    }

</script>