@extends('layouts.home_layout')
@section('title', $title)


@section('content')


<div class="container p-4">
  <h4>{{ $post->title }}</h4>
</div>

<div class="container mt-4 mb-4">
  <div class="row mb-2">
    <div class="col-sm-8 col-xs-12 m-auto">
      <img
        src="{{ asset('img/posts/'.$post->pic) }}"
        alt="{{ $post->title }}"
        class="d-block w-100"
      />
    </div>
  </div>
  <div class="row">
    <div class="col">
      <h2 class="text-center m-4">{{ $post->title }}</h2>
      <article class="text-justify">
        <p>{{ $post->abstract }}</p>
        {!! $post->body !!} 
      </article>
    </div>
  </div>
</div>

<div class="row">
  <div class="col"></div>
</div>

@endsection('content')
