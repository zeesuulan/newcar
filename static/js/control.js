$(function() {

	$("#logout").click(function() {
		$.get("../api/sysLogout.php", function(data) {
			if (data.no == 0) {
				window.location.reload()
			}
		}, "json")
	})

	//导航
	$("#navbar").find("#" + pageData.name).addClass("active")

	$("#save_store").click(function() {
		$.post("../api/add.php", $("#store_form").serialize(), function(data) {
			if(data.no == 0) {
				window.location.reload()
			}
		}, "json")
	})
})