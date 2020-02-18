//DEFINE CAROUSEL
jQuery(function($) {
  $("#owl-one").owlCarousel({
    loop: true,
    autoplay: true,
    loop: true,
    margin: 10,
    responsiveClass: true,
    nav: false,
    responsive: {
      0: {
        items: 1,
        nav: true
      },
      300: {
        items: 2
      },
      600: {
        items: 3,
        nav: true
      },
      1000: {
        items: 4,
        nav: true
      }
    }
  });
});

// For Search Input
let searchInput = document.getElementsByClassName("orig")[0],
  animElement = document.getElementById("animElement");

searchInput.addEventListener("focus", _ => {
  animElement.classList.add("activeAnim");
});
searchInput.addEventListener("blur", _ => {
  animElement.classList.remove("activeAnim");
});
