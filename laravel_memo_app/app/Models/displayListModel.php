<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class displayListModel extends Model
{
    public function getMemoList()
    {
        $json = file_get_contents(storage_path() . '/json/memo.json');
        $memo_list = json_decode($json, true);
        $memo_list = $memo_list['Memo'];

        return $memo_list;
    }
}
