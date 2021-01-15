function addTag(openTag, closeTag){
    var textA= document.getElementById('content');
    if (textA != undefined){
        var start = textA.selectionStart;
        var end = textA.selectionEnd;
        var selected = textA.value.substring(start, end);

        var newText= textA.value.substring(0, start)+openTag+textA.value.substring(start, end)+closeTag+textA.value.substring(end);

        textA.value = newText;
    }
}
function addEnter(id, event){
    var textA= document.getElementById(id);
    var key = event.keyCode;
    if (key===13){
        var start = textA.selectionStart;
        var end = textA.selectionEnd;

        var newText= textA.value.substring(0, start)+"<br>"+textA.value.substring(start, end)+textA.value.substring(end);

        textA.value = newText;
        console.log(newText);
    }
}
