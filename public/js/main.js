/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/*$('document').ready(function(){
    
    var $animation_elements_left = $('.left');
     var $animation_elements_right = $('.right');
    var $window = $(window);
    $window.scrollTop(function(){
        if($(this).height() >= 50 ) {
            $animation_elements_left.animate({
           opacity: 0.25,
           left: "-555px"
       },2000);
       $animation_elements_right.animate({
           opacity: 0.25,
           right: "-550px"
       },2000);
        } else {
           $animation_elements_left.animate({
           opacity: 1,
           right: "0"
       },2000);
       $animation_elements_right.animate({
           opacity: 1,
           left: "0"
       },2000);   
            
        }
       
        
    });
   
});*/

  //FADEOUT EFFECT AT manageIt page
jQuery('document').ready(function($) {


  var $window = $(window);
  var animation_elements_left = $('.left');
   var animation_elements_right = $('.right');
  $window.scroll(function() {

    $('.col-md-6').each(function() {
      var offsetTop = $(this).offset().top,
          scrollTop = $window.scrollTop(),
          height = $window.height(),
          start = offsetTop,
          scrollTopToAnimate = scrollTop - start,
          animate = (1 - scrollTopToAnimate / 100);

          if(scrollTop >= start && animate > 0) {
             $animation_elements_left.animate({
                opacity: 0.25,
                left: "-550px"
                },2000);
            $animation_elements_right.animate({
                opacity: 0.25,
                right: "-550px"
            },2000);
            
          } else if(scrollTop <= start) {
            $animation_elements_left.animate({
                opacity: 1,
                right: "0"
                },2000);
            $animation_elements_right.animate({
                opacity: 1,
                left: "0"
                  },2000);
            }
            
    });
    
  });
  });

 

