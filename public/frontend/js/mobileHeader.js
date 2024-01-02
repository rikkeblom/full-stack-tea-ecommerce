"use strict";

const menu = document.querySelector('.links_box');
const trigger = document.querySelector('.brugerMenu');

trigger.addEventListener('click', toggle);

function toggle() {
  menu.classList.toggle('links_box--open');
}