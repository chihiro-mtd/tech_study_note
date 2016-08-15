<?php

$title = $_POST['title'];
$text = $_POST['text'];

if (mb_strlen($title, 'UTF-8') <= 10 && mb_strlen($text, 'UTF-8') <= 30) {
    $filename = 'memo.json';
    $handle = fopen($filename, 'r');

    $memo_list = json_decode(fread($handle, filesize($filename)), true);
    fclose($handle);

    $num_id = count($memo_list['Memo']);

    $new_array = array('id' => $num_id, 'title' => $title, 'text' => $text);

    array_push($memo_list['Memo'], $new_array);

    $handle = fopen($filename, 'w');
    fwrite($handle, json_encode($memo_list, JSON_UNESCAPED_UNICODE));
    fclose($handle);

    echo 'OK';
} else {
    echo 'NG';
}
