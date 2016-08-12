<?php
$num1 = 2;
$num2 = 3;

date_default_timezone_set('Asia/Tokyo');
$date = date('Y-m-d H:i:s');
$res = $num1 * $num2;

$arr = array('date' => $date, 'res' => $res);

echo json_encode($arr);
?>
