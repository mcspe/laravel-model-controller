@extends('layouts.layout')

@section('title')
  | {{ strtoupper($movie->original_title) }}
@endsection

@section('content')
  <div class="container">
    <div class="card">
      <div class="card-body text-center">
        <h5 class="card-title">{{ $movie->title }}</h5>
        <h6 class="card-subtitle mb-2 text-body-secondary">{{ $movie->original_title }}</h6>
        <p class="card-text">
            Rating: {{ $movie->vote }}
        </p>
        <p class="card-text">
            Nationality: {{ $movie->nationality }}
        </p>
        <p class="card-text">
            Release date: {{ $movie->date }}
        </p>
      </div>
    </div>
  </div>
@endsection
