<?php

namespace App\Http\Controllers;

use App\Models\deleteModel;

class deleteController extends Controller
{
    public function delete()
    {
        $input_value = \Request::all();
        $index = $input_value['index'];

        $delete_model = new deleteModel();
        $delete_model->deleteMemo($index);

        return redirect()->action('displayListController@index');
    }
}
