@extends('layouts.layout')
@section('content')
    <script>
        $(function() {
            $('.btn-6')
                .on('mouseenter', function(e) {
                    var parentOffset = $(this).offset(),
                        relX = e.pageX - parentOffset.left,
                        relY = e.pageY - parentOffset.top;
                    $(this).find('span').css({top:relY, left:relX})
                })
                .on('mouseout', function(e) {
                    var parentOffset = $(this).offset(),
                        relX = e.pageX - parentOffset.left,
                        relY = e.pageY - parentOffset.top;
                    $(this).find('span').css({top:relY, left:relX})
                });
        });
    </script>
    <div class="container">
        <div>
            <h4>
                <a href="{{route('rent.categories')}}" style="text-decoration: none; font-family: 'Segoe UI Symbol'; color: #E79F29"> ↩ </a> {{$tool->name}}
            </h4>
        </div>
        <div class="row row-cols-2">
            <div class="col-5">
                <img src="{{$tool->image}}" alt="{{$tool->name}}" width="500px" style="border-radius: 15px; display: block; margin-right: auto; margin-left: auto">
            </div>
            <div class="col-7">
                <h5>
                    {{$tool->description}}
                </h5>
            </div>
        </div>
        <div class="container text-center">
            <div class="row row-cols-3">
                <div class="col">Dostępne: {{$tool->availability}}</div>
                <div class="col"></div>
                <div class="col"></div>
                <div class="col"></div>
                <div class="col">
                    @if(Auth::check())
                        @if($tool->availability>0)
                            <a class="btn btn-success" href="{{route('rent.order', $tool)}}"><span>Wynajmij</span></a>
                        @else
                            <a class="btn btn-secondary" href="{{route('rent.tool_info', $tool)}}" disabled><span>Brak dostępnych narzędzi tego typu</span></a>
                        @endif
                    @else
                        <a class="btn btn-primary" href="{{route('home')}}"><span>Zaloguj</span></a>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
