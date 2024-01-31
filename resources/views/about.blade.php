@extends('layouts.main')

@section('container')
    <h1>About</h1>
    <img src="pictures/{{ $image }}" alt="{{ $name }}" 
    width="200px"
    class="img-thumbnail rounded-circle">
    <h3>{{ $name }}</h3>
    <p>{{ $email }}</p>
@endsection
