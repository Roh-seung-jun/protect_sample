<?php

namespace App\Http\Controllers;

use App\Garden;
use App\Promise;
use App\User;
use Illuminate\Http\Request;

class GardenController extends Controller
{
    public function guide(Request $request){
        if(!$request['type'])
        $data = [];
        $data['garden'] = Garden::all();
        return view('guide',compact(['data']));
    }
    public function promise(){
        return view('promise');
    }

    public function history(){
        if(!auth()->user()) return back()->with('msg','로그인한 뒤에 들어와');
        $data = [];

        if(auth()->user()->type){
            $data['admin'] = User::find(auth()->user()->id)->garden;
        }
        return view('history',compact(['data']));
    }
}
