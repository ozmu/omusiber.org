<template>
  <div class="card">
        <header>
            <time datetime="2018-05-15T19:00">10 Mart 2018</time>
            <div class="logo">
                <img src="assets/images/logo.png"/>
            </div>
            <div class="sponsor">PoineTR</div>
        </header>
        <div class="announcement">
            <h1>OMUCTF'18</h1>
            <h3>OMUSiber'in düzenlediği eğlenceli bir CTF</h3>
            <h3 class="italic">Henüz kayıtlar başlamamıştır!</h3>
        </div>
    </div>
</template>

<style>
    @import url('https://fonts.googleapis.com/css?family=Asap+Condensed:600i,700');

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

    .logo:before {
    right: 158px;
    width: 40%;
    }
    .logo:after {
    left: 158px;
    width: 55%;
    }

    .logo span {
    /*border: solid currentColor;
    border-width: 0 3px 3px 0;
    position: absolute;
    top: -22px;
    width: 69px;
    height: 70px;
    left: 50%;
    transform: translateX(-58%) rotate(58deg) skew(0deg, -30deg);*/
    display: block;
    position: absolute;
    width: 100%;
    top: calc(50% - 1px);
    }

    .announcement {
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
    .announcement:after {
    content: '';
    position: absolute;
    top: 0px;
    border-top: 3px solid currentColor;
    height: 0;
    width: 15px;
    }
    .announcement:before {
    left: -3px;
    }
    .announcement:after {
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
    height: auto;
    width: 20%;
    }

    h3.italic {
        font-size: 18px;
    }
</style>
