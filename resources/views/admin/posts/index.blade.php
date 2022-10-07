@extends('layouts.app')

@section('title', 'Post')

@section('content')
    <div class="container">
        
        @if (session('success'))
            <div class="container">
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            </div>
        @elseif (session('danger'))
            <div class="container">
                <div class="alert alert-danger">
                    {{ session('danger') }}
                </div>
            </div>
        @endif

        <h1>Post</h1>
        <a class="btn btn-primary" href="{{route('admin.posts.create')}}">Crea un post</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Details</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($posts as $post)
                    <tr>
                        <th scope="row">{{$post->id}}</th>
                        <td>{{$post->title}}</td>
                        <td>{{$post->slug}}</td>
                        <td>
                            <a class="btn btn-primary" href="{{route('admin.posts.show', ['post' => $post])}}">Dettagli</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <th>Nessun risultato trovato!</th>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>


@endsection