$(function() {
	var form = $("#loginForm")

	form.on('submit', function() {
		$.post("api/sysLogin.php", $(this).serialize(), function(data) {
			console.log(data)
		})
		return false
	})
})