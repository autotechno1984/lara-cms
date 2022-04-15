<?php

namespace App\Http\Controllers;

use App\Models\listgame;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index(){
        return view('bo.games');
    }

    public function listgames(){
        $lsgame = listgame::all();
        return view('bo.datagames', compact('lsgame'));
    }

    public function addgames(){
        return view('bo.listgames');
    }

    public function editlistgames($id){
        return view('bo.edilistgames', compact('id'));
    }

    public function banner(){
        return view('bo.banner');
    }

    public function logolink(){
        return view('bo.logolink');
    }

}
