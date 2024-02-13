{{-- @dd($posts) --}}

@extends('layouts.main')
@section('content')
    @foreach ($posts as $item)
        <h1>{{ $item["titles"] }}</h1>
        <p>{{ $item["body"] }}</p>

        <h5>{{ $item["autors"] }}</h5>
    @endforeach
@endsection

