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

	//=========================服务========================
	$("#bigSortModal_store").click(function() {
		$("#errmsg").html("")
		$.post("../api/add.php", $("#bigSort_form").serialize(), function(data) {
			if (data.no == 0) {
				window.location.reload()
			} else {
				$("#errmsg").html(data.msg)
			}
		}, "json")
		return false
	})

	$("#subSortModal_store").click(function() {
		$("#errmsg").html("")
		$.post("../api/add.php", $("#subSort_form").serialize(), function(data) {
			if (data.no == 0) {
				window.location.reload()
			} else {
				$("#errmsg").html(data.msg)
			}
		}, "json")
		return false
	})

	// $(".s_del").click(function() {
	// 	if (window.confirm(delConfirmStr)) {
	// 		$.post("../api/delete.php", {
	// 			type: "store",
	// 			id: $(this).attr("sid")
	// 		}, function(data) {
	// 			if (data.no == 0) {
	// 				window.location.reload()
	// 			}
	// 		}, "json")
	// 	}
	// 	return false
	// })
	//=========================服务========================

	//=========================门店========================
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
	//=========================门店========================

	//=========================员工========================
	$("#employee_store").click(function() {
		$("#errmsg").html("")
		$.post("../api/add.php", $("#employee_form").serialize(), function(data) {
			if (data.no == 0) {
				window.location.reload()
			} else {
				$("#errmsg").html(data.msg)
			}
		}, "json")
		return false
	})

	$(".e_del").click(function() {
		if (window.confirm(delConfirmStr)) {
			$.post("../api/delete.php", {
				type: "employee",
				id: $(this).attr("eid")
			}, function(data) {
				if (data.no == 0) {
					window.location.reload()
				}
			}, "json")
		}
		return false
	})
	//=========================员工========================

	//=========================活动========================
	$("#active_store").click(function() {
		$("#errmsg").html("")
		$.post("../api/add.php", $("#active_form").serialize(), function(data) {
			if (data.no == 0) {
				window.location.reload()
			} else {
				$("#errmsg").html(data.msg)
			}
		}, "json")
		return false
	})

	$(".a_del").click(function() {
		if (window.confirm(delConfirmStr)) {
			$.post("../api/delete.php", {
				type: "active",
				id: $(this).attr("aid")
			}, function(data) {
				if (data.no == 0) {
					window.location.reload()
				}
			}, "json")
		}
		return false
	})
	//=========================活动========================

	//=========================公告========================
	$("#notice_store").click(function() {
		$("#errmsg").html("")
		$.post("../api/add.php", $("#notice_form").serialize(), function(data) {
			if (data.no == 0) {
				window.location.reload()
			} else {
				$("#errmsg").html(data.msg)
			}
		}, "json")
		return false
	})

	$(".n_del").click(function() {
		if (window.confirm(delConfirmStr)) {
			$.post("../api/delete.php", {
				type: "notice",
				id: $(this).attr("nid")
			}, function(data) {
				if (data.no == 0) {
					window.location.reload()
				}
			}, "json")
		}
		return false
	})
	//=========================公告========================
})