<?php

$index = $_POST['index'];

$filename = 'memo.json';
$handle = fopen($filename, 'r');

$memo_list = json_decode(fread($handle, filesize($filename)), true);
fclose($handle);

unset($memo_list['Memo'][$index]);
$memo_list['Memo'] = array_values($memo_list['Memo']);

$handle = fopen($filename, 'w');
fwrite($handle, json_encode($memo_list, JSON_UNESCAPED_UNICODE));
fclose($handle);
