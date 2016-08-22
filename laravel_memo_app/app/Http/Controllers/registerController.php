<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Models\registerModel;

class registerController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'max:10',
            'text' => 'max:30',
        ]);

        if ($validator->fails()) {
            return view('register')->with('status_message', 'NG');
        }

        $input_value = \Request::all();
        $title = $input_value['title'];
        $text = $input_value['text'];

        $register_model = new registerModel();
        $register_model->setNewMemo($title, $text);

        return view('success');
    }
}
