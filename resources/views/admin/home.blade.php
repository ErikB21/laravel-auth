@extends('layouts.app')

@section('content')

    <div class="container-fluid px-0 text-center">
        <h1>Benvenuto {{Auth::user()->name}} nella tua area amministrativa.</h1>
    </div>

@endsection