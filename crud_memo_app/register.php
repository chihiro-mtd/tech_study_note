<?php

// 認証確認
// アクセストークン等で権限を確認

$title = $_POST['title'];
$text = $_POST['text'];

// 関数は1行の中で多用しない
// 値の確認はサーバサイドで行う
if (mb_strlen($title, 'UTF-8') <= 10 && mb_strlen($text, 'UTF-8') <= 30) {
    // ファイルがない場合 -> 新規作成？
    // パーミッションは読み書き可能が前提
    // ファイルがjsonかどうか確認
    $filename = 'memo.json';
    $handle = fopen($filename, 'r');

    // インジェクションに注意
    // 関数は1行の中で多用しない
    $memo_list = json_decode(fread($handle, filesize($filename)), true);
    fclose($handle);

    // 'Memo'があるかどうか(新規作成時は注意)
    $num_id = count($memo_list['Memo']);

    //$new_array = array('id' => $num_id, 'title' => $title, 'text' => $text);
    $new_array = ['id' => $num_id, 'title' => $title, 'text' => $text];

    array_push($memo_list['Memo'], $new_array);

    $handle = fopen($filename, 'w');
    // 保存先の残り要領の確認
    fwrite($handle, json_encode($memo_list, JSON_UNESCAPED_UNICODE));
    fclose($handle);

    echo 'OK';
} else {
    echo 'NG';
}
