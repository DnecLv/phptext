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
for ($n=100; $n<1000; $n++)
    fun($n);
function  fun($n)
{
    $i = floor($n / 100);
    $j = floor(($n - $i * 100) / 10);
    $k = floor($n % 10);
    if ($i * $i * $i + $j * $j * $j + $k * $k * $k == $n) {
        echo $n . "是水仙花数" . "<br>";
    }
}
?>
</body>
</html>
