    <script>
// JS 產生亂數 by mtchang.tw@gmail.com
// 亂數產生
         function randomusefloor(min,max) {
	         return Math.floor(Math.random()*(max-min+1)+min);
         }
// 亂數英文字
         function makerandomletter(max) {
                  var text = "";
                  var possible = "abcdefghijklmnopqrstuvwxyz";

          for (var i = 0; i < max; i++)
                  text += possible.charAt(Math.floor(Math.random() * possible.length));
                   return text;
                  }

// 前兩碼英文小寫,後6碼數字
          function myrandomstring() {
                     document.getElementById("demo").innerHTML = makerandomletter(2)+randomusefloor(1,999999);
                  }

         </script>
