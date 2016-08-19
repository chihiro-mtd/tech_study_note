<?php

namespace App\Models;

use File;
use Illuminate\Database\Eloquent\Model;

class registerModel extends Model
{
    public function setNewMemo($title,$text)
    {
          $json_path = storage_path().'/json/memo.json';
          $json = file_get_contents($json_path);
          $memo_list = json_decode($json, true);

          $new_id = count($memo_list['Memo']);
          $new_memo = ['id' => $new_id, 'title' => $title,'text' => $text];

          array_push($memo_list['Memo'],$new_memo);

          $memo_list = json_encode($memo_list, JSON_UNESCAPED_UNICODE);

          $json_written = File::put($json_path,$memo_list);
    }
}
