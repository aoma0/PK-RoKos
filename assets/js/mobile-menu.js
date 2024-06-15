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