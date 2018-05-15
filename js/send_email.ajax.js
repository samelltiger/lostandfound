// function send_email(){
// 	var 
// }
jQuery.cookie = function(name, value, options) {
    if (typeof value != 'undefined') {
        options = options || {};
        if (value === null) {
            value = '';
            options = $.extend({}, options);
            options.expires = -1;
        }
        var expires = '';
        if (options.expires && (typeof options.expires == 'number' || options.expires.toUTCString)) {
            var date;
            if (typeof options.expires == 'number') {
                date = new Date();
                date.setTime(date.getTime() + (options.expires * 24 * 60 * 60 * 1000));
            } else {
                date = options.expires;
            }
            expires = '; expires=' + date.toUTCString();
        }
        var path = options.path ? '; path=' + (options.path) : '';
        var domain = options.domain ? '; domain=' + (options.domain) : '';
        var secure = options.secure ? '; secure' : '';
        document.cookie = [name, '=', encodeURIComponent(value), expires, path, domain, secure].join('');
    } else {
        var cookieValue = null;
        if (document.cookie && document.cookie != '') {
            var cookies = document.cookie.split(';');
            for (var i = 0; i < cookies.length; i++) {
                var cookie = jQuery.trim(cookies[i]);
                if (cookie.substring(0, name.length + 1) == (name + '=')) {
                    cookieValue = decodeURIComponent(cookie.substring(name.length + 1));
                    break;
                }
            }
        }
        return cookieValue;
    }
};


//提交数据
function send_email() {
    var email = $("#email").val();//您的邮箱
	var url = $("#filename").val();//您的邮箱

	if (email.length == 0) {
	    alert("邮箱不能为空!");
	    return;
	}

	var myreg = /^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;
	if (!myreg.test(email)) {
	    alert('请输入有效的E_mail!');
	    return;
	}

	$(".formBtn").text("正在发送，请稍等！");

	var postData = "email=" + email + "&type=verify";

	//向后台发送处理数据
	$.ajax({
	    type: "POST", //用POST方式传输
	    dataType: "text", //数据格式:JSON
	    url: './'+url+'.php', //目标地址
	    data: postData,
	    error: function (XMLHttpRequest, textStatus, errorThrown) {
	        alert("发送失败，请联系在线客服！");
	    },
	    success: function (msg) {
	        $(".formBtn").text("发送验证码");
	        console.log(msg);
	        alert(msg);
	    }
	});
}



// function check_time(){
	
// }