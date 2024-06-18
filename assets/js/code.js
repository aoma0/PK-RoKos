window.addEventListener("scroll", function(){
    var header = document.querySelector("header");
    header.classList.toggle("min-header", window.scrollY > 0);
})

