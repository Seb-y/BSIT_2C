let header = document.querySelector('header');
let menu = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');
menu.onclick = () => {
    navbar.classList.toggle('active');
}
let darkmode = document.querySelector('#darkmode');
darkmode.onclick = () => {
    if(darkmode.classList.contains('bx-moon')){
        darkmode.classList.replace('bx-moon', 'bx-sun');
        document.body.classList.add('active');
    }
    else{
        darkmode.classList.replace('bx-moon', 'bx-sun');
        document.body.classList.remove('active');
    }
}
function sendEmail() {
    var confirmation = confirm("Are you sure you want to send this email?");
    if (confirmation === true) {
        alert("Email sent!");
    } else {
        event.preventDefault();
    }
}