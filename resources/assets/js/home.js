$(document).ready(function(){

    var currentSection = location.hash;    
    var menuHeight = 50;

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