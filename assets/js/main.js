document.addEventListener("DOMContentLoaded", function () {
  var navLinks = document.querySelectorAll(".nav-link");
  navLinks.forEach(function (link) {
    link.addEventListener("click", function () {
      navLinks.forEach(function (nav) {
        nav.classList.remove("active");
      });
      this.classList.add("active");
    });
  });
});

document.addEventListener("DOMContentLoaded", function () {
  AOS.init();
});
