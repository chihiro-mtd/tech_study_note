<?php

namespace App\Http\Controllers;

use App\Models\memoModel;
use Route;
use Validator;
use App\Http\Requests\registerRequest;

class memoController extends Controller
{
    public function displayListIndex()
    {
        $model = new memoModel();
        $memo_list = $model->getMemoList();

        return view('index')->with('memo_list', $memo_list);
    }

    public function displayFormIndex(){
        return view('form');
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
        $input_value = $request->all();
        $title = $input_value['title'];
        $text = $input_value['text'];

        $register_model = new registerModel();
        $register_model->setNewMemo($title, $text);

        return view('success');
    }
}
