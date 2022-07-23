@extends('header')
@section('script')
    <script>
        $(document).on('mousedown','#review input[name="score"]',function(e){
            $(this).val(Math.floor(e.offsetX/15));
            document.querySelector('#review .star span').style.width = `${this.value * 10}%`;
        })

        function change(index){
            $('#hidden').val(index);
        }
    </script>
@endsection

@section('contents')
    <div class="d-flex justify-content-center align-items-center flex-column w-100" style="margin-top: 100px">
        @if(auth()->user()->type === 'management')
        <div class="">
            <h2>일정 제한하기</h2>
            <input type="date" class="w-100 form-control" id="date" min="{{date('Y')}}-{{date('m')}}-01" max="{{date('Y')}}-{{date('m')}}-{{date('t',strtotime(date("Y-m-01")))}}">
            <button class="btn btn-outline-secondary" onclick="if($('#date').val() !== '')location.href=`/impossible/${$('#date').val()}`">일정 수정</button>
            <table class="table w-100">
                <thead>
                <tr>
                    <th>날짜</th>
                </tr>
                </thead>
                <tbody>
                @foreach(auth()->user()->garden->impossible as $item)
                    <tr>
                        <td>{{$item->date}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="mt-5">
            <h2>정원 일정</h2>
        </div>
        <table class="table w-50">
            <thead>
            <tr>
                <th>날짜</th>
                <th>인원</th>
                <th>가격</th>
                <th>취소</th>
                <th>상태</th>
            </tr>
            </thead>
            <tbody>
            @foreach($data['admin']->promise as $item)
                <tr>
                    <td class="m-0">{{$item['start_date']}} ~ {{$item['end_date']}}</td>
                    <td>{{$item['people']}}</td>
                    <td>{{$item['pay']}} 원</td>
                    <td>
                        @if($item['end_date'] >= date('Y-m-d') && $item['state'] === null)
                            <button class="btn btn-outline-secondary" onclick="location.href='{{route('cancel',$item['id'])}}'">삭제</button></td>
                        @elseif($item['state'] === null)
                        방문
                        @else
                        취소
                    @endif
                    <td>
                        @if($item['state'] === 'cancel')
                            취소
                        @else
                            @if($item['start_date'] <= date('Y-m-d'))
                                방문
                            @else
                                예약
                            @endif
                        @endif
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        @elseif(auth()->user()->type === 'normal')
            <table class="table w-75">
                <thead>
                <tr>
                    <th>방문 날짜</th>
                    <th>방문 정원</th>
                    <th>인원</th>
                    <th>금액</th>
                    <th>취소</th>
                    <th>입장권</th>
                </tr>
                </thead>
                <tbody>
                <tr class="text-center">
                    <td colspan="6">방문 예약</td>
                </tr>
                @foreach(auth()->user()->promises->where('end_date','>',date('Y-m-d'))->sortByDesc('end_date') as $item)
                    <tr>
                        <td>{{$item->start_date}} ~ {{$item->end_date}}</td>
                        <td>{{$item->garden->name}}</td>
                        <td>{{$item->people}}</td>
                        <td>{{$item->pay}}원</td>
                        <td>
                        @if(date_diff(new DateTime($item->start_date),new DateTime(date('Y-m-d')))->days <= 7)
                            취소불가
                        @else
                            <button class="btn btn-outline-secondary">취소</button>
                        @endif
                        </td>
                        <td>
                            입장권
                        </td>
                    </tr>
                @endforeach
                <tr class="text-center">
                    <td colspan="6">종료된 예약</td>
                </tr>
                <tr class="text-left -bold">
                    <td><h5>방문 날짜</h5></td>
                    <td><h5>방문 정원</h5></td>
                    <td><h5>방문 인원</h5></td>
                    <td><h5>방문 금액</h5></td>
                    <td><h5>방문 여부</h5></td>
                    <td><h5>방문 후기</h5></td>
                </tr>
                @foreach(auth()->user()->promises->where('end_date','<',date('Y-m-d'))->where('state','<>','cancel')->sortByDesc('end_date') as $idx => $item)
                    @if(!$item->review)
                    <tr>
                        <td>{{$item->start_date}} ~ {{$item->end_date}}</td>
                        <td>{{$item->garden->name}}</td>
                        <td>{{$item->people}}</td>
                        <td>{{$item->pay}}원</td>
                        <td>
                            O
                        </td>
                        <td>
                            <button class="btn btn-outline-secondary" data-target="#review" data-toggle="modal" onclick="change({{$item['id']}})">후기작성</button>
                        </td>
                    </tr>

                    @endif
                @endforeach
                </tbody>
            </table>
        @endif
    </div>
    <div class="modal fade" id="review">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title">리뷰</h2>
                </div>
                <form class="modal-body" action="{{route('createReview')}}" method="POST">
                    @csrf
                    <input type="text" class="d-none" id="hidden" name="promise_id">
                    <div class="form-group">
                        <p>내용</p>
                        <textarea name="contents" class="form-control" required></textarea>
                    </div>
                    <div>
                    <span class="position-relative star" style="font-size: 2rem;color: #ccc">
                    ★★★★★
                    <span class="position-absolute" style="left: 0;width: 0;overflow: hidden;color: #ffcc33;">★★★★★</span>
                    <input type="range" step="1" min="0" max="10" value="1" name="score" class="position-absolute" style="width: 100%;height: 100%;opacity: 0;left:0;z-index: 99;">
                </span>
                    </div>
                    <button class="btn btn-outline-secondary">작성</button>
                </form>
            </div>
        </div>
    </div>
@endsection
