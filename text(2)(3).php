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
function  fun($n)
{
    for ($i = 2; $i <= $n; $i++) {
        for ($j = 2; $j <= sqrt($i); $j++)
        {
            if ($i % $j == 0) {
                continue 2;
            }
        }
        echo $i . "是素数" . "<br>";
    }
}
fun(100);
?>
</body>
</html>
