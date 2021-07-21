@extends('layouts.main')

@section('content')
    <div>
        <h2>{{$comic->title}}</h2>
        <img src="{{$comic->thumb}}" alt="">
        <p>{{$comic->description}}</p>  
        <h3>{{$comic->price}}</h3>  
        <h3>{{$comic->sale_date}}</h3>
        <h3>{{$comic->series}}</h3>
        <a class="btn btn-primary mt-4" href="{{route('comics.index')}}">Torna all'elenco</a>
    </div>

@endsection