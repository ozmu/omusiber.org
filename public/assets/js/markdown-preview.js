window.mdc.autoInit();  // initialise Material web components


/*
 Markdown preview
 */
var markdown = document.getElementById('markdown');
var preview = document.getElementById('preview');

markdown.innerText = localStorage['markdown'] || 'Buraya metin girin ...';

var previousContent = '';
// update preview if Markdown has changed
setInterval(function() {
    var currrentContent = markdown.innerText;
    if (previousContent !== currrentContent) {
        preview.innerHTML = marked(currrentContent);
        localStorage['markdown'] = previousContent = currrentContent;
    }
}, 50); // check every 50ms
