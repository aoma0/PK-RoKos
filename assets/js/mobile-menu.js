const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
const mainUl = document.querySelector('.mainUl');

mobileMenuBtn.addEventListener('click', () => {
  if (mainUl.classList.contains('active')) {
    mainUl.classList.remove('active');
    mobileMenuBtn.classList.remove('active');
  } else {
    mainUl.classList.add('active');
    mobileMenuBtn.classList.add('active');
  }
});
const headerInnerMenuTxt = document.querySelectorAll('.headerInnerMenuTxt');

headerInnerMenuTxt.forEach((item) => {
  item.addEventListener('click', () => {
    item.classList.toggle('active');
  });
});

document.addEventListener('click', function(event) {
  var target = event.target;
  var mobileMenu = document.querySelector('.mainUl');
  var mobileMenuBtn = document.querySelector('.mobile-menu-btn');

  if (!mobileMenu.contains(target) && target!== mobileMenuBtn) {
    mobileMenu.classList.remove('active');
    mobileMenuBtn.classList.remove('active');
  }
});
