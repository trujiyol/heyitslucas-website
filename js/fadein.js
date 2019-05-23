

$(document).ready(function() {

    $('.thumbnail').each( function(i){
            
            var bottom_of_object = $(this).offset().top
            var bottom_of_window = $(window).scrollTop() + $(window).height();

           console.log(' bottom ' + bottom_of_object + ' window ' + bottom_of_window)

            /* If the object is completely visible in the window, fade it it */
            if( bottom_of_window > bottom_of_object  ){
                
               $(this).animate({'opacity':'1','margin-top':'0'},750 + Math.floor(Math.random()*500));
               //$(this).visible = false;
                //$(this).fadeIn();
                    
            }
            
        }); 


    $('.mover').each( function(i){
            
            var bottom_of_object = $(this).offset().top
            var bottom_of_window = $(window).scrollTop() + $(window).height();

           console.log(' bottom ' + bottom_of_object + ' window ' + bottom_of_window)

            /* If the object is completely visible in the window, fade it it */
            if( bottom_of_window > bottom_of_object  ){
                
               $(this).animate({'opacity':'1','margin-top':'0'},1000);
               //$(this).visible = false;
                //$(this).fadeIn();
                    
            }
            
        });
    
    /* Every time the window is scrolled ... */
    $(window).scroll( function(){
    
        /* Check the location of each desired element */
        $('.thumbnail').each( function(i){
            
            var bottom_of_object = $(this).offset().top
            var bottom_of_window = $(window).scrollTop() + $(window).height();

           console.log(' bottom ' + bottom_of_object + ' window ' + bottom_of_window)

            /* If the object is completely visible in the window, fade it it */
            if( bottom_of_window > bottom_of_object  ){
                
                $(this).animate({'opacity':'1','margin-top':'0'},750 + Math.floor(Math.random()*500));
                //$(this).visible = false;
                //$(this).fadeIn();
                    
            }
            
        }); 

       

    
    });
    
});