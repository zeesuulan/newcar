$(function() {

	var form = $("#update_form")

	form.on("submit", function() {
		$.post("../api/update_info.php", form.serialize(), function(data) {
			if(data.no == 0){
				alert("修改成功");
			}else{
				alert(data.msg)
			}
		}, "json")
		return false;
	})
})