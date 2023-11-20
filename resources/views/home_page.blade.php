@extends('layouts.layout')
@section('content')
    <div class="container text-center">
        <div class="row align-items-start">
            <div class="col" style="background-color: #E79F29; padding: 15px 0 15px 0; border-radius: 15px; margin-right: 7.5px; height: 150px">
                Zadzwon do nas! <br>
                999 999 999 <br>
                Lublin <br>
                ul. Puszkina 47, m. Kolotuszkina
            </div>
            <div class="col" style="border-style: solid; border-color: #E79F29; padding: 15px 0 15px 0; border-radius: 15px; margin-left: 7.5px; height: 150px">
                Zostaw numer telefonu:
                <div align="center" style="margin: 0 0 15px 0">
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="999 999 999" style="width:200px">
                </div>
                <div align="center">
                    <button type="submit" class="btn btn-primary" id="submitButton" style="background-color: #CD4623; border: 0px">Zadzwoncie do mnie</button>
                </div>
            </div>
        </div>
    </div>
@endsection
