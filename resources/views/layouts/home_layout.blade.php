<!DOCTYPE html>
<html dir="rtl" lang="fa">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="{{ asset('lib/bootstrap/css/bootstrap.rtl.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />

    <title>هایپر پرنده آمازون | @yield('title')</title>

    @yield('my_header')

  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarTogglerDemo03"
            aria-controls="navbarTogglerDemo03"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand" href="{{ url("/") }}">هایپر پرنده آمازون</a>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link @if($menu == "index") active @endif" aria-current="page" href="{{ url("/") }}"
                  >صفحه اصلی</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link @if($menu == "blogs") active @endif" href="{{ url("/blogs") }}">مقالات</a>
              </li>
              <li class="nav-item">
                <a class="nav-link @if($menu == "gallery") active @endif" href="{{ url("/gallery") }}">گالری</a>
              </li>
              <li class="nav-item">
                <a class="nav-link @if($menu == "about") active @endif" href="{{ url("/about") }}">درباره ما</a>
              </li>
            </ul>
            <ul class="navbar-nav mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="tel:09388332475">۰۹۳۸۸۳۳۲۴۷۵</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="tel:09367987551">۰۹۳۶۷۹۸۷۵۵۱</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://instagram.com/amazon_parot"
                  >amazon_parot
                  <img
                    width="21"
                    src="img/icons/Instagram_logo.png"
                    alt="Instagram "
                /></a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <main>

      @yield('content')
      
    </main>
    <footer class="footer bg-dark text-white">
      <div class="container pt-2 pb-4">
        <div class="row">
          <div class="col-md-4 col-xs-6">
            <ul class="nav text-white">
              <li class="nav-item">
                <a class="nav-link" href="{{ url("/") }}">صفحه اصلی</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url("/blogs") }}">مقالات</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url("/gallery") }}">گالری</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url("/about") }}">درباره ما</a>
              </li>
            </ul>
          </div>
          <div class="col-md-6 col-xs-6">
            <ul class="nav text-white">
              <li class="nav-item">
                <a class="nav-link" href="{{ url("/about") }}"
                  >آدرس آمازون یک: تنکابن میدان امام خمینی روبروی پاساژ ماهان
                  خیابان فرهنگ</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url("/about") }}"
                  >آدرس آمازون دو: تنکابن کمربندی اصلی پایین تر از دوربرگردان
                  پسکلایه بزرگ روب روی مبل نادعلی هایپر پرنده آمازون
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-2 col-xs-6">
            <ul class="nav text-white">
              <li class="nav-item">
                <a class="nav-link" href="tel:09388332475">۰۹۳۸۸۳۳۲۴۷۵</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="tel:09367987551">۰۹۳۶۷۹۸۷۵۵۱</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://instagram.com/amazon_parot"
                  >amazon_parot
                  <img
                    width="21"
                    src="img/icons/Instagram_logo.png"
                    alt="Instagram "
                /></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <script src="{{ asset('lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    @yield('my_footer')

  </body>
</html>
