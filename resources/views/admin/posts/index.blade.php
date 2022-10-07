@extends('layouts.app')

@section('content')
    <div class="container">
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
                            <a class="btn btn-primary" href="#">Dettagli</a>
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