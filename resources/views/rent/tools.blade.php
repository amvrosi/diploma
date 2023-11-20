@extends('layouts.layout')
@section('content')
    <div class="container">
        <div>
            <h4>
                <a href="{{route('rent.categories')}}" style="text-decoration: none; font-family: 'Segoe UI Symbol'; color: #E79F29"> ↩ </a> Categoria: {{$category->name}}
            </h4>
        </div>
        @foreach($tools as $tool)
            <div class="row align-items-start" style="background-color: #D9D9D9; padding: 15px; margin-bottom: 15px; border-radius: 15px">
                <div class="col-4"><img src="{{$tool->image}}" width="300px" style="border-radius: 15px; display: block; margin-right: auto; margin-left: auto"></div>
                <div class="col">
                    <div class="row"><a href="{{route('rent.tool_info', $tool)}}"><h4>{{$tool->name}}</h4></a></div>
                    <div class="row">{{$tool->description}}</div>
                </div>
            </div>
        @endforeach
        <div>
            {{$tools->links()}}
        </div>
    </div>
@endsection
