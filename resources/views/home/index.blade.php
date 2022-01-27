@extends('layouts.home_layout')
@section('title', $title)


@section('content')
      <div
        id="carouselExampleCaptions"
        class="carousel slide"
        data-bs-ride="carousel"
      >
        <div class="carousel-indicators">

          @foreach ($sliders as $slider)

            <li
            data-target="#carouselWithCaptions"
            data-slide-to="{{$loop->index}}"
            @if ($loop->index==0) class="active" @endif
            ></li>

            <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="{{$loop->index}}"
            @if ($loop->index==0) class="active" aria-current="true" @endif
            aria-current="true"
            aria-label="Slide {{$loop->index}}"
            ></button>

          @endforeach
          
        </div>
        <div class="carousel-inner">

          @foreach ($sliders as $slider)

            <div class="carousel-item @if ($loop->index==0) active @endif">
              <img
                src="{{ asset("img/sliders/".$slider->pic) }}"
                class="d-block w-100"
                alt="{{$slider->title}}"
              />
              <div class="carousel-caption d-none d-md-block">
                @if ($slider->title!=null && $slider->title!='') <h1>{!!$slider->title!!}</h1> @endif
              </div>
            </div>

          @endforeach

        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <div class="container mt-4">
        <div class="row">
          <div class="col-md-2 col-sm-4 col-xs-6 mb-2">
            <div class="card">
              <img
                src="img/icons/bird-cage.png"
                class="card-img-top"
                alt="bird-cage"
              />
              <div class="card-body">
                <h5 class="card-title text-center">فروش قفس</h5>
              </div>
            </div>
          </div>

          <div class="col-md-2 col-sm-4 col-xs-6 mb-2">
            <div class="card">
              <img src="img/icons/bird.png" class="card-img-top" alt="bird" />
              <div class="card-body">
                <h5 class="card-title text-center">انواع پرنده</h5>
              </div>
            </div>
          </div>

          <div class="col-md-2 col-sm-4 col-xs-6 mb-2">
            <div class="card">
              <img src="img/icons/food.png" class="card-img-top" alt="food" />
              <div class="card-body">
                <h5 class="card-title text-center">غذا و دانه حیوانات</h5>
              </div>
            </div>
          </div>

          <div class="col-md-2 col-sm-4 col-xs-6 mb-2">
            <div class="card">
              <img
                src="img/icons/hamster.png"
                class="card-img-top"
                alt="hamster"
              />
              <div class="card-body">
                <h5 class="card-title text-center">فروش همستر</h5>
              </div>
            </div>
          </div>

          <div class="col-md-2 col-sm-4 col-xs-6 mb-2">
            <div class="card">
              <img
                src="img/icons/playtoy.png"
                class="card-img-top"
                alt="playtoy"
              />
              <div class="card-body">
                <h5 class="card-title text-center">وسایل بازی</h5>
              </div>
            </div>
          </div>

          <div class="col-md-2 col-sm-4 col-xs-6 mb-2">
            <div class="card">
              <img
                src="img/icons/rabbit.png"
                class="card-img-top"
                alt="rabbit"
              />
              <div class="card-body">
                <h5 class="card-title text-center">خرگوش و خوکچه</h5>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container-fluid pb-4" style="background-color: lightcyan">
        <div class="container">
          <h3 class="text-center p-4">آمازون یک</h3>
          <div class="row">
            <div class="col-md-6 col-xs-12" style="padding: 10%">
              <h4>شعبه اول پرنده فروشی آمازون</h4>
              <address>
                آدرس: تنکابن میدان امام خمینی روبروی پاساژ ماهان خیابان فرهنگ
              </address>
              <a href="{{ url("/about") }}" type="button" class="btn btn-outline-secondary">
                اطلاعات بیشتر
              </a>
            </div>
            <div class="col-md-6 col-xs-12">
              <img
                class="d-block w-100"
                src="{{ asset('img/Cockatiels-Preening.jpg') }}"
                alt=""
              />
            </div>
          </div>
        </div>
      </div>

      <div class="container-fluid pb-4 bg-info">
        <div class="container">
          <h3 class="text-center p-4">آمازون دو</h3>
          <div class="row">
            <div class="col-md-6 col-xs-12">
              <img
                class="d-block w-100"
                src="{{ asset('img/two-peace-faced-lovebird.webp') }}"
                alt=""
              />
            </div>
            <div class="col-md-6 col-xs-12" style="padding: 10%">
              <h4>شعبه دوم پرنده فروشی آمازون</h4>
              <address>
                آدرس: تنکابن کمربندی اصلی پایین تر از دوربرگردان پسکلایه بزرگ
                روب روی مبل نادعلی هایپر پرنده آمازون
              </address>
              <a href="{{ url("/about") }}" type="button" class="btn btn-outline-secondary">
                اطلاعات بیشتر
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="container-fluid pb-4">
        <div class="container">
          <h3 class="text-center p-4">آخرین مقالات</h3>
          <div class="row">

            @foreach ($posts as $post)

              <div class="col-md-6 col-xs-12 mb-2">
                <div class="card">
                  <img
                    src="{{ asset('img/posts/'.$post->pic) }}"
                    class="card-img-top"
                    alt="{{ $post->slug }}"
                  />
                  <div class="card-body">
                    <h5 class="card-title text-center">{{ $post->title }}</h5>
                    <p class="card-text text-justify">{{ $post->abstract }}</p>
                    <a href="{{ url("/blog/".$post->id) }}" class="btn btn-success">ادامه مطلب</a>
                  </div>
                </div>
              </div>

            @endforeach
            
          </div>
          <div class="row justify-content-end mt-2">
            <div class="col-2">
              <a href="{{ url("/blogs") }}" class="btn btn-success">بقیه مقالات</a>
            </div>
          </div>
        </div>
      </div>
@endsection('content')
    