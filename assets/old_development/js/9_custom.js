jQuery(document).ready(function($) {
	// $('#video').vide({
 //     'mp4': 'assets/video/ocean',
 //     'webm': 'assets/video/ocean',
 //     'ogv': 'assets/video/ocean',
 //     'poster': 'assets/video/ocean',
 //   });



 	$(".tile").height($("#tile1").width());
    $(".carousel").height($("#tile1").width());
     $(".item").height($("#tile1").width());
     
    $(window).resize(function() {
    if(this.resizeTO) clearTimeout(this.resizeTO);
	this.resizeTO = setTimeout(function() {
		$(this).trigger('resizeEnd');
	}, 10);
    });
    
    $(window).bind('resizeEnd', function() {
    	$(".tile").height($("#tile1").width());
        $(".carousel").height($("#tile1").width());
        $(".item").height($("#tile1").width());
    });
});