<?php

$index = $_POST['index'];
$title = $_POST['title'];
$text = $_POST['text'];

if (mb_strlen($title, 'UTF-8') <= 10 && mb_strlen($text, 'UTF-8') <= 30) {
    $filename = 'memo.json';
    $handle = fopen($filename, 'r');

    $memo_list = json_decode(fread($handle, filesize($filename)), true);
    fclose($handle);

    $new_array = array('id' => $num_id, 'title' => $title, 'text' => $text);

    $memo_list['Memo'][$index]['title'] = $title;
    $memo_list['Memo'][$index]['text'] = $text;

    $handle = fopen($filename, 'w');
    fwrite($handle, json_encode($memo_list, JSON_UNESCAPED_UNICODE));
    fclose($handle);

    echo 'OK';
} else {
    echo 'NG';
}
