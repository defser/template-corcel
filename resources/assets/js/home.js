$(document).ready(function(){
    alignFooter();
    var currentSection = location.hash;
    var menuHeight = 100;

    /* PANEL */
    var slickPanel = $('.slider-home-panel');

    //primeira animação dos textos do painél
    slickPanel.on('init', function (event, slick) {
      setTimeout(function() {
          $(slick.$slides.get(0)).find(".text").animate({
            opacity: 1
          },500, function(){
            $(slick.$slides.get(0)).find(".title-category").addClass('fadeInLeft');
            $(slick.$slides.get(0)).find(".title-panel").addClass('fadeInRight');
            $(slick.$slides.get(0)).find(".btn").addClass('fadeInLeft');
          });
      }, 500);
    });

    //inicialização do painel
    slickPanel.slick({
      infinite: true,
      autoplay: true,
      autoplaySpeed: 5000,
      arrows: false,
      dots: true
    });

    //quando troca a imagem do painel, anima os elementos de texto
    slickPanel.on('afterChange', function(event, slick, currentSlide, nextSlide){
      $(slick.$slides.get(currentSlide)).find(".text").animate({
        opacity: 1
      },500, function(){
        $(slick.$slides.get(currentSlide)).find(".title-category").addClass('fadeInLeft');
        $(slick.$slides.get(currentSlide)).find(".title-panel").addClass('fadeInRight');
        $(slick.$slides.get(currentSlide)).find(".btn").addClass('fadeInLeft');
      });
    });

    $('.slider-home-panel').css('height',$(window).height() - menuHeight);
    $('.slider-home-panel').find('.slick-list').css('height', $(window).height() - menuHeight);
    $('.slider-home-panel').find('.slick-slide').css('height', $(window).height() - menuHeight);

    $(window).resize(function(){
      $('.slider-home-panel').css('height',$(window).height() - menuHeight);
      $('.slider-home-panel').find('.slick-list').css('height', $(window).height() - menuHeight);
      $('.slider-home-panel').find('.slick-slide').css('height', $(window).height() - menuHeight);
      $('.slider-home-panel').find('figure').css('height', $(window).height() - menuHeight);
    });
    /* END PANEL */


    /* MENU ONE PAGE NAVIGATION */
    // if(currentSection != ""){
    //     var offset = $(currentSection.replace('-link',"")).offset().top - menuHeight;
    //     $("html, body").animate({ scrollTop: offset }, 500);
    // }

    // $('.navbar-nav a').click(function(event){
    //     event.preventDefault();
    //     event.stopPropagation();

    //     var clickedSection = $(this).attr('id').replace('-link',"");

    //     var currentSection = location.href;
    //     if(currentSection.indexOf('blog') != -1){
    //         window.location = "/#" + clickedSection;
    //         return false;
    //     }

    //     if(clickedSection.indexOf('blog') != -1){
    //         window.location = clickedSection;
    //         return false;
    //     }

    //     setTimeout(function() {
    //         var offset = $("#" + clickedSection).offset().top - menuHeight;
    //         $("html, body").animate({ scrollTop: offset }, 500, function(){
    //             location.hash = clickedSection;
    //         });
    //     }, 300);

    // });

    /* MENU RESIZE ON SCROLL */
    $(window).scroll(function() {
      if ($(document).scrollTop() > 50) {
        $('nav').addClass('shrink');
      } else {
        $('nav').removeClass('shrink');
      }
    });

    /* IMAGES AND BACKGROUND DIV LAZYLOAD */
    $("img.lazy, div.lazy").lazyload({
        effect : "fadeIn"
    });

    /* PRELOADER */
    setTimeout(function() {
      $("#preloader").animate({
        opacity: 0
      }, 400, function(){
        $(this).hide();
      });
    }, 400);

    function alignFooter(){
      var docHeight = $(window).height();
      var footerHeight = $('#footer').outerHeight();
      var footerTop = $('#footer').position().top + footerHeight;
      if (footerTop < docHeight) {
        $('#footer').css('margin-top', 10 + (docHeight - footerTop) + 'px');
      }
    }

});
