<?php 
$a = $_POST['amount'];
$b = $_POST['rate'];
$c = $_POST['year'];
// echo $a,$b,$c;
$result = $a * $b * $c/100;
echo   'Interset is ', $result;
?>
