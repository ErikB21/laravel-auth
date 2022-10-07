@extends('layouts.app')



@section('content')

    <div class="container">
        <form action="{{route('admin.posts.store')}}" method="POST">

            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}">
            </div>

            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control" id="slug" name="slug" value="{{old('slug')}}">
            </div>
            
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" id="description" name="description">{{old('description')}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Salva Post</button>
        </form>
    </div>


@endsection