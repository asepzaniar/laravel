{{-- @dd($post); --}}
@extends('layouts.main')
@section('content')
<h1>BLOG PAGE 2</h1> 

   
    <article class="mb-5">
      <h1>{{ $post["titles"] }}</h1>
      <p style="font-weight:bold;">By : {{ $post["autors"] }}</p>
      <p>{{ $post["body"] }}</p>
    </article>
  
    <a href="/posts">Back to Blog</a>
@endsection