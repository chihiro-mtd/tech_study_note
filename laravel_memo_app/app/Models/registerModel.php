<?php

namespace App\Models;

use File;
use Illuminate\Database\Eloquent\Model;

class registerModel extends Model
{
    public function setNewMemo($title, $text)
    {
        $json_path = storage_path() . '/json/memo.json';
        $json = file_get_contents($json_path);
        $memo_list = json_decode($json, true);

        $memo_count = count($memo_list['Memo']);
        $new_id = $memo_list['Memo'][$memo_count - 1]['id'] + 1;
        $new_memo = ['id' => $new_id, 'title' => $title, 'text' => $text];

        array_push($memo_list['Memo'], $new_memo);

        $memo_list = json_encode($memo_list, JSON_UNESCAPED_UNICODE);

        File::put($json_path, $memo_list);
    }
}
