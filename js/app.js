$(document).ready(function(){
  (function($) {
  	var URI = window.location.href;
  	var parts = URI.split('/');
  	var item_index = parts.indexOf("websites") + 1;
  	var active_ele = parts[item_index] != '' ? parts[item_index] : "#";

  	$("ul.nav-top li").removeClass("active");
  	$(".nav-top").find('a[href*="'+active_ele+'"]').parent().addClass("active");

  })(jQuery);

});