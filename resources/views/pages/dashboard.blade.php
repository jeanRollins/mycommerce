@extends('layouts.home')

@section('title', 'Bienvenid@ '. auth()->user()->name)


@section('content')
    <div id="app">
        <header-component></header-component>

        <div class="container mt-5">
            <div class="row">
                <div class="col">
                    <h1>Hola {{ auth()->user()->name }}!! </h1>
                </div>
            </div>
        </div>
    </div>
  
    
@endsection