let searchBtn = document.querySelector('#search-btn');
let searchBar = document.querySelector('.search-bar-container');
let formBtn = document.querySelector('#login-btn');
let loginForm = document.querySelector('.login-form-container');
let logoutForm = document.querySelector('.login2-form-container');
let formClose = document.querySelector('#form-close');
let menu = document.querySelector("#menu-bar");
let navbar = document.querySelector(".navbar");
let videoBtn = document.querySelectorAll(".vid-btn");


window.onscroll = () => {
    searchBtn.classList.remove('fa-time');
    searchBar.classList.remove('active');
}



menu.addEventListener('click', () => {
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');

});

searchBtn.addEventListener('click', () => {
    searchBtn.classList.toggle('fa-times');
    searchBar.classList.toggle('active');

});

formBtn.addEventListener('click', () => {
    if (myvar == 0) {
        loginForm.classList.add('active');
    } else {
        logoutForm.classList.add('active');
    }
});

formClose.addEventListener('click', () => {
    if (myvar == 0) {
        loginForm.classList.remove('active');
    } else {
        logoutForm.classList.remove('active');
    }
});

videoBtn.forEach(btn => {
    btn.addEventListener('click', () => {
        document.querySelector('.controls .active').classList.remove('active');
        btn.classList.add('active');
        let src = btn.getAttribute('data-src');
        document.querySelector('#video-slider').src = src
    });
});

var swiper = new Swiper(".review-slider", {
    spaceBetween: 20,
    loop: true,
});


function sendMail() {
    var para = {
        form_name: document.getElementById("name").value,
        email_id: document.getElementById("email").value,
        message: document.getElementById("message").value,
    }
    emailjs.send("service_g3vzfhm", "template_82ruvny", para).then(function (res) {
        alert("successful" + res.status);
    })
}