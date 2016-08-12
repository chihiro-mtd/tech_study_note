<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];

if(is_numeric($num1) && is_numeric($num2)){
  date_default_timezone_set('Asia/Tokyo');
  $date = date('Y-m-d H:i:s');
  $res = $num1 * $num2;

  $arr = array('date' => $date, 'res' => $res);

  echo json_encode($arr);
}
else{
  echo "数字を入力してください";
}
?>
