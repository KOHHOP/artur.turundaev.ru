$(document).ready(function(){
	var nextTime = 0;
	$(".code").each(function(index, element){
		
	  var time = $(this).attr('time') *1000;
	  nextTime = nextTime + time;
	  var obj = $(this);
	  setTimeout(function() { 
	 obj.removeClass('d-none');
	}, nextTime);
	})
})