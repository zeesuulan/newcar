$(function() {


	var delConfirmStr = "确定要删除嘛？",
		deleteURL = "../api/delete.php",
		addURL = "../api/add.php",
		updateURL = "../api/update.php",
		errmsg = $("#errmsg"),
		reload = function() {
			window.location.reload()
		}

	$("#logout").click(function() {
		$.get("../api/sysLogout.php", function(data) {
			if (data.no == 0) {
				reload()
			}
		}, "json")
	})

	//导航
	$("#navbar").find("#" + pageData.name).addClass("active")

	//=========================服务========================
	$("#bigSortModal_store").click(function() {
		errmsg.html("")
		$.post(addURL, $("#bigSort_form").serialize(), function(data) {
			if (data.no == 0) {
				reload()
			} else {
				errmsg.html(data.msg)
			}
		}, "json")
		return false
	})

	$("#subSortModal_store").click(function() {
		errmsg.html("")
		$.post(addURL, $("#subSort_form").serialize(), function(data) {
			if (data.no == 0) {
				reload()
			} else {
				alert(data.msg)
			}
		}, "json")
		return false
	})

	$(".sort_del").click(function() {
		if (window.confirm(delConfirmStr)) {
			$.post(deleteURL, {
				type: "big_sort",
				id: $(this).attr("sort_id")
			}, function(data) {
				if (data.no == 0) {
					reload()
				} else {
					alert(data.msg)
				}
			}, "json")
		}
		return false
	})

	$(".e_change").on("change", function() {
		$.post(updateURL, {
			type: "bookEm",
			id: $(this).attr("bid"),
			employee: $(this).val()
		}, function(data) {
			if (data.no == 0) {
				alert("修改成功")
			} else {
				alert(data.msg)
			}
		}, "json")
	})

	$(".ss_del").click(function() {
		if (window.confirm(delConfirmStr)) {
			$.post(deleteURL, {
				type: "sub_sort",
				id: $(this).attr("ssid")
			}, function(data) {
				if (data.no == 0) {
					reload()
				} else {
					alert(data.msg)
				}
			}, "json")
		}
		return false
	})
	//=========================服务========================

	//=========================订单========================
	$(".b_ok").click(function(){
		$.post(updateURL, {
			type: "bookingDone",
			id: $(this).attr("bid")
		}, function(data) {
			if (data.no == 0) {
				alert("修改成功")
				reload()
			} else {
				alert(data.msg)
			}
		}, "json")
	})

	$(".b_cancel").click(function(){
		$.post(updateURL, {
			type: "booking",
			id: $(this).attr("bid"),
			status: $(this).attr("bs")
		}, function(data) {
			if (data.no == 0) {
				alert("修改成功")
				reload()
			} else {
				alert(data.msg)
			}
		}, "json")
	})

	$(".b_del").click(function(){
		if (window.confirm(delConfirmStr)) {
			$.post(deleteURL, {
				type: "book",
				id: $(this).attr("bid")
			}, function(data) {
				if (data.no == 0) {
					reload()
				}
			}, "json")
		}
		return false
	})
	//=========================订单========================


	//=========================渠道========================
	$("#channel_store").click(function() {
		errmsg.html("")
		$.post(addURL, $("#channel_form").serialize(), function(data) {
			if (data.no == 0) {
				reload()
			} else {
				errmsg.html(data.msg)
			}
		}, "json")
		return false
	})

	$(".o_del").click(function() {
		if (window.confirm(delConfirmStr)) {
			$.post(deleteURL, {
				type: "channel",
				id: $(this).attr("oid")
			}, function(data) {
				if (data.no == 0) {
					reload()
				}
			}, "json")
		}
		return false
	})
	//=========================渠道========================

	//=========================用户========================
	$("#member_store").click(function() {
		errmsg.html("")
		$.post(addURL, $("#member_form").serialize(), function(data) {
			if (data.no == 0) {
				reload()
			} else {
				errmsg.html(data.msg)
			}
		}, "json")
		return false
	})

	$(".ms_del").click(function() {
		$.post(updateURL, {
			type: "member",
			id: $(this).attr("mid"),
			status: $(this).attr("ms")
		}, function(data) {
			if (data.no == 0) {
				reload()
			}
		}, "json")
		return false
	})

	$(".m_del").click(function() {
		if (window.confirm(delConfirmStr)) {
			$.post(deleteURL, {
				type: "member",
				id: $(this).attr("mid")
			}, function(data) {
				if (data.no == 0) {
					reload()
				}
			}, "json")
		}
		return false
	})
	//=========================用户========================

	//=========================门店========================
	$("#save_store").click(function() {
		errmsg.html("")
		$.post(addURL, $("#store_form").serialize(), function(data) {
			if (data.no == 0) {
				reload()
			} else {
				errmsg.html(data.msg)
			}
		}, "json")
		return false
	})

	$(".s_del").click(function() {
		if (window.confirm(delConfirmStr)) {
			$.post(deleteURL, {
				type: "store",
				id: $(this).attr("sid")
			}, function(data) {
				if (data.no == 0) {
					reload()
				}
			}, "json")
		}
		return false
	})
	//=========================门店========================

	//=========================员工========================
	$("#employee_store").click(function() {
		errmsg.html("")
		$.post(addURL, $("#employee_form").serialize(), function(data) {
			if (data.no == 0) {
				reload()
			} else {
				errmsg.html(data.msg)
			}
		}, "json")
		return false
	})

	$(".e_del").click(function() {
		if (window.confirm(delConfirmStr)) {
			$.post(deleteURL, {
				type: "employee",
				id: $(this).attr("eid")
			}, function(data) {
				if (data.no == 0) {
					reload()
				} else {
					alert(data.msg)
				}
			}, "json")
		}
		return false
	})
	//=========================员工========================

	//=========================活动========================
	$("#active_store").click(function() {
		errmsg.html("")
		$.post(addURL, $("#active_form").serialize(), function(data) {
			if (data.no == 0) {
				reload()
			} else {
				errmsg.html(data.msg)
			}
		}, "json")
		return false
	})

	$(".a_del").click(function() {
		if (window.confirm(delConfirmStr)) {
			$.post(deleteURL, {
				type: "active",
				id: $(this).attr("aid")
			}, function(data) {
				if (data.no == 0) {
					reload()
				}
			}, "json")
		}
		return false
	})

	$(".as_update").click(function() {
		$.post(updateURL, {
			type: "active",
			id: $(this).attr("aid"),
			status: $(this).attr("as")
		}, function(data) {
			if (data.no == 0) {
				reload()
			}
		}, "json")
		return false
	})
	//=========================活动========================

	//=========================公告========================
	$("#notice_store").click(function() {
		errmsg.html("")
		$.post(addURL, $("#notice_form").serialize(), function(data) {
			if (data.no == 0) {
				reload()
			} else {
				errmsg.html(data.msg)
			}
		}, "json")
		return false
	})

	$(".n_del").click(function() {
		if (window.confirm(delConfirmStr)) {
			$.post(deleteURL, {
				type: "notice",
				id: $(this).attr("nid")
			}, function(data) {
				if (data.no == 0) {
					reload()
				}
			}, "json")
		}
		return false
	})

	$(".n_update").click(function() {
		$.post(updateURL, {
			type: "notice",
			id: $(this).attr("nid"),
			status: $(this).attr("ns")
		}, function(data) {
			if (data.no == 0) {
				reload()
			}
		}, "json")
		return false
	})
	//=========================公告========================
})