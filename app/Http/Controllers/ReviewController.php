<?php

namespace App\Http\Controllers;

use App\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function createReview(Request $request){
        $input = $request->only(['score','contents','promise_id']);
        $input['user_id'] = auth()->user()->id;
        Review::create($input);
        return back()->with('msg','리뷰 작성이 완료되었습니다.');
    }
}
