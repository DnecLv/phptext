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
array($student);
for($i=0;$i<10;$i++)
    $student[$i]=$i*2+1;
foreach($student as $row)
    echo $row ."<br>";
?>
</body>
</html>
