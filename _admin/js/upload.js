$(document).ready(function(){
  (function($) {
  	$("#label-upload").click(function(){
  		$('#logo_upload').click();
  		$('#logo_upload').change(function(e){
  		  // $in=$(this);
  		  // $in.next().html($in.val());
  		  
  		  // $("#label-upload").text("upload");
  		 	$("#frm-upload").ajaxForm({
  		 				target: '.img-replacement'
  		 	}).submit();
  		});
  	});
  })(jQuery);
});