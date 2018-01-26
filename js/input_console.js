var expression = /[-a-zA-Z0-9@:%_\+.~#?&//=]{2,256}\.[a-z]{2,4}\b(\/[-a-zA-Z0-9@:%_\+.~#?&//=]*)?/gi;
var regex = new RegExp(expression);
var url = document.getElementById('ip_input_box');
function validateinputConsole(){
    if (url.match(regex) == false) {
        alert("Please enter valid url!");
        return false;
    }
}
