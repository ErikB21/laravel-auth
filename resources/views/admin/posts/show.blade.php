@extends('layouts.app')

@section('content')

    <div class="container">
        <h1>Dettagli Post {{$post->id}}</h1>
        <ul>
            <li>{{$post->title}}</li>
            <li>{{$post->slug}}</li>
            <li>{{$post->description}}</li>
            <li>
                <a class="btn btn-warning" href="{{route('admin.posts.edit', ['post' => $post])}}">Modifica</a>
                <form action="{{route('admin.posts.destroy', ['post' => $post])}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Elimina</button>
                </form>
            </li>
        </ul>
    </div>




@endsection