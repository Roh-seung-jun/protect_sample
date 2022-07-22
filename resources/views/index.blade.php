@extends('header')
@section('script')
@endsection

@section('contents')
    <div class="d-flex justify-content-center align-items-center w-100" style="height: 100vh;">
        @if(!auth()->user())
        <button class="btn btn-outline-success m-1" onclick="location.href='{{route('sign')}}'">회원가입</button>
        <button class="btn btn-outline-danger m-1" onclick="location.href='{{route('login')}}'">로그인</button>
            @else
            <button class="btn btn-outline-danger m-1" onclick="location.href='{{route('logout')}}'">로그아웃</button>
        @endif
        <button class="btn btn-outline-warning m-1" onclick="location.href='{{route('guide')}}'">정원 안내</button>
        <button class="btn btn-outline-info m-1" onclick="location.href='{{route('promise')}}'">정원 예약 페이지</button>
        <button class="btn btn-outline-secondary m-1" onclick="location.href='{{route('history')}}'">예약 내역 페이지</button>
    </div>
@endsection
