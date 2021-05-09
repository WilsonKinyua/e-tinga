@extends('layouts.homepage')
@section('content')
<main class="page-main">
    <div class="page-head">
      <div class="page-head__bg" style="background-image: url(
          @if($machineryCategory->main_photo)
            {{ $machineryCategory->main_photo->getUrl() }}
            @else
            {{ asset('assets/img/img-cta.png')}}
          @endif
          )">
        <div class="page-head__content" data-uk-parallax="y: 0, 100">
          <div class="uk-container">
            <div class="header-icons"><span></span><span></span><span></span></div>
            <div class="page-head__title">  {{ $machineryCategory->name }}</div>
            <div class="page-head__breadcrumb">
              <ul class="uk-breadcrumb">
                <li><a href="/">Home</a></li>
                <li> <a href="{{ route('machinery.details',$machineryCategory->id)}}">Equipment</a></li>
                <li><span>{{ $machineryCategory->name }}</span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="page-content">
      <div class="uk-section-large uk-container">
        <div class="uk-grid" data-uk-grid>
          <div class="uk-width-2-3@m">
            <div class="equipment-detail">
              <div class="equipment-detail__gallery">
                <div data-uk-slideshow="min-height: 300; max-height: 430">
                  <div class="uk-position-relative">
                    <ul class="uk-slideshow-items uk-child-width-1-1" data-uk-lightbox="animation: scale">
                      <li>
                        @if($machineryCategory->main_photo)
                            <a href="{{ $machineryCategory->main_photo->getUrl() }}" >
                                <img class="uk-width-1-1" src="{{ $machineryCategory->main_photo->getUrl() }}" alt="img-gallery" data-uk-cover>
                            </a>
                        @else
                        <img class="uk-width-1-1" src="{{ asset('assets/img/img-cta.png')}}" alt="img-gallery" data-uk-cover>
                        @endif
                    </li>

                    </ul><a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" data-uk-slidenav-previous data-uk-slideshow-item="previous"></a><a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" data-uk-slidenav-next data-uk-slideshow-item="next"></a>
                  </div>
                  <div class="uk-margin-top" data-uk-slider>
                    <ul class="uk-thumbnav uk-slider-items uk-grid uk-grid-small uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m uk-child-width-1-5@l">
                      <li data-uk-slideshow-item="0">
                        @if($machineryCategory->main_photo)
                            <a href="{{ $machineryCategory->main_photo->getUrl() }}" >
                                <img class="uk-width-1-1" src="{{ $machineryCategory->main_photo->getUrl() }}" alt="img-gallery" data-uk-cover>
                            </a>
                        @else
                        <img class="uk-width-1-1" src="{{ asset('assets/img/img-cta.png')}}" alt="img-gallery" data-uk-cover>
                        @endif
                        </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="equipment-detail__title">{{ $machineryCategory->name }}</div>
              <div class="equipment-detail__btns">
                @foreach($machineryCategory->brochure as $key => $media)
                    <a href="{{ $media->getUrl() }}" target="_blank">
                        <i class="fas fa-file-pdf"></i>View or Download Brochure
                    </a>
                @endforeach
                  <a href="{{ route('machinery.category', $machineryCategory->category->id)}}"><i class="fas fa-star"></i> {{ $machineryCategory->category->name ?? '' }}</a></div>
              <div class="equipment-detail__desc">
                <div class="section-title">
                  <div class="uk-h2">Description</div>
                </div>
                <p>
                    {!! $machineryCategory->description ?? 'No description for the selected item!!' !!}
                </p>

              </div>
              <div class="equipment-detail__specification">
                <div class="section-title">
                  <div class="uk-h2">Specification</div>
                </div>
                <table class="uk-table uk-table-striped">
                  <div class="tbody">
                    <tr>
                        <td>Cost per Hour:</td>
                        <td>Ksh {{ $machineryCategory->cost_per_hour }}</td>
                    </tr>
                    <tr>
                        <td>Cost per Day:</td>
                        <td>Ksh {{ $machineryCategory->cost_per_day }}</td>
                    </tr>
                    <tr>
                        <td>Cost per Week:</td>
                        <td>Ksh {{ $machineryCategory->cost_per_week }}</td>
                    </tr>
                    <tr>
                        <td>Cost per Month:</td>
                        <td>Ksh {{ $machineryCategory->cost_per_month }}</td>
                    </tr>
                    <tr>
                        <td>Two Way Delivery:</td>
                        <td>Ksh {{ $machineryCategory->two_way_delivery }}</td>
                    </tr>
                    <tr>
                        <td>Brand:</td>
                        <td>{{ $machineryCategory->brand }}</td>
                    </tr>
                    <tr>
                        <td>Manufacturer:</td>
                        <td>{{ $machineryCategory->manufacturer }}</td>
                    </tr>
                    <tr>
                        <td>Model:</td>
                        <td>{{ $machineryCategory->model }}</td>
                    </tr>
                    <tr>
                        <td>Manufacture Year:</td>
                        <td>{{ $machineryCategory->manufacture_year }}</td>
                    </tr>
                    <tr>
                        <td>Digging Depth:</td>
                        <td>{{ $machineryCategory->digging_depth }}</td>
                    </tr>
                    <tr>
                      <td>Weight:</td>
                      <td>{{ $machineryCategory->weight }}</td>
                    </tr>
                    <tr>
                      <td>Rated power: </td>
                      <td>{{ $machineryCategory->rated_power }}</td>
                    </tr>
                    <tr>
                      <td>Standard bucket capacity:</td>
                      <td>{{ $machineryCategory->standard_bucket_capacity }}</td>
                    </tr>
                    <tr>
                      <td>Standard bucket width:</td>
                      <td>{{ $machineryCategory->standard_bucket_width }}</td>
                    </tr>
                    <tr>
                      <td>Operation Hydraulic Pressure:</td>
                      <td>{{ $machineryCategory->operation_hydraulic_pressure }}</td>
                    </tr>
                    <tr>
                      <td>Maximum Digging Force:</td>
                      <td>{{ $machineryCategory->maximum_digging_force }}</td>
                    </tr>
                    <tr>
                      <td>Gradeadility:</td>
                      <td>{{ $machineryCategory->gradeadility }}</td>
                    </tr>
                    <tr>
                      <td>Pressure To The Ground:</td>
                      <td>{{ $machineryCategory->pressure_to_the_ground }}</td>
                    </tr>
                    <tr>
                      <td>Maximum Hauling Force:</td>
                      <td>{{ $machineryCategory->operation_hydraulic_pressure }}</td>
                    </tr>
                  </div>
                </table>
              </div>
            </div>
          </div>
          <div class="uk-width-1-3@m">
              <form action="{{ route('book.create')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                <div class="equipment-order">
                <div class="equipment-order__price"><span><small>Select Duration</small></span></div>
                <small style="margin:15px; text-align:center" class="text-danger">Format "2547..." eg 254717255460 </small>
                <div class="equipment-order__form">
                    <input type="hidden" name="id" value="{{ $machineryCategory->id }}">
                    <div class="uk-margin"><input class="form-control" type="text" required name="name" placeholder="Your name"></div>
                    <div class="uk-margin"><input class="form-control" type="email" name="email" required placeholder="Your Email"></div>
                    <div class="uk-margin"><input class="form-control" type="number" name="id_number" required placeholder="Your ID Number"></div>
                    <div class="uk-margin">
                        <small class="text-danger">(Please provide the correct phone number as this will be used to contact and verify you.)</small>
                        <input class="form-control" type="number" name="phone" required placeholder="Phone" value="2547"></div>
                    <div class="uk-margin">
                        <label for="">Book from: </label>
                        <input class="js-data" type="date" name="order_start_date" required>
                    </div>
                    <div class="uk-margin">
                        <label for="">Book To: </label>
                        <input class="js-data" type="date" name="order_end_date" required>
                    </div>
                    <div class="uk-margin"><input type="text" name="address" required placeholder="Where: Kisumu"></div>
                    <div class="uk-margin">
                    {{-- <div class="equipment-order__value"> <span data-uk-icon="check"></span>Dates are available </div> --}}
                    </div>
                </div>
                </div>
                <div class="equipment-order-total">
                <ul>
                    {{-- <li><span>Total Rent</span><span>$580.00</span></li>
                    <li><span>Owner Fee</span><span>$90.00</span></li>
                    <li><span>Govt. Taxes</span><span>$45.50</span></li>
                    <li><span>Total</span><span>$715.00</span></li> --}}
                </ul><button class="uk-button uk-button-large uk-width-1-1" type="submit"> <span>Book now</span><img src="https://pro-theme.com/html/antek/assets/img/icons/arrow.svg" alt="arrow" data-uk-svg></button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="section-cta">
      <div class="uk-container-expand">
        <div class="section-cta__box">
          <div class="section-cta__img"><img src="{{ asset('assets/img/img-cta.png')}}" alt=""></div>
          <div class="section-cta__title"> <span>We Help Industry To Utilize The<br> Heavy Equipment Work Better</span></div>
          <div class="section-cta__support">
            <div class="support"> <a class="support__link" href="tel:{{ trans('panel.phone1') }}">
                <div class="support__icon"><i class="fas fa-headset"></i></div>
                <div class="support__desc">
                  <div class="support__label">Get Quick Support</div>
                  <div class="support__phone">{{ trans('panel.phone1') }}</div>
                </div>
              </a></div>
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection
