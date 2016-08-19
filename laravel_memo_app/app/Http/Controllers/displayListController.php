<?php

namespace App\Http\Controllers;

use App\Models\displayListModel;

class displayListController extends Controller
{
    public function index()
    {
      $display_list_model = new displayListModel;
      $memo_list = $display_list_model -> getMemoList();

      return view('index')->with('memo_list', $memo_list);
    }
}
