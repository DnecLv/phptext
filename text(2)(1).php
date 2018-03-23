<!doctype html>
<html>
<head>
    <title>2-1</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<style>
</style>
<body>
<?php
$a=234;
$b=0;
function  workforRecursion($num){
    global $b;
    $b=$b*10;
    $b=$b+$num%10;
    $num=floor($num/10);
    if ($num>0)
    {
        workforRecursion($num);
    }
             }
workforRecursion($a);
echo "输入的数是".$a."<br>";
echo "返回的数是".$b;
?>
</body>
</html>

