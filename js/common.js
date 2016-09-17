$(function(){
  $('.menu-toggle').on('click',function(){
    $('#site-navigation').toggleClass('toggled');
    $(this).toggleClass('toggled');
  });
});