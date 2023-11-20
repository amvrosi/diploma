@extends('layouts.app')

@section('content')
<div class="content" style="margin-top: 5%">
    <div class="logo">
        <img src="{{ asset('images/logo_dyplom_cropped.jpg') }}" alt="logo" height="200px">
    </div>
    <div class="stanalone animated">
        <h1><b>Rejestracja</b></h1>
        <form method="POST" action="{{route('register')}}">
            @csrf
            <div class="form-floating mb-3">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autofocus placeholder="" >
                <label for="floatingInput">Nazwa użytkownika</label>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="" value="{{ old('email') }}" required autofocus>
                <label for="email">Adres e-mail</label>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        Zły adres email.
{{--                        <strong>{{ $message }}</strong>--}}
                    </span>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="" required>
                <label for="passwordInput">Hasło</label>

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="">
                <label for="floatingPassword">Powtórz hasło</label>
            </div>
            <div align="center">
                <button type="submit" class="btn btn-primary" id="submitButton">Zarejestruj się</button>
            </div>
        </form>
    </div>
</div>
@endsection
