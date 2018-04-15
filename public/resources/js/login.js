$(function() {
	// Waves初始化
	Waves.displayEffect();
	// 输入框获取焦点后出现下划线
	$('.form-control').focus(function() {
		$(this).parent().addClass('fg-toggled');
	}).blur(function() {
		$(this).parent().removeClass('fg-toggled');
	});
});
Checkbix.init();
$(function() {
	// 点击登录按钮
	$('#login-bt').click(function() {
		login();
	});
	// 回车事件
	$('#username, #password').keypress(function (event) {
		if (13 == event.keyCode) {
			login();
		}
	});
});
// 登录
function login() {
	$.ajax({
		url:'?m=index&a=verifyLogin',
		type: 'POST',
		data: {
			username: $('#username').val(),
			password: $('#password').val(),
			rememberMe: $('#rememberMe').is(':checked'),
			// backurl: BACK_URL
		},
		beforeSend: function() {

		},
		success: function(json){
			
			var json = JSON.parse(json); 
			console.log(json);
			if (json.resCode == 200) {
				location.href = '?m=index&a=index';
			} else {
				alert('用户名或密码错误。');
				// alert(json.data);
				// if (10101 == json.code) {
				// 	$('#username').focus();
				// }
				// if (10102 == json.code) {
				// 	$('#password').focus();
				// }
			}
		},
		error: function(error){
			console.log(error);
		}
	});
}