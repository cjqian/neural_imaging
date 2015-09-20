$(function(){
	$('img').click(function(){

    	// Get the src of the image
    	var src = $(this).attr("id");

    	$.ajax({
    		type: "POST",
    		url: "index.php",
    		data: {img : src}
    	});
	    var $this = $(this);
	    $this.toggleClass('selected');
	    
	    if($this.hasClass('selected'))
	        $this.next(':hidden').val($this.data('id'))
	    else
	        $this.next(':hidden').val('');
	});

	$('form').submit(function(){
	    console.log($(this).src);
	    return false;
	})
});
