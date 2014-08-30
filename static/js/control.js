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
				alert(data.msg)
			}
		}, "json")
		return false
	})

	$(".sort_del").click(function() {
		if (window.confirm(delConfirmStr)) {
			$.post("../api/delete.php", {
				type: "big_sort",
				id: $(this).attr("sort_id")
			}, function(data) {
				if (data.no == 0) {
					window.location.reload()
				}else{
					alert(data.msg)
				}
			}, "json")
		}
		return false
	})

	$(".ss_del").click(function() {
		if (window.confirm(delConfirmStr)) {
			$.post("../api/delete.php", {
				type: "sub_sort",
				id: $(this).attr("ssid")
			}, function(data) {
				if (data.no == 0) {
					window.location.reload()
				}else{
					alert(data.msg)
				}
			}, "json")
		}
		return false
	})
	//=========================服务========================

	//=========================渠道========================
	$("#channel_store").click(function() {
		$("#errmsg").html("")
		$.post("../api/add.php", $("#channel_form").serialize(), function(data) {
			if (data.no == 0) {
				window.location.reload()
			} else {
				$("#errmsg").html(data.msg)
			}
		}, "json")
		return false
	})

	$(".o_del").click(function() {
		if (window.confirm(delConfirmStr)) {
			$.post("../api/delete.php", {
				type: "channel",
				id: $(this).attr("oid")
			}, function(data) {
				if (data.no == 0) {
					window.location.reload()
				}
			}, "json")
		}
		return false
	})
	//=========================渠道========================

	//=========================用户========================
	$("#member_store").click(function() {
		$("#errmsg").html("")
		$.post("../api/add.php", $("#member_form").serialize(), function(data) {
			if (data.no == 0) {
				window.location.reload()
			} else {
				$("#errmsg").html(data.msg)
			}
		}, "json")
		return false
	})

	$(".ms_del").click(function() {
		$.post("../api/update.php", {
			type: "member",
			id: $(this).attr("mid"),
			status: $(this).attr("ms")
		}, function(data) {
			if (data.no == 0) {
				window.location.reload()
			}
		}, "json")
		return false
	})

	$(".m_del").click(function() {
		if (window.confirm(delConfirmStr)) {
			$.post("../api/delete.php", {
				type: "member",
				id: $(this).attr("mid")
			}, function(data) {
				if (data.no == 0) {
					window.location.reload()
				}
			}, "json")
		}
		return false
	})
	//=========================用户========================

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
				}else{
					alert(data.msg)
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