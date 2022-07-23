@extends('header')
@section('script')
@endsection

@section('contents')
    <div class="d-flex justify-content-center align-items-center w-100 flex-column" style="height: 100vh;">
        <h2>{{$data['garden']['name']}}</h2>
        <p>{{$data['garden']['address']}}</p>
        <p>{{$data['garden']['phone']}}</p>
        <p>{{$data['garden']['management']}}</p>
        <button class="btn btn-outline-secondary" onclick="location.href='{{route('promise',$data['garden']['id'])}}'" >예약</button>
    </div>
@endsection
