@extends('layouts.app')

@section('title', 'Crea un post')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/create.css')}}">
@endsection

@section('content')

    <div class="container-fluid px-0 my_width_form pt-3">
        <div class="sec_bg">
            <form action="{{route('admin.posts.store')}}" method="POST">

                @csrf

                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input required type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{old('title')}}">
                    @error('title')
                        <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea required class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{old('description')}}</textarea>
                </div>
                @error('description')
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>


@endsection