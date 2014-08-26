$(function(){

	$("#logout").click(function(){
		$.get("../api/sysLogout.php", function(data){
			if(data.no == 0) {
				window.location.reload()
			}
		}, "json")
	})
})