"use strict";
if( window.location.href.indexOf("allProducts") > -1 ) {

  const filter = document.querySelector('.filterContainer');
  const filterTrigger = document.querySelector('.sortingContainer .brugerMenu');

  filterTrigger.addEventListener('click', togglefilter);

  function togglefilter() {
    filter.classList.toggle('filterContainer--open');
  }

} else {
  console.log("Invalid URL /allProducts in file allProductFilter.js");
}