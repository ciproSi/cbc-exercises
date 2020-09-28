'use strict';

const iconBar = document.querySelector('.menu__iconBar'),
      menuList = document.querySelector('.menu__list');

iconBar.addEventListener('mouseenter', () => {
    menuList.classList.toggle('menu__list--open');
});

iconBar.addEventListener('mouseleave', () => {
    menuList.classList.toggle('menu__list--open');
});

menuList.addEventListener('mouseenter', () => {
    menuList.classList.toggle('menu__list--open');
});

menuList.addEventListener('mouseleave', () => {
    menuList.classList.toggle('menu__list--open');
});