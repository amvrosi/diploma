@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Komunikat') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Zalogowano do systemu!') }}
                        <form action="{{route('rent.categories')}}">
                            <div align="center">
                                <button type="submit" class="btn btn-primary" style="margin-top: 15px;">Pszejdź do sklepu</button>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
