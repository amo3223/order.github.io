var btn=document.getElementById('btn')
	var order=document.getElementById('order')
	btn.onclick = function(){ 
		GetDateNow();
    }
	
	function GetDateNow(){
			// 时间戳
			var time = new Date();
			// 年
			var year= String(time.getFullYear());
			// 月
			var mouth= String(time.getMonth() + 1);
			// 日
			var day= String(time.getDate());
			// 时
			var hours= String(time.getHours());
			if(hours.length<2){
				hours='0' + hours
			}
			// 分
			var minutes= String(time.getMinutes());
			if(minutes.length<2) {
				minutes='0' + minutes
			}
			// 秒
			var seconds= String(time.getSeconds());
			if(seconds.length<2) {
				seconds='0' + seconds
			}
			var str = year + mouth + day + hours + minutes + seconds
			order.value = str
		}
