$(window).scroll(function() {
    if ($(this).scrollTop() == 0){
         $('#r1').removeClass('reveal');
         $('#main').removeClass('reveal');
       }
    if ($(this).scrollTop()>0 && $(this).scrollTop()<470)
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
