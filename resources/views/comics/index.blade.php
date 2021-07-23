@extends('layouts.main')

@section('content')
<div class="comic_container">
    @foreach ($comics as $comic)
    <div class="comic">
        <h3>{{$comic->title}}</h3>
        <img src="{{$comic->thumb}}" alt="">
        {{-- <p>{{$comic->description}}</p>   --}}
        <a href="{{route('comics.show', $comic->id)}}" class="btn btn-success">Show</a>  
        <a href="{{route('comics.edit', $comic->id)}}" class="btn btn-warning">Edit</a>
        <a href="{{route('comics.index', $comic->id)}}"calss="btn btn-danger">Delete</a>
    </div>
    @endforeach

    
</div>
@endsection