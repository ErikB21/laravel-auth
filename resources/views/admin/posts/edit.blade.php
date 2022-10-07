@extends('layouts.app')



@section('content')

    <div class="container">
        <form action="{{route('admin.posts.update', ['post' => $post])}}" method="POST">

            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{old('title', $post->title)}}">
                @error('title')
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{old('slug', $post->slug)}}">
                @error('slug')
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{old('description', $post->description)}}</textarea>
            </div>
            @error('description')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror

            <button type="submit" class="btn btn-primary">Applica Modifiche</button>
        </form>
    </div>


@endsection