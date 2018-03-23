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
function maxD($a)
{
    $max=$a[0];
    $k=0;
    for($i=0;$i<count($a);$i++)
    {
        $max=($max>$a[$i])?$max:$a[$i];
        $k=($max>$a[$i])?$k:$i;
    }
    echo "最大值的下标是".$k."<br>";
}
maxD($student);
?>
</body>
</html>
