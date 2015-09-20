$(function(){
	$('img').click(function(){

    	// Get the src of the image
    	var src = $(this).attr("src");

    	$.post("/index.php", {"img": src});
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