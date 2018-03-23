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
$a=15;
$b=42;
function gcd($a,$b)
{
    return ($b==0)?$a :gcd($b,$a%$b) ;
}
echo "最大公约数是".gcd($a,$b)."<br>";
echo "最小公倍数是".$a*$b/gcd($a,$b)."<br>";
?>
</body>
</html>
