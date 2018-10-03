$(document).ready(function() {
  var menu = $('#menu-ppal');
  var contenedor = $('.navbar-default');
  var menu_offset = menu.offset();

  $(window).on('scroll', function() {
    if($(window).scrollTop() > menu_offset.top) {
      contenedor.addClass('navbar-fixed-top');
    } else {
      contenedor.removeClass('navbar-fixed-top');
    }
  });
	

    $('[data-toggle="popover"]').popover( 
		{
			html : true
		});
  
	
});// JavaScript Document