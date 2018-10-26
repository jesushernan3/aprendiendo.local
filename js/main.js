var dropdowns = document.getElementsByClassName("menues");
for (var i = 0; i < dropdowns.length; i++) {
  dropdowns[i].onclick = function() {
    let selectedItems = document.querySelectorAll(".menues.active");
    for (listItem in selectedItems) {
      if (selectedItems[listItem].classList) {
        console.log(selectedItems[listItem].classList.remove("active"));
      }
    }

    this.classList.toggle("active");
    //   let content = this.nextElementSibling;
    //   if (content.style.maxHeight) {
    //     // menu is open, we need to close it
    //     content.style.maxHeight = null;
    //   } else {
    //     // menu is closed
    //     content.style.maxHeight = content.scrollHeight + "px";
    //   }
  };
}

// // Get arbitrary element with id "my-element"
// var myElementToCheckIfClicksAreInsideOf = document.querySelector('.menues');
// // Listen for click events on body
// document.body.addEventListener('click', function (event) {

//     if (myElementToCheckIfClicksAreInsideOf.contains(event.target)) {
//         console.log('clicked inside');
//     } else {
//         //dropdowns.classList.add('probando');
//     }
// });

// ::::::::::: Escuchar Click Dentro/Fuera de Elemento ::::::::::: //

// Get arbitrary element with id "my-element"
// var myElementToCheckIfClicksAreInsideOf = document.querySelector('.dropdown');
// Listen for click events on body
// document.body.addEventListener('click', function (event) {
//     if (myElementToCheckIfClicksAreInsideOf.contains(event.target)) {
//         console.log('clicked inside');
//     } else {
//         console.log('clicked outside');
//     }
// });
