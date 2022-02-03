@extends('layouts.home_layout')
@section('title', $title)

@section('my_header')
  <link
      type="text/css"
      rel="stylesheet"
      href="{{ asset('lib/lightgallery/css/lightgallery-bundle.min.css') }}"
    />

    <style>
      .lg-container {
        direction: ltr;
      }
    </style>
@endsection('my_header')

@section('content')

<div class="container">
  <h4 class="m-4">گالری تصاویر</h4>

  <div id="lightgallery" class="row justify-content-center">

    @foreach ($images as $image)

      <div
      class="col-xs-12 col-sm-6 col-md-4 p-1"
      data-src="{{'img/gallery/'.$image->pic}}"
      data-sub-html="{{'تصویر '.$image->title}}">
        <img
          src="{{'img/gallery/'.$image->pic}}"
          alt=""
          style="max-width: 100%"
        />
      </div>

    @endforeach

  </div>
</div>

@endsection('content')


@section('my_footer')

  <script src="{{ asset('lib/lightgallery/lightgallery.umd.js') }}"></script>

    <!-- lightgallery plugins -->
    <script src="{{ asset('lib/lightgallery/plugins/thumbnail/lg-thumbnail.umd.js') }}"></script>
    <script src="{{ asset('lib/lightgallery/plugins/zoom/lg-zoom.umd.js') }}"></script>

    <script type="text/javascript">
      lightGallery(document.getElementById("lightgallery"), {
        plugins: [lgZoom, lgThumbnail],
        speed: 500,
        subHtmlSelectorRelative: true,
      });
    </script>
@endsection('my_footer')


