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
function back($a)
{
    echo "原数组是";
    echo  Print_r($a)."<br>";
    $s=count($a);
    for($i=0;$i<$s;$i++)
    {
        $k[$i]=Array_pop($a);
    }
    echo "后数组是";
    echo  Print_r($k)."<br>";
}
back($student);
?>
</body>
</html>
