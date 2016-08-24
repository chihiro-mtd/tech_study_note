<?php

namespace App\Http\Controllers;

use App\Models\memoModel;
use App\Http\Requests\registerRequest;

class memoController extends Controller
{
    public function displayListIndex()
    {
        $model = new memoModel();
        $memo_list = $model->getMemoList();

        return view('index')->with('memo_list', $memo_list);
    }

    public function displayRegisterIndex()
    {
        $old_title = null;
        $old_text = null;

        return view('form')->with(['old_title' => $old_title, 'old_text' => $old_text]);
    }

    public function displayUpdateIndex()
    {
        $input_value = \Request::all();
        $index = $input_value['index'];

        $model = new memoModel();
        $old_memo = $model->getOldMemo($index);

        $old_title = $old_memo['old_title'];
        $old_text = $old_memo['old_text'];

        return view('form')->with(['old_title' => $old_title, 'old_text' => $old_text]);
    }

    public function register(registerRequest $request)
    {
        $input_value = $request->all();
        $title = $input_value['title'];
        $text = $input_value['text'];

        $model = new memoModel();
        $model->registerNewMemo($title, $text);

        return view('success');
    }

    public function delete()
    {
        $input_value = \Request::all();
        $index = $input_value['index'];

        $model = new memoModel();
        $model->deleteMemo($index);

        return redirect()->action('memoController@displayListIndex');
    }

    public function update(registerRequest $request)
    {
        $input_value = \Request::all();

        $index = $input_value['index'];
        $title = $input_value['title'];
        $text = $input_value['text'];

        $model = new memoModel();
        $model->updateMemo($index, $title, $text);

        return view('success');
    }
}
