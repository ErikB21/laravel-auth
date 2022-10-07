@extends('layouts.app')

@section('title', 'Dettaglio Post')

@section('content')

    <div class="container">
        @if (session('warning'))
            <div class="container">
                <div class="alert alert-warning">
                    {{ session('warning') }}
                </div>
            </div>
        @endif

        <h1>Dettagli Post {{$post->id}}</h1>
        <ul>
            <li>{{$post->title}}</li>
            <li>{{$post->slug}}</li>
            <li>{{$post->description}}</li>
            <li>
                <a class="btn btn-warning" href="{{route('admin.posts.edit', ['post' => $post])}}">Modifica</a>
                <form action="{{route('admin.posts.destroy', ['post' => $post])}}" onsubmit="return confirm('Sei sicuro di voler cancellare questo post?')" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Elimina</button>
                </form>
            </li>
        </ul>
    </div>




@endsection