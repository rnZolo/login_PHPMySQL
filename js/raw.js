
//importing jquery npm and comfile through browserfy 
const $ = require('jquery');
//Loading DOM
$(document).ready(() => {
    sessionStorage.getItem('form') == null ? showLoginForm() : setform(); //if sessionstorage is not set display the login else use setform() 
    window.history.replaceState(null, null, window.location.href)
})
//when it has a err value add some stiyle
let messl = document.querySelector('.err-l');

//Form Toggle
$('.show-Reg').click(() => { // show registration when click
    showRegForm();
})
$('.show-Login').click(() => { //show login when click
    showLoginForm();
})
//add style to error message

//from sessionstorage set which form should display
function setform() {
    if (sessionStorage.getItem('form') == 'login') {
        showLoginForm();
    } else {
        showRegForm();
    }
}
//show regform and set sessionstorage value to Reg
function showRegForm() {
    $('.registration-wrapper').show();
    $('.login-wrapper').hide();
    sessionStorage.setItem('form', 'reg');

}
//show loginform and set sessionstorage value to login
function showLoginForm() {
    $('.registration-wrapper').hide();
    $('.login-wrapper').show();
    sessionStorage.setItem('form', 'login');
}
// console.log('hi')