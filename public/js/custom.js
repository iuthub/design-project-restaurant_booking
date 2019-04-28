$(window).scroll(function() {
    if ($(this).scrollTop() == 0){
         $('#r1').removeClass('reveal');
         $('#main').removeClass('reveal');
       }
    if ($(this).scrollTop()>0 && $(this).scrollTop()<400)
     {
        $("#r1").addClass('reveal');
       }
  else
     $('#r1').removeClass('reveal');

   if ($(this).scrollTop()>470){
           $('#r1').removeClass('reveal');
           $("#r1").addClass('navbar-bg');
           $("#main").addClass('reveal');
         }
    else
     $('#r1').removeClass('navbar-bg');
});
$('#myCarousel2').carousel({
    interval: 4000
});
$(function() {
    $("#gallery-slider").owlCarousel({
        // items: 4,
        merge: true,
        loop: true,
        nav:true,
        margin: 10,
        video: true,
        lazyLoad: true,
        center: true,
        responsive: {
            0: {
                items: 2
            },
            600: {
                items: 4
            },
            1000: {
                items: 8
            }
        }
    });
});