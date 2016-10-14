$(document).ready(function () {
  $(".button-collapse").sideNav();
  showHome();
});

function showHome() {
  $(".page").hide();
  $("#home-page").show();
}

function showAbout() {
  $(".page").hide();
  $("#about-page").show();
}

function showContact() {
  $(".page").hide();
  $("#contact-page").show();
}