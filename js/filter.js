$(function(){
    $('#filter li').click(function(){
        var category = $(this).html();
        console.log(category);
        $('#portfolio li').fadeOut();

        $('#portfolio li').each(function(){
           if($(this).hasClass(category)){
               $(this).fadeIn();
           }
        });
        
    });
});