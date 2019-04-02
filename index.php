<html>
<head>
 <title>Изменение типа переменной</title>
</head>
<body>
<?php
$t = 3.14;
echo "t = $t -- ".gettype($t)."<br>";
settype($t,"string");
echo "t = $t -- ".gettype($t)."<br>";
settype($t,"integer");
echo "t = $t -- ".gettype($t)."<br>";
settype($t,"double");
echo "t = $t -- ".gettype($t)."<br>";
settype($t,"boolean");
echo "t = $t -- ".gettype($t);
?>
</body>
</html>