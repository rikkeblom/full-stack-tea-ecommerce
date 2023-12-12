"use strict";

const filter = document.querySelector('.mobileFilterContainer');
const filterTrigger = document.querySelector('.sortingContainer .brugerMenu');

filterTrigger.addEventListener('click', togglefilter);

function togglefilter() {
  filter.classList.toggle('mobileFilterContainer--open');
}