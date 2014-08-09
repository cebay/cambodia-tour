$(document).ready(function(){
  (function($) {
  	var URI = window.location.href;
  	var parts = URI.split('/');
  	var item_index = parts.indexOf("_admin") + 1;
  	var active_ele = parts[item_index] != '' ? parts[item_index] : "#";

  	$("ul.nav li").removeClass("active-admin");
  	$(".nav").find('a[href*="'+active_ele+'"]').addClass("active-admin");

  })(jQuery);

});