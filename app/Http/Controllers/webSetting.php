<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class webSetting extends Controller
{
    //
    public function index(){
        return view('bo.websetting.color');
    }

}
