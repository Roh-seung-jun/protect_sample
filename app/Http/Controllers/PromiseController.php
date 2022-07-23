<?php

namespace App\Http\Controllers;

use App\Impossible;
use App\Promise;
use DateTime;
use Illuminate\Http\Request;

class PromiseController extends Controller
{
    public function impossible($date){
        $garden_id = auth()->user()->garden->id;
        $input = ['garden_id'=>$garden_id , 'date' => $date];
        $get = Impossible::where('date',$date)->where('garden_id',$garden_id)->get();
        if($get->count() == 0){
            Impossible::create($input);
        }else{
            $get[0]->delete();
        }
        return back();
    }

    public function getData(Request $request){
        $arr = [];
        $check = Impossible::where('garden_id', $request['garden'])->get();
        foreach ($check as $item){
            if($item['date'] > $request['start_date'] && $item['date'] < $request['end_date'])
            return false;
        }
        $first = new DateTime($request['start_date']);
        $second = new DateTime($request['end_date']);
        return [$first->diff($second)];
    }

    public function createPromise(Request $request){
        $input = $request->only(['garden_id','people','start_date','end_date','pay']);
        $input['user_id'] = auth()->user()->id;
        Promise::create($input);
        return redirect('/')->with('msg','예약이 추가되었습니다.');
    }
}
