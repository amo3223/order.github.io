<html>
<head>
<?php
function randomkeys($length){   
   $output='';   
   for ($a = 0; $a<$length; $a++) {   
       $output .= chr(mt_rand(65, 90));    //生成php隨機數   
    }   
    return $output;   
}   
echo randomkeys(14); 

?>
</head>
</html>
