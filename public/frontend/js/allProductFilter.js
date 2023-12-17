"use strict";

const filter = document.querySelector('.filterContainer');
const filterTrigger = document.querySelector('.sortingContainer .brugerMenu');

filterTrigger.addEventListener('click', togglefilter);

function togglefilter() {
  filter.classList.toggle('filterContainer--open');
}