<style>
 body{  
    background-color:gray;
} 
.thick-green-border{     
  border-color: green; 
  border-width: 5px;
  border-style: solid;    
}      
  .ex{     
    text-align:  center; 
  }  
 .plan{ 
   text-align:  center; 
 } 
 .box {
    border-style: solid;
    border-color: black;
    border-width: 5px;
    text-align: center;
  }
 
 .red-text { 
    margin-bottom: -25px;
    text-align: center;
  }
 .white-text { 
    margin-bottom: -30px;
    text-align: center;
  }
 
 
  .red-box {
    background-color: 	#fa8072;
    color: black;
    padding: 20px 40px 20px 40px;
  }
 .white-box {
    background-color: white;
    color: black ;
    padding: 20px 40px 20px 40px;
  }

<html>
  
  <body>
 <div class="ex"><img  class="thick-green-border" src="https://i.imgur.com/JNEWQjD.png" width="100" height="100"></div>
<div class="plan"><h3>已收到你的訂單</h3></div>
    <?php
function getrand_id(){
    $id_len = 10;//字串長度
    $id = '';
    $word = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';//字典檔 你可以將 數字 0 1 及字母 O L 排除
    $len = strlen($word);//取得字典檔長度
 
    for($i = 0; $i < $id_len; $i++){ //總共取 幾次
        $id .= $word[rand() % $len];//隨機取得一個字元
    }
    return $id;//回傳亂數帳號
}
 
$a=array();//初始化一個陣列要來存放所產生的亂數
 
for($x=0;$x<10;$x++){ //$x=>要取得幾筆亂數帳號
    $b=getrand_id();//取得亂數帳號
    if(!in_array($b,$a)){//判斷有沒有重覆
        array_push($a,$b);//將產生的亂數帳號加入陣列
    }else{$x-=1;}//有重覆再重新產生一筆
}
 
for($x=0;$x<1;$x++){
    echo $a[$x];//顯示結果
}
?>
    <h5 class="red-text"></h5> 
<div class="box red-box">
  <h5>萬分感謝你的惠顧</h5>
  <h5>1.本店提供台灣本島寄送服務(不接受郵政信箱地址),暫無提供離島,確認付款完成 我們會在30分鐘到一小時內將商品寄到你的收貨地址。</h5>
    
</div>
 <br></br>
<h5 class="white-text"></h5> 
<div class="box white-box">
  
    
</div>
  </body>
</html>
