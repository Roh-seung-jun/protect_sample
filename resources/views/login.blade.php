@extends('header')
@section('script')
@endsection

@section('contents')
    <div class="d-flex justify-content-center align-items-center w-100" style="height: 100vh;">
        <form action="{{route('login')}}" method="post">
            @csrf
            <div class="form-group">
                <p class="m-0">아이디</p>
                <input type="text" name="id" class="form-control">
            </div>
            <div class="form-group">
                <p class="m-0">비밀번호</p>
                <input type="text" name="password" class="form-control">
            </div>
            <button class="btn-outline-danger btn">로그인</button>
        </form>
    </div>
@endsection
