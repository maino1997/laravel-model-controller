@extends('layouts.main')

@section('title', 'Movies')
@section('section_title', 'Seleziona il Film')
@section('content')
    <div class="row gy-4">
        @foreach ($movies as $movie)
            <div class="col-4">
                <a href="{{ route('movies.show', ['id' => $movie->id]) }}">
                    @include('includes/card')
                </a>
            </div>
        @endforeach
    </div>
@endsection
