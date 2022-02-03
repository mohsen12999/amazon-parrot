@extends('layouts.home_layout')
@section('title', $title)


@section('content')

  <div class="container p-4">
    <h4>مقالات</h4>
  </div>

  <div class="container p-4">
    <div class="row">


      @php
          Carbon\Carbon::setLocale('fa_IR');
      @endphp

      @foreach ($posts as $post)

        <div class="col-md-6 col-xs-12">
          <div class="card mb-3">
            <div class="row g-0">
              <div class="col-md-4">
                <img
                  src="{{ asset('img/posts/'.$post->pic) }}"
                  alt="{{ $post->title }}"
                  class="d-block w-100"
                />
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">{{ $post->title }}</h5>
                  <p class="card-text">
                    <small class="text-muted">نوشته شده در {{ $post->updated_at->diffForHumans() }}</small>
                  </p>
                  <p class="card-text">
                    {{ $post->abstract }}
                  </p>
                  <a href="{{ url("/blog/".$post->id) }}" class="btn btn-success">ادامه مطلب</a>
                </div>
              </div>
            </div>
          </div>
        </div>

      @endforeach

    </div>
  </div>

@endsection('content')



  