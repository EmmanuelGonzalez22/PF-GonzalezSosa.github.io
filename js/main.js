// SCRIPT MENU

$(document).ready(function () {
  $("#menu_on").click(function () {
    $("body").toggleClass("visible_menu");
  });
});

$(window).scroll(function name() {
  if ($("#menu").offset().top > 250) {
    $("#menu").addClass("menuBlack");
  } else {
    $("#menu").removeClass("menuBlack");
  }
});

$(window).scroll(function name() {
  if ($("#desplegable").offset().top > 250) {
    $("#desplegable").addClass("menuBlack");
  } else {
    $("#desplegable").removeClass("menuBlack");
  }
});

$(window).scroll(function name() {
  if ($("#logoMobile").offset().top > 50) {
    $("#logoMobile").addClass("menuBg");
  } else {
    $("#logoMobile").removeClass("menuBg");
  }
});
