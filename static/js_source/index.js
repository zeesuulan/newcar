$(function() {
	var form = $("#loginForm")

	form.on('submit', function() {
		$.post("api/sysLogin.php", $(this).serialize(), function(data) {
			if (data.no != 0) {
				$("#errmsg").html(data.msg)
			} else {
				window.location.href = 'control'
			}
		}, 'json')
		return false
	})
})