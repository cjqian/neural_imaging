$(function () {
  $("img").click(function() {
	var $this = $(this);
    $this.toggleClass("selected"); 

    if($this.hasClass('selected'))
        $this.next(':hidden').val($this.data('id'))
    else
        $this.next(':hidden').val(''); 
  });

  $('form').submit(function(){
    console.log($(this).serialize());
    return false;
	})
});

