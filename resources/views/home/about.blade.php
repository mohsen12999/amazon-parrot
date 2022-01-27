@extends('layouts.home_layout')
@section('title', $title)


@section('content')

      <div class="container p-4">
        <h4>درباره ما</h4>
        <p>
          هایپر پرنده آمازون بیش از ده سال سابقه فروش طوطی و سایر پرندگان زینتی
          و دست آموز را دارد و با باز شدن شعبه دوم آمادگی اراپه خدمات بیشتری را
          به شهروندان و علاقه مندان دارد.
        </p>
      </div>
      <div class="container p-4">
        <h4 id="amazon_1">شعبه اول آمازون</h4>
        <address>
          آدرس: تنکابن میدان امام خمینی روبروی پاساژ ماهان خیابان فرهنگ
        </address>

        <iframe
          style="border: 0; width: 100%"
          height="450"
          frameborder="0"
          scrolling="no"
          marginheight="0"
          marginwidth="0"
          src="https://www.openstreetmap.org/export/embed.html?bbox=50.87430059909821%2C36.82035624903327%2C50.87629616260529%2C36.82182489096533&amp;layer=mapnik&amp;marker=36.82109057352226%2C50.875298380851746"
          style="border: 1px solid black"
        >
        </iframe>
        <br />
        <small>
          <a
            href="https://www.openstreetmap.org/?mlat=36.82109&amp;mlon=50.87530#map=19/36.82109/50.87530"
            >نمایش بزرگتر نقشه</a
          >
        </small>
      </div>
      <div class="container p-4">
        <h4 id="amazon_2">شعبه دوم آمازون</h4>
        <address>
          آدرس: تنکابن کمربندی اصلی پایین تر از دوربرگردان پسکلایه بزرگ روب روی
          مبل نادعلی هایپر پرنده آمازون
        </address>

        <iframe
          style="border: 0; width: 100%"
          height="450"
          frameborder="0"
          scrolling="no"
          marginheight="0"
          marginwidth="0"
          src="https://www.openstreetmap.org/export/embed.html?bbox=50.882213115692146%2C36.80126133936447%2C50.884208679199226%2C36.802730347650055&amp;layer=mapnik&amp;marker=36.80199584702955%2C50.88321089744568"
          style="border: 1px solid black"
        >
        </iframe>
        <br />
        <small>
          <a
            href="https://www.openstreetmap.org/?mlat=36.80200&amp;mlon=50.88321#map=19/36.80200/50.88321"
            >نمایش بزرگتر نقشه</a
          >
        </small>
      </div>
      
@endsection('content')