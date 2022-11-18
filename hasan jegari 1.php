<!DOCTYPE HTML PUBLIC >
<html>
<head>
    <title>php</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="hasan jegari 2.css">
</head>
<body>
<div class="login">
<h1>عدد را وارد کنید</h1>
<form  method = "post" >
<input type="number" name="name" placeholder="عدد">
<button type="submit" class="btn btn-primary btn-block btn-large">بررسی</button>
</form>
</div>
<?php
$input = $_POST['name'];
$d = [$input];


if($input != -1){
    for($i = 0; $i < 1; $i++){
        $arr[$i]= $input;
    };
    for($i = 0; $i < 1; $i++){
         $arr[$i];
    };
}else{
    print_r(array_reverse($arr));
}
    


?>
</body>
</html>