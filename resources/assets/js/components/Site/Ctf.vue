<template>
  <div class="card">
        <header>
            <time datetime="2018-05-15T19:00">10 Mart 2018</time>
            <div class="logo">
                <img src="assets/images/logo.png"/>
            </div>
            <div class="sponsor">PoineTR</div>
        </header>
        <div class="announcement" v-if="!sss">
            <h1>OMUCTF'18</h1>
            <h3>En zoru olmayabilir fakat muhtemelen katılacağınız en eğlenceli CTF</h3>
            <h3 class="italic">Henüz kayıtlar başlamamıştır!</h3>
            <a href="#" class="btn btn-sm sss" @click="sss = !sss">Sık Sorulan Sorular</a>
                     
        </div>
        <div class="sss" v-if="sss">
            <a href="#" class="btn btn-sm sss back" @click="sss = !sss">Geri</a>
            <h1 class="sss">Sık Sorulan Sorular</h1>
            <div class="container">
                <div class="soru">
                    <h3>CTF Nedir?</h3>
                    <p>CTF, insanların siber güvenlik bilgilerini test ettiği yarışmalardır.</p>
                </div>
                <div class="soru">
                    <h3>OMUCTF'18 Nedir?</h3>
                    <p>OMUSiber tarafından düzenlenmiş en büyük çaplı CTF'dir. Organizasyonda ayrıca poineTR'nin de emeği çok büyüktür.</p>
                </div>
                <div class="soru">
                    <h3>CTF'in asıl amacı ne ?</h3>
                    <p>Asıl amaç her şeyden önce öğrenmek. Fakat bunun dışında gerçekten eğlenmek ve offline ctf zamanı gerçekleşecek olan konferansta birbirinden önemli isimlerle tanışma fırsatı bulmaktır.</p>
                </div>
                <div class="soru">
                    <h3>Kaç kişilik ekiple katılabilirim?</h3>
                    <p>Yarışmaya en fazla 3 kişilik ekiple katılabilirsiniz. İsterseniz bireysel katılım da gösterebilirsiniz.</p>
                </div>
                <div class="soru">
                    <h3>Yarışma süresi ne kadar?</h3>
                    <p>İlk aşama, tam olarak 9 Mart'ı 10 Mart'a bağlayan gece yani 10 Mart 00.00'da başlayacak ve 23.59'a kadar devam edecektir.</p>
                </div>
                <div class="soru">
                    <h3>Şehir dışından katılabilir miyim?</h3>
                    <p>Elbette. İlk aşama online olduğu için istediğiniz şehirden katılabilirsiniz.</p>
                </div>
                <div class="soru">
                    <h3>İlk aşamadan kastınız nedir?</h3>
                    <p>CTF iki aşamadan oluşuyor. İlk aşama online gerçekleşecek, ilk aşamada finale kalan ilk 8 takımı Samsun'a davet edeceğiz ve 
                        Nisan ayının sonlarına doğru düzenlediğimiz konferans'ın akşamında offline yarışma fırsatı bulacaklar. Ayrıca, Samsun'un güzel mekânlarında bu 8 takım için 
                        güzel eğlenceler hazırlayacağız. :)
                    </p>
                </div>
                <div class="soru">
                    <h3>Ödüller neler?</h3>
                    <p>Ödüller henüz belirlenmedi.</p>
                </div>
                <div class="soru">
                    <h3>İlk aşamada 1. olarak dereceye girip offline CTF'e katılmaya hak kazandım, 5. olarak dereceye girmiş takımla eşit mi başlayacağım offline CTF'e ?</h3>
                    <p>Elbette hayır. Aldığınız puanlar ikinci aşama olan offline ctf için de geçerli olacaktır. Aslında ikinci aşamada her takım, ilk aşamadaki puanından başlayacaktır.</p>
                </div>
                <div class="soru">
                    <p>Düzenlemeler için burayı takip edebilirsiniz. Sorularınız için siber@omu.edu.tr</p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Countdown from '../Countdown.vue';
export default {
  components: { Countdown },
  data(){
      return {
          sss: false,
      }
  }
}
</script>


<style>
    @import url('https://fonts.googleapis.com/css?family=Asap+Condensed:600i,700');

    ::-webkit-scrollbar
    {
        width: 0px;
    }
    ::-webkit-scrollbar-track-piece
    {
        background-color: transparent;
        -webkit-border-radius: 6px;
    }
    
    body {
    background: #fafafa;
    display: flex;
    text-transform: uppercase;
    font-family: 'Asap Condensed', sans-serif;
    }

    h1 {
    font-size: 60px;
    }
    h3 {
    font-size: 26px;
    }

    .italic {
    font-style: italic;
    }

    .card {
    position: relative;
    margin: auto;
    height: 100%;
    width: 100%;
    text-align: center;
    background: linear-gradient(#E96874, #6E3663, #2B0830);
    border-radius: 2px;
    box-shadow: 0 6px 12px -3px rgba(0,0,0,.3);
    color: #fff;
    padding: 30px;
    }

    .card header {
    position: absolute;
    top: 31px;
    left: 0;
    width: 100%;
    padding: 0 10%;
    transform: translateY(-50%);
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    align-items: center;
    }

    .card header > *:first-child {
    text-align: left;
    }
    .card header > *:last-child {
    text-align: right;
    }

    .logo {
    font-size: 24px;
    position: relative;
    }
    .logo:before,
    .logo:after {
    content: '';
    position: absolute;
    top: 50%;
    border-top: 3px solid currentColor;
    transform: translateY(-50%);
    }

    .logo span {
    display: block;
    position: absolute;
    width: 100%;
    top: calc(50% - 1px);
    }

    .announcement, div.sss {
    position: relative;
    border: 3px solid currentColor;
    border-top: 0;
    width: 100%;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    }

    .announcement:before,
    .announcement:after, div.sss::before, div.sss::after {
    content: '';
    position: absolute;
    top: 0px;
    border-top: 3px solid currentColor;
    height: 0;
    width: 15px;
    }
    .announcement:before, div.sss::before {
    left: -3px;
    }
    .announcement:after, div.sss::after {
    right: -3px;
    }

    * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    }

    html, body {
    height: 100%;
    }

    a,
    a:visited,
    a:focus,
    a:active,
    a:link {
    text-decoration: none;
    outline: 0;
    }

    a {
    color: currentColor;
    transition: .2s ease-in-out;
    }

    h1, h2, h3, h4 {
    margin: .15em 0;
    }

    ul {
    padding: 0;
    list-style: none;
    }

    img {
    vertical-align: middle;
    margin-top: 20px;
    height: auto;
    width: 20%;
    }

    h3.italic {
        font-size: 18px;
    }

    div.sss .container {
        max-height: 300px;
        margin: 0 10%;
        overflow-y: auto;
    }

    a.sss {
        border: 3px solid #e0c94d;
        padding: 15px;
        margin: 20px;
        transition: all ease .6s;
    }

    a.sss:hover {
        background: #752233;
        border-color: #fff;
        transition: all ease .6s;
    }

    a.back {
        left: 0;
        top: 0;
        position: absolute;
    }

    div.sss .soru {
        margin: 20px 0;
    }

    div.sss .soru h3,div.sss .soru p {
        width: 100%;
        text-align: left;
    }

    div.sss .soru h3 {
        font-size: 21px;
    }

    div.sss .soru p {
        font-size: 14px;
        text-transform: initial;
    }

    div.sss h1.sss {
        font-size: 52px;
    }

</style>
