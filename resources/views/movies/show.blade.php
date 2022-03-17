@extends('layouts.main')

@section('title', 'Movie')
@section('section_title', 'Dettaglio film')
@section('content')
    <a href="{{ route('movies.index') }}" class="back-link">TORNA ALLA LISTA DEI FILM</a>
    <div class="row gy-4 justify-content-center">
        <div class="col-4">
            @include('includes/card')
        </div>

    </div>
@endsection
