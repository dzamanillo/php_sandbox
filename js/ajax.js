jQuery(function($){






$('.more-btn').on('click', function(){


    $(this).next('#more').toggleClass('d-block');



    if( $(this).next('#more').hasClass( "d-block" ) ){

    

      $(this).find('span').text('-');


    }


    else {

      $(this).find('span').text('+');


    } 



  

})




$('.navbar-toggler').on('click', function(){

  location.href = '#';

})

  

 $('#search-promo').on('click', function(){


    $(this).hide();

    $(this).next().toggleClass('d-flex d-none').fadeIn(1000);

  


 });


 /*
 $('.promo').on('focusout', function(){


$(this).parents('.search-inner').removeClass('d-flex').hide();
$('#search-promo').show();



 })
  
*/  
  //max menu width


  var maxWidth=0; 
  $('.menu-centent').each(function() { 
      maxWidth = Math.max(maxWidth, $(this).width()); 
    
  }).width(maxWidth+40);



  
  var maxWidth1=0; 

  $('.product-variants .variants-title').each(function() { 
      maxWidth1 = Math.max(maxWidth1, $(this).width());    
  }).width(maxWidth1+40);



  //expand search

  $('.searchbtn').on('click', function(){

      $(this).parent().toggleClass('border-0');
      $(this).parent().toggleClass('width-0');


  });


  $('.nav-title').on('click', function(){

    

      $(this).next('.nav-items').slideToggle('slow', function(){


          if($(this).is(':visible')){




            $('.nav-title').addClass('gray');

          


            $(this).prev('.nav-title').addClass('active-nav').removeClass('gray');


          }


          else {

            $('.nav-title').removeClass('gray');

            $(this).prev('.nav-title').removeClass('active-nav');

           

          }


      });


     // $('.nav-items:visible').not('.nav-items').slideDown();


    


  });


  //formcontrol

  


  $('.label-ani').on('focus', function(){
    $(this).prev().addClass('label-active');

    

})


$('.label-ani').on('focusout', function(){


    $(this).prev().removeClass('label-active');
    
    if($(this).val() != ''){

        $(this).prev().addClass('label-active');

    }    

})


$('.product-slider').slick({

  infinite: true,   adaptiveHeight: false,

speed: 300,

arrows:false,
dots:true,
slidesToShow: 1,


});

    $('#product-slider').slick({


        infinite: true,   adaptiveHeight: false,

        
      prevArrow: $('.arr-left'),
      nextArrow: $('.arr-right'),
  speed: 300,
  slidesToShow: 3,



    });



    $('.slider').matchHeight();


    $('.tab-data').hide();

    $('.tab-data:first').show().fadeOut(0).fadeIn();

    $('.quates-nav li').on('click', function(){

    $('.quates-nav li').removeClass('active');

     

      $('.tab-data').hide();

        $display = $(this).attr('data-target');    
        
        if($display){
          $(this).addClass('active');
        }

        $('#'+$display).show().fadeOut(0).fadeIn();


    })




    $('#contact-form').validate({ // initialize the plugin
  
  

      submitHandler: function () {
       
       
       $.ajax({
         url:"info-received.php",   
         data: $( '#contact-form' ).serialize() ,
         type:"POST",           
         dataType:"text",        
         success:function(data){
             


          $('#thankyou').modal('show');

          $('.contact form').hide();

          $('.contact').toggleClass('opacity-1');


          console.log(data);


     
          
     
          }
     
     })
      
        
         return false;
       }
     
     
     
     }
       
       
   );




    $('.btn-close').on('click', function(){

      $('.contact form').show();

      $('.contact').toggleClass('opacity-1');




    })



})

