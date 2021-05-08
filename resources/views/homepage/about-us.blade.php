@extends('layouts.homepage')
@section('content')
<main class="page-main">
    <div class="page-head">
      <div class="page-head__bg" style="background-image: url(
          @foreach($about as $key => $aboutu)
            @foreach($aboutu->photo as $key => $media)
                {{ $media->getUrl() }}
            @endforeach
          @endforeach
          )">
        <div class="page-head__content" data-uk-parallax="y: 0, 100">
          <div class="uk-container">
            <div class="header-icons"><span></span><span></span><span></span></div>
            <div class="page-head__title">About Us</div>
            <div class="page-head__breadcrumb">
              <ul class="uk-breadcrumb">
                <li><a href="/">Home</a></li>
                <li><span>About Us</span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="page-content">
      <div class="uk-section-large uk-container">
        <div class="uk-grid" data-uk-grid>
          <div class="uk-width-3-3@m">
            <article class="article-full">

                @foreach ($about as $aboutus)
                <p>
                    {!! $aboutus->description !!}
                </p>
                @endforeach
            </article>

          </div>


        </div>
      </div>
    </div>
  </main>
@endsection
