<?php

$index = $_POST['index'];

// ファイルが開けない時はどうするか
$filename = 'memo.json';
$handle = fopen($filename, 'r');

$memo_list = json_decode(fread($handle, filesize($filename)), true);
fclose($handle);

unset($memo_list['Memo'][$index]);

// 異常検知に注意する
$memo_list['Memo'] = array_values($memo_list['Memo']);

$handle = fopen($filename, 'w');
fwrite($handle, json_encode($memo_list, JSON_UNESCAPED_UNICODE));
fclose($handle);

// 戻り値
