$(function(){
   var current_li;


   function setImg(src, id){
      $('#main').attr('src', src);  //add clicked img to frame img tag
      var path = "text/"+id+".txt";
      $.get(path, function(data){   //ajax call
         console.log(data);
         $('#description p').html(data);

      });

   }
    $('#portfolio img').click(function(){ //add click function to img in portfolio tag
       var src = $(this).attr('src');     //make var src wich hold clicked img
       var id = $(this).attr('id');
       current_li = $(this).parent(); 
       setImg(src, id);    //select img in li tag       
       $('#frame').fadeIn();              //enable frame
       $('#overlay').fadeIn();            //enable overlay
    });

    $('#overlay').click(function(){ //add click function to overlay tag
        $(this).fadeOut();           //when click on overlay go back to previus state
        $('#frame').fadeOut();              //go back to previus state
                
     });

     $("#right").click(function(){

      if(current_li.is(":last-child")){
         var next_li = $('#portfolio li').first();
      }else{
         var next_li = current_li.next();
      }
         var next_li = current_li.next();
         var next_src = next_li.children('img').attr('src');
         var id = next_li.children('img').attr('id');
         $('#main').attr('src', next_src);
         setImg(next_src, id);
         current_li = next_li;
     });

     $("#left").click(function(){
      var prev_li = current_li.prev();
      var prev_src = prev_li.children('img').attr('src');
      $('#main').attr('src', prev_src);
      current_li = prev_li;
   });
});