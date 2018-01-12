<template>
    <div id="contact">
        <div class="heading main centered">
            <h3 class="uppercase lg-title"><span class="titles">{{ header }}</span></h3>
        </div>
        <div class="md-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="heading style2">
                            <h3 class="uppercase"><span class="main-color">Bize </span> Ulaşın</h3>
                        </div>
                        <p>Etkinliklerimiz hakkında bilgi almak, projelerimize katılım sağlamak, bize yardım etmek için bize aşağıdan ulaşabilirsiniz.</p>

                        <hr class="dev-style2" />

                        <div id="contact-form" class="ajax-form">
                            <div class="row form-group error form-status form-success" v-if="success">
                                İlginiz için teşekkür ederiz.En kısa sürede dönüş yapacağız! :)
                            </div>
                            <div class="row form-group error form-status form-error" v-if="error">
                                Lütfen formu eksiksiz doldurun!
                            </div>
                            <div class="row form-group over-hidden">
                                <div class="col-md-6">
                                    <label for="contact-name">İsim <small>*</small></label>
                                    <input type="text" id="contact-name" v-model="name" class="form-control required" maxlength="25">
                                </div>

                                <div class="col-md-6">
                                    <label for="contact-email">Soyisim <small>*</small></label>
                                    <input type="text" id="contact-surname" v-model="surname" class="form-control required" maxlength="25">
                                </div>
                            </div>
                            <div class="row form-group over-hidden">
                                <div class="col-md-12">
                                    <label for="contact-email">Email<small>*</small></label>
                                    <input type="email" id="contact-email" v-model="email" placeholder="E-Postanızı Girin" class="form-control required">
                                </div>
                            </div>
                            <div class="row form-group over-hidden">
                                <div class="col-md-12">
                                    <label for="contact-subject">Konu <small>*</small></label>
                                    <input type="text" id="contact-subject" v-model="subject" class="form-control required" maxlength="100">
                                </div>
                            </div>
                            <div class="form-group over-hidden">
                                <label for="contact-message">Mesaj <small>*</small></label>
                                <textarea id="contact-message" v-model="message" rows="6" cols="30" class="form-control required" maxlength="1000"></textarea>
                            </div>
                            <div class="form-group m-t-2">
                                <button @click="sendMessage" class="btn rect-angles btn-gry-border btn-lg" type="submit" value="submit">
                                    <i class="fa fa-crop"></i></span></span></span>Send Message</button>
                            </div>

                        </div>

                    </div>
                    <div class="col-md-5">
                        <iframe class="gmap full" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d890.2432706851665!2d36.18579058594846!3d41.36518700831311!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5af82af892bd3a7c!2zT03DnCBZYcWfYW0gTWVya2V6aQ!5e0!3m2!1str!2str!4v1507065968116" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        <div class="p-a-3 gry-bg">
                            <h4 class="main-color uppercase">Merkez:</h4>
                            <ul class="details">
                                <li>Ondokuz Mayıs Üniversitesi Yaşam Merkezi 2. Kat Kulüp Odası 3<br>55270 Atakum/Samsun, Türkiye</li>
                                <li><i class="fa fa-envelope main-color"></i><span><strong>Email:</strong> siber@omu.edu.tr </span></li>
                                <li><i class="fa fa-telegram main-color"></i><span><strong>Telegram Kanalı:</strong> https://t.me/omusiber</span></li>
                            </ul>
                        </div>
                        <div class="tbl social-list">
                            <a href="https://www.facebook.com/omusiber" target="_blank" data-toggle="tooltip" data-placement="top" data-original-title="Facebook"><i class="fa fa-facebook ic-facebook"></i></a>
                            <a href="https://twitter.com/omusiber" target="_blank" data-toggle="tooltip" data-placement="top" data-original-title="Twitter"><i class="fa fa-twitter ic-twitter"></i></a>
                            <a href="https://github.com/omusiber" target="_blank" data-toggle="tooltip" data-placement="top" data-original-title="Github"><i class="fa fa-github ic-github"></i></a>
                            <a href="https://www.linkedin.com/company/13185144/" target="_blank" data-toggle="tooltip" data-placement="top" data-original-title="Linkedin"><i class="fa fa-linkedin ic-linkedin"></i></a>
                            <a href="https://plus.google.com/u/0/104261041898918397635" target="_blank" data-toggle="tooltip" data-placement="top" data-original-title="Google Plus"><i class="fa fa-google-plus ic-gplus"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['header'],
        data(){
            return {
                error: false,
                success: false,
            }
        },

        methods: {
            sendMessage(){
                if(this.name && this.surname && this.email && this.subject && this.message){
                    axios.post('/',{
                        name: this.name,
                        surname: this.surname,
                        email: this.email,
                        subject: this.subject,
                        message: this.message,
                    });
                        this.error = false;
                        this.success = true;
                        this.name  = '';
                        this.surname  = '';
                        this.email  = '';
                        this.subject  = '';
                        this.message  = '';

                }
                else{
                    this.success = false;
                    this.error =  true;
                    var self = this;
                    setTimeout(function(){
                        self.error = false;
                    }, 3000);


                }
            }
        }

    }
</script>
