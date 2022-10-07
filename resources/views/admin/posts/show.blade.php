@extends('layouts.app')

@section('content')

    <div class="container">
        <h1>Dettagli Post {{$post->id}}</h1>
        <ul>
            <li>{{$post->title}}</li>
            <li>{{$post->slug}}</li>
            <li>{{$post->description}}</li>
            <li>
                <a class="btn btn-warning" href="#">Modifica</a>
            </li>
        </ul>
    </div>




@endsection