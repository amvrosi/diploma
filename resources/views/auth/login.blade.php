@extends('layouts.app')

@section('content')
    <div class="content" style="margin-top: 5%">
        <div class="logo">
            <img src="{{ asset('images/logo_dyplom_cropped.jpg') }}" alt="logo" height="200px">
        </div>
        <div class="stanalone animated">
            <h1><b>Logowanie</b></h1>
            <form method="POST" action="{{ route('login')}}">
                @csrf
                <div class="form-floating mb-3">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="" value="{{ old('email') }}" required autofocus>
                    <label for="email">Adres e-mail</label>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        Zły adres email.
{{--                        <strong>{{ $message }}</strong>--}}
                    </span>
                    @enderror
                </div>
                <div class="form-floating">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="" required>
                    <label for="passwordInput">Hasło</label>

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="row mb-3">
                    <div class="col-md offset-md-1" style="margin: 5px">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Zapamiętaj mnie') }}
                            </label>
                        </div>
                    </div>
                </div>

                <div align="center">
                    <button type="submit" class="btn btn-primary" style="margin-top: 15px;" id="submitButton">Zaloguj</button>
                </div>
                @if (Route::has('password.request'))
                    <a class="btn btn-link" style="align-self: center" href="{{ route('password.request') }}">
                        {{ __('Zapomniane hasło?') }}
                    </a>
                @endif
            </form>
        </div>
    </div>
@endsection
