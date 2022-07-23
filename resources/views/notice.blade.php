@extends('header')
@section('script')
@endsection

@section('contents')
    <div class="flex-column d-flex justify-content-center align-items-center w-100" style="">
        @foreach($data['garden'] as $item)
            <button class="btn-outline-info btn w-25 p-2 m-1" onclick="location.href='{{route('noticePage',$item->id)}}'">{{$item->name}}</button>
        @endforeach
    </div>
@endsection
