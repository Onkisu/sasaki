$(document).ready(function(){
     
    $('#menu').click(function(){
      $(this).toggleClass('fa-times');
      $('.navbar').toggleClass('nav-toggle');
    });
  
    $('#login').click(function()
    {
      $('.login-form').addClass('popup');
    }
    )
  
  
    $('.reg-form #reg').click(function()
    {
      // alert('sw');
      
      $('.login-form').removeClass('popup');
      $('.reg-form').addClass('popup');
    }
    )
  
  
    $('.login-form form .fa-times').click(function()
    {
      $('.login-form').removeClass('popup');
    }
    )
    
  
    $('.reg-form form .fa-times').click(function()
    {
      $('.reg-form').removeClass('popup');
    }
    )
     $(window).on('load scroll',function()
     {
      $('#menu').removeClass('fa-times');
      $('.navbar').removeClass('nav-toggle');
      $('.login-form').removeClass('popup');
     }
     
     )
  });