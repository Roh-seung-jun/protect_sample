@extends('header')
@section('script')
@endsection

@section('contents')
    <div class="d-flex justify-content-center align-items-center flex-column w-100" style="margin-top: 100px">
        @if(auth()->user()->type === 'management')
        <div class="">
            <h2>정원 일정</h2>
        </div>
        <div class="list">
            @foreach($data['admin']->promise as $item)
                {{$item}}
            @endforeach
        </div>
        @endif
    </div>
@endsection
