/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$('document').ready(function(){
    $(window).scroll(function(){
        
       $('.left').animate({
           opacity: 0.25,
           left: "-600px"
       },2000);
       $('.right').animate({
           opacity: 0.25,
           right: "-600px"
       },2000);
        
    });
   
});