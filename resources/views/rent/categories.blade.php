@extends('layouts.layout')
@section('content')
    <div class="container text-center">
        <div class="row align-items-start">
            <div class="col" style="padding: 0; border-radius: 15px; height: 150px; background: url({{asset('images/categories/heavy_machines.jpg')}}) no-repeat center center; background-size: cover;">
                <a href="{{route('rent.heavy_machines')}}" style="text-decoration: none">
                    <div class="category_overlay" style="border-radius: 15px">
                        <div class="category_text">Ciężki sprzęt</div>
                    </div>
                </a>
            </div>
            <div class="col" style="padding: 0; border-radius: 15px; margin-left: 7.5px; height: 150px; background: url({{asset('images/categories/tools.jpg')}}) no-repeat center center; background-size: cover;">
                <a href="{{route('rent.tools')}}">
                    <div class="category_overlay" style="border-radius: 15px">
                        <div class="category_text">Narzędzia ręczne</div>
                    </div>
                </a>
            </div>
            <div class="col" style="padding: 0; border-radius: 15px; margin-left: 7.5px; height: 150px; background: url({{asset('images/categories/cabins.jpg')}}) no-repeat center center; background-size: cover;">
                <a href="{{route('rent.cabins')}}">
                    <div class="category_overlay" style="border-radius: 15px">
                        <div class="category_text">Kontenery budowlane</div>
                    </div>
                </a>
            </div>
            <div class="col" style="padding: 0; border-radius: 15px; margin-left: 7.5px; height: 150px; background: url({{asset('images/categories/air_compresors.jpg')}}) no-repeat center center; background-size: cover;">
                <a href="{{route('rent.air_compressors')}}">
                    <div class="category_overlay" style="border-radius: 15px">
                        <div class="category_text">Sprężarki powietrza</div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
