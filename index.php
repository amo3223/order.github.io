<?php
    $title = '網站標題';
    $string = '我的首頁';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title; ?></title>
    <style>
        .mystyle {
            background-color: black;
            color: white;
        }
    </style>
</head>
<body>
    <div class="mystyle">
        <?php echo $string; ?>
    </div>
    <input onclick="myFunction()" type="button" value="點我">
</body>
</html>
<script>
    function myFunction() {
        alert('彈跳訊息!!');
    }
</script>
