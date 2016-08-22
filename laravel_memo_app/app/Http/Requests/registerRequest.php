<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class registerRequest extends Request
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => 'max:10',
            'text' => 'max:30',
        ];
    }

}