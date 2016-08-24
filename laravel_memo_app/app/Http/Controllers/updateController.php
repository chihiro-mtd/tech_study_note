<?php

namespace App\Http\Controllers;

use Validator;
use App\Http\Requests\registerRequest;
use App\Models\registerModel;

class registerController extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function register(registerRequest $request)
    {
        $input_value = $request->all();
        $title = $input_value['title'];
        $text = $input_value['text'];

        $register_model = new registerModel();
        $register_model->setNewMemo($title, $text);

        return view('success');
    }
}
