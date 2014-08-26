$(function() {


	var delConfirmStr = "确定要删除嘛？"

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
		$("#errmsg").html("")
		$.post("../api/add.php", $("#store_form").serialize(), function(data) {
			if (data.no == 0) {
				window.location.reload()
			} else {
				$("#errmsg").html(data.msg)
			}
		}, "json")
		return false
	})

	$(".s_del").click(function() {
		if (window.confirm(delConfirmStr)) {
			$.post("../api/delete.php", {
				type: "store",
				id: $(this).attr("sid")
			}, function(data) {
				if (data.no == 0) {
					window.location.reload()
				}
			}, "json")
		}
		return false
	})
})