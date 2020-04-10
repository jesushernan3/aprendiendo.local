// ...::: Menu Toggle :::...

// let opened = null;
// const toggleVisibility = e => e.classList.toggle("show");

// const handleDropdown = e => {
//   const clickedItem = e.parentElement.lastChild.previousSibling; // Selecciona
//   toggleVisibility(clickedItem);
//   if (!opened) {
//     opened = clickedItem;
//   } else if (opened == clickedItem) {
//     opened = null;
//   } else {
//     toggleVisibility(opened);
//     opened = clickedItem;
//   }
// };

// const handleClick = e => {
//   if (e.target.className.includes("dropDown")) {
//     handleDropdown(e.target);
//   } else if (opened) {
//     toggleVisibility(opened);
//     opened = null;
//   }
// };

// document.addEventListener("click", handleClick);

// ...::: Menu Fixed :::.

// const nav = document.querySelector(".menu-lateral");
// const topOfNav = nav.offsetTop;
// console.log(window.scrollY, nav.offsetTop);

// function fixedNav() {
//   const aside = document.getElementsByTagName("aside")[0];
//   if (window.scrollY >= topOfNav) {
//     // aside.style.paddingTop = nav.offsetHeight + "px";
//     aside.classList.add("fixed");
//     console.log(aside);
//   } else {
//     aside.classList.remove("fixed");
//     // aside.style.paddingTop = 0;
//   }
// }

// document.addEventListener("scroll", fixedNav);


// Menu Mobile
/** code by webdevtrick ( https://webdevtrick.com ) **/
(function($) { 
  $(function() { 
    $('nav ul li a:not(:only-child)').click(function(e) {
      $(this).siblings('.nav-dropdown').toggle();
      $('.dropdown').not($(this).siblings()).hide();
      e.stopPropagation();
    });
    $('html').click(function() {
      $('.nav-dropdown').hide();
    });
    $('#nav-toggle').click(function() {
      $('nav ul').slideToggle();
    });
    $('#nav-toggle').on('click', function() {
      this.classList.toggle('active');
    });
  }); 
})(jQuery);