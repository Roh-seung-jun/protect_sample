@extends('header')
@section('script')
    <script>

        function check(){
            let start_date = $(`#start_date`).val();
            let end_date = $(`#end_date`).val();
            let garden = $(`#garden`).val();
            let people = $(`#people`).val();
            if(!start_date || !end_date || !people) return alert ('필수 값이 누락되었습니다.');
            $.ajax({
                url:'{{route('getData')}}',
                method :'post',
                data : {
                    start_date,
                    end_date,
                    garden,
                    _token : '{{csrf_token()}}'
                },
                success : function (e){
                    let day = e[0]['days'];
                    $('#pay').val(day * 1000 * people);
                    $('input').attr('readonly','readonly');
                    $('button').removeClass('disabled').attr('type','submit');
                },
                error: res => console.log(res.responseText),
            })
        }

    </script>
@endsection

@section('contents')
    <form class="d-flex justify-content-center align-items-center flex-column w-100" style="margin-top: 100px" action="{{route('createPromise')}}" method="post">
        @csrf
        <div class="form-group">
            <p class="m-0">인원</p>
            <input type="number" id="people" class="form-control" name="people" min="1">
        </div>
        <div class="form-group">
            <p class="m-0">시작일</p>
            <input id="start_date" type="date" class="form-control" name="start_date" min="{{date('Y-m-d')}}">
        </div>
        <div class="form-group">
            <p class="m-0">마감일</p>
            <input id="end_date" type="date" class="form-control" name="end_date" min="{{date('Y-m-d')}}">
        </div>
        <input type="text" id="garden" value="{{$id}}" class="d-none" name="garden_id">

        <div class="form-group">
            <p class="m-0">가격</p>
            <input id="pay" type="number" class="form-control" name="pay" readonly>
        </div>
        <p>입장료 : 1,000</p>
        <button class="btn btn-outline-secondary" onclick="check()" type="button">검색</button>
        <button class="btn btn-outline-secondary disabled" type="button">예약</button>
    </form>
@endsection
