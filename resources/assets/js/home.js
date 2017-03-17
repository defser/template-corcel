$(document).ready(function(){

    var currentSection = location.hash;    
    var menuHeight = 50;

    /* PANEL */

    $('.slider-home-panel').slick({
      infinite: true,
      autoplay: true,
      autoplaySpeed: 5000,
      arrows: false,
      dots: true
    });

    $('.slider-home-panel').css('height',$(window).height() - 70);
    $('.slider-home-panel').find('.slick-list').css('height', $(window).height() - 70);
    $('.slider-home-panel').find('.slick-slide').css('height', $(window).height() - 70);

    $(window).resize(function(){
      $('.slider-home-panel').css('height',$(window).height() - 70);
      $('.slider-home-panel').find('.slick-list').css('height', $(window).height() - 70);
      $('.slider-home-panel').find('.slick-slide').css('height', $(window).height() - 70);
      $('.slider-home-panel').find('figure').css('height', $(window).height() - 70);
    });

    /* END PANEL */

    if(currentSection != ""){        
        var offset = $(currentSection.replace('-link',"")).offset().top - menuHeight;                            
        $("html, body").animate({ scrollTop: offset }, 500);                
    }

    $('.navbar-nav a').click(function(event){
        event.preventDefault();
        event.stopPropagation();

        var clickedSection = $(this).attr('id').replace('-link',"");

        var currentSection = location.href;        
        if(currentSection.indexOf('blog') != -1){
            window.location = "/#" + clickedSection;            
            return false;
        }                

        if(clickedSection.indexOf('blog') != -1){
            window.location = clickedSection;
            return false;
        }        
        
        setTimeout(function() {
            var offset = $("#" + clickedSection).offset().top - menuHeight;        
            $("html, body").animate({ scrollTop: offset }, 500, function(){
                location.hash = clickedSection;
            });
        }, 300);   
        
    });

});