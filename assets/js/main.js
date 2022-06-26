// Open Mobile menu
const mobileNav = document.getElementById('mobile-menu');
const hamburger = document.getElementById('hamburger');
const hamburgerMobile = document.getElementById('mobile-hamburger');

hamburger.addEventListener('click', openMobileNav);

function openMobileNav() {
    mobileNav.classList.remove('hidden');
}

hamburgerMobile.addEventListener('click', closeMobileNav);

function closeMobileNav() {
    mobileNav.classList.add('hidden');
}


// Close mobile menu
const links = document.querySelectorAll('.nav__mobile__list > li');

for (link of links) {
    link.addEventListener('click', () => {
        mobileNav.classList.add('hidden');
    });
}

// Open card
const card = document.querySelector('.card');
const cardInfo = document.querySelector('.card-info');
const closeCard = document.querySelector('.card-info__icon');

card.addEventListener('click', () => {
    cardInfo.classList.add('active');
});

closeCard.addEventListener('click', () => {
    cardInfo.classList.remove('active');
});


// Gallery section
const items = document.querySelectorAll('.car__body__item');

items.forEach(item => {
    item.addEventListener('click', () => {
        items.forEach(item => item.classList.remove('show'));
        item.classList.add('show')
    })
});


const itemsGallery = document.querySelectorAll('.gallery__body__item');

itemsGallery.forEach(item => {
    item.addEventListener('click', () => {
        itemsGallery.forEach(item => item.classList.remove('show'));
        item.classList.add('show')
    })
});



//Validate form
const submitBtn = document.querySelector('.submit-btn');
submitBtn.addEventListener('click', validateForm);

function validateForm() {
    var a = document.forms["contact"]["fullName"].value;
    var b = document.forms["contact"]["jbmg"].value;
    var c = document.forms["contact"]["telephoneNumber"].value;
    var d = document.forms["contact"]["email"].value;
    if (a == null || a == "", b == null || b == "", c == null || c == "", d == null || d == "") {
        alert("Sva polja u formi su obavezna");
        return false;
    }
    else {
        alert("Podaci su uspešno prosleđeni.");
    }
}
