@extends('templates.layout')
@section('title', 'New Libro')

@section('content')
    <form method="post" action="/libri">
        @csrf
        <div class="mb-3">
            <input type="text" name="title" class="form-control" placeholder="Title...">
        </div>
        <div class="mb-3">
            <textarea class="form-control" name="description" placeholder="Leave a libro here"></textarea>
        </div>
        <div class="mb-3">
            <select class="form-select" aria-label="Default select example">
                <option selected>Open this select menu</option>
                @if($autores)
                @foreach($autores as $key => $value)
                <option value="{{$value->id}}">{{$value->name}}</option>
                @endforeach
                @endif
            </select>
        </div>
        <div class="mb-3">
            <input class="form-control" type="file" name="libro_thumb">
        </div>
        <button type="submit" class="btn btn-dark">Add Libro</button>
    </form>
@endsection