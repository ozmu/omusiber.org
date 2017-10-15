$(document).ready(function(){
    $('p:has(em)').addClass('pem');
    hljs.initHighlightingOnLoad();
    $('p:has(img)').addClass('pimg');
});