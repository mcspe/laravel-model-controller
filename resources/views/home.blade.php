@extends('layouts.layout')


@section('content')
  <div class="container">
    <h1>Top Rated Movies</h1>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Title</th>
          <th scope="col">Vote</th>
          <th scope="col">Details</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($movies as $movie)
          <tr>
            <th scope="row">{{ $movie->title }}</th>
            <td>{{ $movie->vote }}</td>
            <td><a href="{{ route('movie', ['id', $movie->id]) }}" class="btn btn-primary">More details</a></td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
