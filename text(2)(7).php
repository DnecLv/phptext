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
for($i=0;$i<10;$i++)
    $student[$i]=$i*2+1;
function wanting($a)
{
    rsort($a);
    $k=$a[0]-$a[count($a)-1];
    echo "差值是".$k."<br>";
}
wanting($student);
?>
</body>
</html>
