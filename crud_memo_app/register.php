<?php
$title = $_POST['title'];
$text = $_POST['text'];

$new_array = array('id' => 999,'title' => $title,'text' => $text);

$filename = 'memo.json';
$handle = fopen($filename, 'r');

$memo_list = json_decode(fread($handle, filesize($filename)),true);
fclose($handle);

array_push($memo_list["Memo"],$new_array);

$handle = fopen($filename, 'w');
fwrite($handle,json_encode($memo_list,JSON_UNESCAPED_UNICODE));
fclose($handle);
