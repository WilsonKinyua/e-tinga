@extends('layouts.homepage')
@section('content')
<main class="page-main">
    <div class="page-head">
      <div class="page-head__bg" style="background-image: url({{asset('assets/img/bg_contacts.jpg')}})">
        <div class="page-head__content" data-uk-parallax="y: 0, 100">
          <div class="uk-container uk-container-xlarge">
            <div class="uk-margin-remove-top page-head__title"> Search Results</div>
            <div class="page-head__breadcrumb">
              <ul class="uk-breadcrumb">
                <li><a href="/">Home</a></li>
                <li><span>Search </span></li>
              </ul>
            </div>
            <br>
          </div>
        </div>
      </div>
    </div>
    <div class="page-content">
      <div class="uk-section-large uk-container uk-container-xlarge">
        <div class="uk-grid" data-uk-grid>
          <div class="uk-width-1-3@l">
            <div class="uk-hidden@l uk-margin-small-bottom"><button
                class="js-more-filter uk-button uk-button-large uk-width-1-1" type="button"><span>Filters </span><i
                  class="fas fa-sliders-h"></i></button></div>
            <aside class="js-filter-content sidebar">
              <div class="widjet widjet-category">
                <h4 class="widjet__title">Categories</h4>
                <ul class="list-category">
                    @foreach ($categories as $category)
                        <li><a href="{{ route('machinery.category', $category->id)}}">{{ $category->name }}</a></li>
                    @endforeach
                </ul>
              </div>
            </aside>
          </div>
          <div class="uk-width-2-3@l">
              @if (count($machineries) > 0)
              @foreach ($machineries as $machinery)
              <div class="rental-item">
                <div class="rental-item__media">
                    {{-- @if($machinery->main_photo)
                        <img src="{{ $machinery->main_photo->getUrl() }}" alt="Standard Excavator">
                    @endif --}}

                  <div class="rental-item__links">
                      <a href="{{ route('machinery.details',$machinery->id)}}">View Details</a>
                      {{-- @foreach($machinery->brochure as $key => $media)
                        <a href="{{ $media->getUrl() }}" target="_blank">
                            Print Bronchure
                        </a>
                      @endforeach --}}
                    </div>
                </div>
                <div class="rental-item__desc">
                  <div class="rental-item__title"><a class="link" href="{{ route('machinery.details',$machinery->id)}}">{{ $machinery->name }}</a></div>
                  <div class="rental-item__prices-list">
                    <ul>
                      <li>Ksh {{ $machinery->cost_per_day }} / Day </li>
                      <li>Ksh {{ $machinery->cost_per_week }} / Week</li>
                      <li>Ksh {{ $machinery->cost_per_month }} / Month</li>
                    </ul>
                  </div>
                  <div class="rental-item__price-delivery"> <span>Two Way Delivery: Ksh {{ $machinery->two_way_delivery }}</span></div>
                  <div class="rental-item__specifications">
                    <ul class="uk-list uk-list-disc uk-column-1-2@xl uk-column-1-2@s">
                      <li>Brand: {{$machinery->brand }}</li>
                      <li>Manufacture Year: {{$machinery->manufacture_year }}</li>
                      <li>Digging Depth: {{$machinery->digging_depth }}</li>
                      <li>Model: {{$machinery->model }}</li>
                      <li>Weight: {{$machinery->weight }}</li>
                      <li>Rated Power: {{$machinery->rated_power }}</li>
                    </ul>
                  </div>
                </div>
                <div class="rental-item__price">
                  <div class="rental-item__price-box">
                    <div class="rental-item__price-title"><strong>Total Rental Price </strong><span>Incl. Taxes</span>
                    </div>
                    <div class="rental-item__price-current">Ksh {{ $machinery->total_rental_price_incl_taxes_after }}</div>
                    <div class="rental-item__price-old">Ksh {{ $machinery->total_rental_price_incl_taxes_before }}</div>
                  </div>
                  <div class="rental-item__price-btn"><a class="uk-button uk-button-secondary uk-button-large"
                      href="#!">Reserve</a></div>
                </div>
              </div>
              @endforeach

              @else
                <h1 class="text-center text-danger">No search results!!</h1>
              @endif

            {{-- <ul class="uk-pagination uk-margin-large-top">
              <li class="uk-active"><span>1</span></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a class="uk-pagination-next" href="#"><img src="./assets/img/icons/arrow.svg" alt=""
                    data-uk-svg></a></li>
            </ul> --}}
          </div>
        </div>
      </div>
    </div>
    <div class="section-cta">
      <div class="uk-container-expand">
        <div class="section-cta__box">
          <div class="section-cta__img"><img src="{{ asset('assets/img/img-cta.png')}}" alt=""></div>
          <div class="section-cta__title"> <span>We Help Industry To Utilize The<br> Heavy Equipment Work
              Better</span></div>
          <div class="section-cta__support">
            <div class="support"> <a class="support__link" href="tel:{{ trans('panel.phone1') }}">
                <div class="support__icon"><i class="fas fa-headset"></i></div>
                <div class="support__desc">
                  <div class="support__label">Get Quick Support</div>
                  <div class="support__phone">{{ trans('panel.phone1') }}</div>
                </div>
              </a></div>
          </div>
          {{-- <div class="section-cta__btn"><a class="uk-button uk-button-danger uk-button-large"><span>Get
                started</span><img src="./assets/img/icons/arrow.svg" alt="arrow" data-uk-svg></a></div> --}}
        </div>
      </div>
    </div>
  </main>
@endsection
