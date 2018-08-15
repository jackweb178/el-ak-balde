//jQuery pour réduire la barre de navigation sur le défilement
$(window).scroll(function() {
    if ($(".navbar").offset().top > 50) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
    }
});

// jQuery pour la fonction de défilement de page - nécessite le plugin jQuery Easing
$(function() {
    $(document).on('click', 'a.page-scroll', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});
/************************ dropdown navbar hover transition *************************/
  /*================>>>(celui la aussi marche) $('.dropdown').hover(function() {
   $(this).find('.dropdown-menu').stop(true, true).delay(250).fadeIn(650);
}, function() {
   $(this).find('.dropdown-menu').stop(true, true).delay(250).fadeOut(650);
 }); */
      $(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});

/******************** fin dropdown transition***************************/
/**************************info-bulles *********************************/
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
});
/**************************fin info-bulles *********************************/
/**************************scroll ,retour en tete de page *********************************/
$(document).ready(function(){
      $('body').append('<div id="toTop" class="btn btn-info"><span class="glyphicon glyphicon-chevron-up"></span></div>');
        $(window).scroll(function () {
            if ($(this).scrollTop() != 0) {
                $('#toTop').fadeIn();
            } else {
                $('#toTop').fadeOut();
            }
        }); 
    $('#toTop').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });
});
///////////////////////////////////////////////

