<?php

namespace App\Http\Controllers;

use File;

class registerController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function register()
    {
        $input_value = \Request::all();
        $json_path = storage_path().'/json/memo.json';

        $title = $input_value['title'];
        $text = $input_value['text'];

        $json = file_get_contents($json_path);
        $memo_list = json_decode($json, true);
        $memo_list = $memo_list['Memo'];

        $new_id = count($memo_list);
        $new_memo = ['id' => $new_id, 'title' => $title,'text' => $text];

        array_push($memo_list,$new_memo);

        $memo_list = json_encode($memo_list, JSON_UNESCAPED_UNICODE);

        $json_written = File::put($json_path,$memo_list);

        return $memo_list;
    }
}
