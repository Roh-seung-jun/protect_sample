@extends('header')
@section('script')
@endsection

@section('contents')
    <div class="d-flex justify-content-center align-items-center flex-column w-100" style="margin-top: 100px">
        <h2>정원 리스트</h2>
        <div class="w-25 m-3 d-flex justify-content-between">
            <button class="btn btn-outline-warning" onclick="location.href='{{route('guide')}}'">예약</button>
            <button class="btn btn-outline-warning" onclick="location.href='{{route('guide')}}'">별점</button>
            <button class="btn btn-outline-warning" onclick="location.href='{{route('guide')}}'">리뷰</button>
        </div>
        <div class="rank d-flex w-75 justify-content-between">
            @for($i = 0; $i <= 2; $i++)
                <div class="box w-25 p-4" style="height: 200px;border-radius: 10px;border: 1px solid red">
                    <h3>{{$i+1}}</h3>
                    <p class="m-0">{{$data['garden'][$i]['name']}}</p>
                    <p class="m-0">{{$data['garden'][$i]['phone']}}</p>
                    <p class="m-0">{{$data['garden'][$i]['address']}}</p>
                </div>
            @endfor
        </div>

    @for($i = 3; $i < $data['garden']->count();$i++)
            <div class="box w-25" style="height: 100px;">
                <p class="m-0">{{$data['garden'][$i]['name']}}</p>
                <p class="m-0">{{$data['garden'][$i]['phone']}}</p>
                <p class="m-0">{{$data['garden'][$i]['address']}}</p>
            </div>
    @endfor
    </div>
@endsection
