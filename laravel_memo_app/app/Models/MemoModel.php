<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use File;

class memoModel extends Model
{
    public function readJsonFile()
    {
        $json_path = storage_path() . '/json/memo.json';
        $json = file_get_contents($json_path);
        $memo_list = json_decode($json, true);

        return $memo_list;
    }

    public function getMemoList()
    {
        $memo_list = $this->readJsonFile();
        $memo_list = $memo_list['Memo'];

        return $memo_list;
    }

    public function registerNewMemo($title, $text)
    {
        $memo_list = $this->readJsonFile();

        $memo_count = count($memo_list['Memo']);
        $new_id = $memo_list['Memo'][$memo_count - 1]['id'] + 1;
        $new_memo = ['id' => $new_id, 'title' => $title, 'text' => $text];

        array_push($memo_list['Memo'], $new_memo);

        $this->writeJsonFile($memo_list);
    }

    public function deleteMemo($index)
    {
        $memo_list = $this->readJsonFile();

        unset($memo_list['Memo'][$index]);
        $memo_list['Memo'] = array_values($memo_list['Memo']);

        $this->writeJsonFile($memo_list);
    }

    public function getOldMemo($index)
    {
        $memo_list = $this->readJsonFile();

        $old_title = $memo_list['Memo'][$index]['title'];
        $old_text = $memo_list['Memo'][$index]['text'];

        return ['old_title' => $old_title,'old_text' => $old_text];
    }

    public function updateMemo($index,$title,$text)
    {
        $memo_list = $this->readJsonFile();

        $memo_list['Memo'][$index] = ['id' => $memo_list['Memo'][$index]['id'], 'title' => $title, 'text' => $text];

        $this->writeJsonFile($memo_list);
    }

    public function writeJsonFile($memo_list)
    {
        $json_path = storage_path() . '/json/memo.json';
        $memo_list = json_encode($memo_list, JSON_UNESCAPED_UNICODE);

        File::put($json_path, $memo_list);
    }
}
