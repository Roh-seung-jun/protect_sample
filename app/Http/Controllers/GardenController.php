<?php

namespace App\Http\Controllers;

use App\Garden;
use App\Notice;
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
    public function promise($id){
        return view('promise',compact(['id']));
    }

    public function history(){
        if(!auth()->user()) return back()->with('msg','로그인한 뒤에 들어와');
        $data = [];
        if(auth()->user()->type === 'normal'){

        }else if(auth()->user()->type === 'management'){
            $data['admin'] = User::find(auth()->user()->id)->garden;
        }
        return view('history',compact(['data']));
    }

    public function cancel($id){
        $find = Promise::find($id);
        $find['state'] = 'cancel';
        $find->update();
        return back()->with('msg','일정이 취소되었습니다.');
    }

    public function viewPage($id){
        $data = [];
        $data['garden'] = Garden::find($id);
        return view('vi',compact(['data']));
    }

    public function noticePage(){
        $data = [];
        $data['garden'] = Garden::all();
        return view('notice',compact(['data']));
    }

    public function noticeTagPage($id){
        $data = [];
        $data['notice'] = Notice::where('garden_id',$id)->get();

    }
}
