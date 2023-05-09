$(document).ready(function () {
  $(".text-overflow").each(function () {
    const parentWidth = $(this).parent().width();
    const elementWidth = $(this).width();
    $(this).css("max-width", `${parentWidth}px`);

    // if (elementWidth >= parentWidth) {
    //   $(this).css("text-align", "left");
    // }
  });

  const navbarMenu = document.querySelector(".navbar-menu");
  const navbarToggle = document.querySelector(".navbar-toggle");

  navbarToggle.addEventListener("click", () => {
    navbarMenu.classList.toggle("show");
    navbarToggle.classList.toggle("active");
  });

});
