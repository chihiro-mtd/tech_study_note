<?php

namespace App\Http\Controllers;

use App\Models\registerModel;

class registerController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function register()
    {
        $input_value = \Request::all();

        $title = $input_value['title'];
        $text = $input_value['text'];

        $register_model = new registerModel();
        $message = $register_model->setNewMemo($title,$text);

        if ($message == 'OK') {
            return view('success');
        }
    }
}
