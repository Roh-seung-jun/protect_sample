<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function sign(Request $request){
        $id = User::find($request['id']);
        $name = User::where('name',$request['name'])->get()->count();
        if($id || $name > 0) return back()->with('msg','이미 사용중인 이름 또는 아이디 입니다');
        $input = $request->only(['id','name','password']);
        $input['type'] = 'normal';
        User::create($input);
        return back()->with('msg','회원가입이 완료되었습니다.');
    }

    public function login(Request $request){
        $user = User::find($request['id']);
        if(!$user || $user['password'] !== $request['password']) return back()->with('msg','아이디 또는 패스워드를 확인해주세요.');
        Auth::login($user);
        return redirect('/')->with('msg','어서오세요. '.$user['name'].'님');
    }

    public function signPage(){
        return view('sign');
    }

    public function loginPage(){
        return view('login');
    }

    public function logout(){
        Auth::logout();
        return redirect('/')->with('msg','로그아웃이 완료되었습니다');
    }
}
