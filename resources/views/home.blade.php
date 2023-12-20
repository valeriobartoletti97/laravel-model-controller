@extends('layouts.app')

@section('title', 'Home')

@section('content')

<main class="vh-100 justify-content-center align-items-center d-flex">
    <h3 class="text-uppercase">
        Click <a href="{{route('movies.index')}}">here</a> to see the list of all movies
    </h3>
</main>

@endsection