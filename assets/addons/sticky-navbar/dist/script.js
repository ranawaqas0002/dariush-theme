//Menu toggle-button
// $('.menu-icon').on('click', function () {
//   $('nav ul').toggleClass('showing');
// });
let menuIcon = document.querySelector('.menu-icon');
let navList = document.querySelector('nav ul');

menuIcon.addEventListener('click', () => {
  if (navList.classList.contains('showing')) {
    if (window.scrollY == 0) {
      document.querySelector('nav').classList.remove('black');
    }
    navList.classList.remove('showing');
  }
  else {
    navList.classList.add('showing');
    document.querySelector('nav').classList.add('black');
  }

});

//scrolling effect
document.addEventListener('scroll', () => {
  if (window.scrollY != 0) {
    document.querySelector('nav').classList.add('black');
  } else {
    document.querySelector('nav').classList.remove('black');
  }
});

// $(window).on('scroll', function () {
//   if ($(window).scrollTop()) {
//     $('nav').addClass('black');
//   } else {
//     $('nav').removeClass('black');
//   }
// });