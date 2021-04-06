$(document).ready(function () {

  // Check for click events on the navbar burger icon
  $(".navbar-burger").click(function () {

    // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
    $(".navbar-burger").toggleClass("is-active");
    $(".navbar-menu").toggleClass("is-active");

  });

  $(".navbar-item").click(function () {

    // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
    $(".navbar-burger").removeClass("is-active");
    $(".navbar-menu").removeClass("is-active");

  });

  //Modal whit button
  $(".modal-button").click(function () {

    t = $(this).attr("target");

    // Toggle the "is-active" class on both the "modal"
    $("#" + t).addClass("is-active");

  });

  $(".modal-delete").click(function () {

    // Toggle the "is-active" class on both the "modal"
    $(".modal").removeClass("is-active");

  });

  //Menu
  $(".submenu").click(function () {

    ul = $(this).parent().children("ul");
    icon = $(this).children().children();
    $(this).toggleClass("is-active");
    $(icon).toggleClass("fa-plus-square").toggleClass("fa-minus-square");
    $(ul).toggleClass("is-hidden");

  });

  $(".submenu-closer").click(function () {


    ul = $((".submenu")).parent().children("ul");
    icon = $(".submenu").children().children();


    $(".submenu").removeClass("is-active");
    $(icon).addClass("fa-plus-square").removeClass("fa-minus-square");
    $(ul).addClass("is-hidden");

  });
  $(".menu-button").click(function () {
    col = $(".menu").parent();
    $(col).toggleClass("is-hidden");

  });

//   $(".notification.is-success.is-light").parent().delay(500).hide(1000);

//   $(".notification .delete").click(function () {
//     $(this).parent().parent().delay(500).hide(500);

//   });

});
