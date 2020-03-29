@extends('layouts.home')

@section('title', 'Bienvenido')


@section('content')
    
    <div id="app">

        <div class="container">
            <div class="row">
                <div class="col-xs-1 col-sm-1 col-md-2 col-lg-3"></div>
                <div class="col-xs-10 col-sm-10 col-md-6 col-lg-5 col-xl-6">
                    
                    <div class="container mt-5">
                        <div class="row">
                            <div class="col-3"></div>
                            <div class="col-5">
                                <img src="/storage/documentop_logo.png"  class="img-fluid"  alt="">
                            </div>
                        </div>
                    </div>
                    <login-component  csrf="{{csrf_token()}}"></login-component>  
                </div>
            </div>
        </div>
    </div>
    
@endsection