<?php
function getrand_id(){
    $id_len = 6;//字串長度
    $id = '';
    $word = 'abcdefghijkmnpqrstuvwxyz23456789';//字典檔 你可以將 數字 0 1 及字母 O L 排除
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
?>
