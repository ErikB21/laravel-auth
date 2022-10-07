@extends('layouts.app')

@section('title', 'Home')

@section('content')

    <div class="container-fluid px-0 text-center">
        <h1>Benvenuto {{Auth::user()->name}}</h1>
        <h3>La tua area Amministrativa!</h3>
        <a class="text-decoration-none text-dark" href="{{route('admin.posts.index')}}"><i class="fa-solid fa-signs-post"></i> Vedi i tuoi post</a>
    </div>

@endsection