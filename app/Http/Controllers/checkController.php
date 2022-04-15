<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;
use App\Models\games;


class checkController extends Controller
{
    //
    public function check(){
        $agent = new Agent;

        $mobileResult = $agent->ismobile();
        if($mobileResult){
            return view('mobile.mobfront');
        }

        $desktopResult= $agent->isDesktop();
        if ($desktopResult) {
            $games = games::all();
            return view('front',compact('games'));
        }

        $tabletResult= $agent->isTablet();
        if ($tabletResult) {
            $result = 'Yes, This is Desktop.';
        }

        $tabletResult= $agent->isPhone();
        if ($tabletResult) {
            $result = 'Yes, This is Phone.';
        }

        dd($result);
    }
}
