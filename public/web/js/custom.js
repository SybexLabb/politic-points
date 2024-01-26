$(document).ready(function(){
  if ($(window).width() > 1199) {
      $('.dropdown-sm').hover(function(){
        $(this).find('.dropdown-menu-ct-sm').addClass('show animate__animated animate__fadeInUp animate__faster');
        $(this).find('.nav-link').addClass('active-link');
        $(this).siblings().find('.dropdown-menu-ct-sm').removeClass('show');
        $(this).siblings().find('.nav-link').removeClass('active-link');
      }, function () {
          $(this).find('.dropdown-menu-ct-sm').removeClass('show animate__animated animate__fadeInUp animate__faster');
          $(this).find('.nav-link').removeClass('active-link');
      }
      );
    }
});

// $('.counter').counterUp({
//   delay: 10,
//   time: 1000
// });


$("[data-bg-image]").each(function () {
  var img = $(this).data("bg-image");
  $(this).css({
      backgroundImage: "url(" + img + ")"
  });
});


