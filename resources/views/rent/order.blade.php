@extends('layouts.layout')
@section('content')
    <div class="container">
        <form action="{{route('rent.create_order', $tool->id)}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Wybrane narzędzie:</label>
                <div class="row align-items-start" style="background-color: #D9D9D9; padding: 15px; margin-bottom: 15px; border-radius: 15px">
                    <div class="col-4"><img src="{{$tool->image}}" width="300px" style="border-radius: 15px; display: block; margin-right: auto; margin-left: auto"></div>
                    <div class="col">
                        <div class="row"><h4>{{$tool->name}}</h4></div>
                        <div class="row">{{$tool->description}}</div>
                    </div>
                </div>
            </div>
            <div class="input-group" style="padding-right: 40%">
                <span class="input-group-text">Data początku zamówienia:</span>
                <input type="text" name="startDate" aria-label="Data początku" class="form-control" placeholder="dd.mm.rrrr">
            </div>
            <div class="input-group" style="padding-right: 40%">
                <span class="input-group-text">Data końca zamówienia:</span>
                <input type="text" name="finishDate" aria-label="Data końca" class="form-control" placeholder="dd.mm.rrrr">
            </div>
            <div align="center"><button type="submit" class="btn btn-lg btn-primary mt-4">Złożyć zamówienie</button></div>
        </form>
    </div>
@endsection()
