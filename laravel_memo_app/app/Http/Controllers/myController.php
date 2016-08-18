<?php

namespace App\Http\Controllers;

class myController extends Controller
{
    public function index()
    {
        $json = file_get_contents(storage_path().'/json/memo.json');
        $memo_list = json_decode($json, true);
        $memo_list = $memo_list['Memo'];

        return view('index')->with('memo_list', $memo_list);
    }

    public function register(){
      return view('register');
    }
}
