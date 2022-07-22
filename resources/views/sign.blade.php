@extends('header')
@section('script')
@endsection

@section('contents')
    <div class="d-flex justify-content-center align-items-center w-100" style="height: 100vh;">
        <form action="{{route('sign')}}" method="post">
            @csrf
            <div class="form-group">
                <p class="m-0">아이디</p>
                <input type="text" name="id" class="form-control">
            </div>
            <div class="form-group">
                <p class="m-0">비밀번호</p>
                <input type="text" name="password" class="form-control">
            </div>
            <div class="form-group">
                <p class="m-0">이름</p>
                <input type="text" name="name" class="form-control">
            </div>
            <button class="btn-outline-success btn">회원가입</button>
        </form>
    </div>
@endsection
