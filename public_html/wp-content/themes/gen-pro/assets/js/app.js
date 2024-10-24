$(document).ready(function () {
  $("input[data-plugin='phone-mask']").inputmask({
    mask: "+\\9\\9\\8 (99) 999-99-99",
    oncomplete: function() {
      $(this).closest("form").find('button[type="submit"]').prop("disabled", false);  // Активируем кнопку, когда номер введен полностью
      $(this).removeClass("is-invalid");
      $(this).addClass("is-valid");
    },
    onincomplete: function() {
      $(this).closest("form").find('button[type="submit"]').prop("disabled", true);  // Деактивируем кнопку, если номер не полный
      $(this).removeClass("is-valid");
      $(this).addClass("is-invalid");
    }
  });
});


const adjustZoom = function () {
  if (window.innerWidth > 576) {
    document.body.style.zoom = window.innerWidth / 1200;
  } else {
    document.body.style.zoom = 1; // Сбрасываем зум, если ширина меньше 576px
  }
}

window.addEventListener("resize", adjustZoom);
window.addEventListener("load", adjustZoom);
adjustZoom();


var svg_arrow_right =
  '<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15 9.99998C14.9959 10.4384 14.8193 10.8576 14.5083 11.1666L10.9333 14.75C10.7772 14.9052 10.566 14.9923 10.3458 14.9923C10.1257 14.9923 9.91445 14.9052 9.75831 14.75C9.68021 14.6725 9.61821 14.5803 9.5759 14.4788C9.5336 14.3772 9.51182 14.2683 9.51182 14.1583C9.51182 14.0483 9.5336 13.9394 9.5759 13.8378C9.61821 13.7363 9.68021 13.6441 9.75831 13.5666L12.5 10.8333H4.16665C3.94563 10.8333 3.73367 10.7455 3.57739 10.5892C3.42111 10.433 3.33331 10.221 3.33331 9.99998C3.33331 9.77897 3.42111 9.56701 3.57739 9.41073C3.73367 9.25445 3.94563 9.16665 4.16665 9.16665H12.5L9.75831 6.42498C9.60139 6.26917 9.5128 6.0574 9.51202 5.83626C9.51124 5.61512 9.59833 5.40273 9.75415 5.24581C9.90996 5.0889 10.1217 5.0003 10.3429 4.99952C10.564 4.99874 10.7764 5.08583 10.9333 5.24165L14.5083 8.82498C14.8213 9.13611 14.9981 9.55867 15 9.99998Z" fill="#1EA574" /></svg>';
var svg_arrow_left =
  '<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.99996 10C5.00401 9.5616 5.18066 9.14243 5.49162 8.83335L9.06663 5.25002C9.22276 5.09481 9.43397 5.00769 9.65413 5.00769C9.87428 5.00769 10.0855 5.09481 10.2416 5.25002C10.3197 5.32749 10.3817 5.41965 10.424 5.5212C10.4663 5.62275 10.4881 5.73167 10.4881 5.84168C10.4881 5.95169 10.4663 6.06062 10.424 6.16216C10.3817 6.26371 10.3197 6.35588 10.2416 6.43335L7.49996 9.16668H15.8333C16.0543 9.16668 16.2663 9.25448 16.4225 9.41076C16.5788 9.56704 16.6666 9.779 16.6666 10C16.6666 10.221 16.5788 10.433 16.4225 10.5893C16.2663 10.7456 16.0543 10.8334 15.8333 10.8334H7.49996L10.2416 13.575C10.3985 13.7308 10.4871 13.9426 10.4879 14.1637C10.4887 14.3849 10.4016 14.5973 10.2458 14.7542C10.09 14.9111 9.87821 14.9997 9.65707 15.0005C9.43593 15.0013 9.22355 14.9142 9.06663 14.7584L5.49162 11.175C5.17863 10.8639 5.00182 10.4413 4.99996 10Z" fill="#1EA574"/></svg>';

$(function () {
  $(".products-slick").slick({
    prevArrow:
      "<button type='button' class='slick-prev slick-arrow'>" +
      svg_arrow_left +
      "</button>",
    nextArrow:
      "<button type='button' class='slick-next slick-arrow'>" +
      svg_arrow_right +
      "</button>",
    infinite: true,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 576,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });
  $(".about-slick").slick({
    infinite: true,
    arrows: false,
    speed: 2500,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1000,
  });
});





$(document).ready(function () {
  var svgLeft =
    '<svg class="svgLeft" width="28" height="28" viewBox="0 0 2000 2000" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2000 0C2000 1000 1200 2000 0 2000H2000V800V0Z" fill="var(--card-bg-color)"/></svg>';
  $(".ab-card-header").prepend(svgLeft);

  var svgRight =
    '<svg class="svgRight" width="28" height="28" viewBox="0 0 2000 2000" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 0C-1.82929e-05 1000 800 2000 2000 2000H0V800V0Z" fill="var(--card-bg-color)"/></svg>';
  $(".ab-card-header").append(svgRight);
});


function auto_grow(element) {
  element.style.height = "5px";
  element.style.height = element.scrollHeight + "px";
}

$('.contacts-form').submit(function (e) {
  e.preventDefault();
  var form = $(this);
  var url = form.attr('action');

  $.ajax({
    type: "POST",
    url: url,
    data: form.serialize(),
    success: function (data) {
      if (data['success']) {
        $('#successModal').modal('show')
        setTimeout(function () { $('#successModal').modal('hide') }, 3000);
      }
    }
  });
});
$('#contactModal form').submit(function (e) {
  e.preventDefault();
  var form = $(this);
  var url = form.attr('action');

  $.ajax({
    type: "POST",
    url: url,
    data: form.serialize(),
    success: function (data) {
      if (data['success']) {
        $('#contactModal').modal('hide')
        $('#successModal').modal('show')
        setTimeout(function () { $('#successModal').modal('hide') }, 3000);
      }
    }
  });
});

