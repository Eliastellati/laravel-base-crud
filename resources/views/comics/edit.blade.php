@extends('layouts.main')

@section('content')
    <h1>Edit Comic</h1>
    <form action="{{route('comics.update', $comic->id)}}" method="POST">
        @csrf
        @method('PATCH')
        <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Insert title" value="{{$comic->title}}">
        </div>
        <div class="form-group">
            <label for="series">Serie</label>
            <input type="text" class="form-control" id="series" name="series" placeholder="Insert serie" {{$comic->series}}>
        </div>
        <div class="form-group">
            <label for="type">Type</label>
            <input type="text" class="form-control" id="type" name="type" placeholder="Insert type" {{$comic->type}}>
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" step="0.01" class="form-control" id="price" name="price" placeholder="Insert price" {{$comic->price}}>
        </div>
        <div class="form-group">
            <label for="sale_date">Release Date</label>
            <input type="date" class="form-control" id="sale_date" name="sale_date" placeholder="Insert date of release" {{$comic->sale_date}}>
        </div>
        <div class="form-group">
            <label for="thumb">Image URL</label>
            <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Insert image url" {{$comic->thumb}}>
        </div>
        <div class="form-group">
            <label for="title">Description</label>
            <textarea class="form-control" id="description" name="description" rows="5" placeholder="Insert description" {{$comic->description}}></textarea>
        </div>

        <button type="submit" class="btn btn-primary">EDIT</button>
    </form>
@endsection