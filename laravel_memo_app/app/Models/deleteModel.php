<?php

namespace App\Models;

use File;
use Illuminate\Database\Eloquent\Model;

class deleteModel extends Model
{
    public function deleteMemo($index)
    {
        $json_path = storage_path() . '/json/memo.json';
        $json = file_get_contents($json_path);
        $memo_list = json_decode($json, true);

        unset($memo_list['Memo'][$index]);
        $memo_list['Memo'] = array_values($memo_list['Memo']);

        $memo_list = json_encode($memo_list, JSON_UNESCAPED_UNICODE);
        File::put($json_path, $memo_list);
    }
}
