@extends('layouts.main')

@section('content')
<h1>Add a comic!</h1>
<form action="{{route('comics.store')}}" method="POST">
    @csrf
    @method('POST')
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="Insert title">
    </div>
    <div class="form-group">
        <label for="series">Serie</label>
        <input type="text" class="form-control" id="series" name="series" placeholder="Insert serie">
    </div>
    <div class="form-group">
        <label for="type">Type</label>
        <input type="text" class="form-control" id="type" name="type" placeholder="Insert type">
    </div>
    <div class="form-group">
        <label for="price">Price</label>
        <input type="number" step="0.01" class="form-control" id="price" name="price" placeholder="Insert price">
    </div>
    <div class="form-group">
        <label for="sale_date">Release Date</label>
        <input type="date" class="form-control" id="sale_date" name="sale_date" placeholder="Insert date of release">
    </div>
    <div class="form-group">
        <label for="thumb">Image URL</label>
        <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Insert image url">
    </div>
    <div class="form-group">
        <label for="title">Description</label>
        <textarea class="form-control" id="description" name="description" rows="5" placeholder="Insert description"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">ADD</button>
</form>
@endsection