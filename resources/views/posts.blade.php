@extends('layouts.main')
@section('content')
<h1>BLOG PAGE</h1> 

    @foreach ($posts as $item)
    <article class="mb-5">
      <h1>{{ $item["titles"] }}</h1>
      <p style="font-weight:bold;">By : {{ $item["autors"] }}</p>
      <p>{{ $item["body"] }} <a href="/posts/{{ $item["slug"] }}">View More....</a></p>
    </article>
    @endforeach
  
@endsection

