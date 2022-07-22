@extends('header')
@section('script')
@endsection

@section('contents')
    <div class="d-flex justify-content-center align-items-center flex-column w-100" style="margin-top: 100px">
        <div class="form-group">
            <p class="m-0">인원</p>
            <input type="number" class="form-control" name="people">
        </div>
        <div class="form-group">
            <p class="m-0">날짜</p>
            <input type="date" class="form-control" name="date">
        </div>
    </div>
@endsection
