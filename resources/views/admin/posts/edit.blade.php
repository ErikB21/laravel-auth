@extends('layouts.app')

@section('title', 'Modifica il post')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/edit.css')}}">
@endsection

@section('content')

    <div class="container-fluid px-0 my_width_form">
        <div class="sec_bg">
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
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{old('description', $post->description)}}</textarea>
                </div>
                @error('description')
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
        
    </div>


@endsection