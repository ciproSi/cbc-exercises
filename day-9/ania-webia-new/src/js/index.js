'use strict';

console.log('conneceted to index.js');

//get the hamburger icon, page container, mobile menu and close mobile menu icon elements
const hamburgerBtn = document.getElementById('hamburger'),
      pageContainer = document.querySelector('.page'),
      mobileMenuContainer = document.querySelector('.mobile-menu'),
      closeMobMenu = document.getElementById('closeMobMenu');

hamburgerBtn.addEventListener('click', () => {
    
    //display mobile menu by adding the class
    mobileMenuContainer.classList.toggle('mobile-menu--display');

    //hide the all page content so only mobile menu stays visible
    pageContainer.classList.toggle('page--hidden');
    
});

closeMobMenu.addEventListener('click', () => {
    pageContainer.classList.toggle('page--hidden');
    mobileMenuContainer.classList.toggle('mobile-menu--display');
});

const mobileMenuLinks = document.querySelector('.mobile.menu a');
mobileMenuLinks.addEventListener('click', () => {
    pageContainer.classList.toggle('page--hidden');
    mobileMenuContainer.classList.toggle('mobile-menu--display');
});
