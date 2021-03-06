@extends('layouts.homepage')

@section('content')
<main class="page-main">
    <div class="section-slideshow">
      <div class="uk-position-relative uk-light" tabindex="-1" data-uk-slideshow="animation: fade; min-height: 400; max-height: 700;">
        <ul class="uk-slideshow-items">
          @foreach ($sliders as $slide)
          <li class="slideshow-item">
            @if($slide->photo)
                <img src="{{ $slide->photo->getUrl() }}" alt data-uk-cover>
            @endif
            <div class="slideshow-item__content">
              <div class="uk-position-center uk-position-small uk-text-center">
                <div class="header-icons" data-uk-slideshow-parallax="x: -200,200"><span></span><span></span><span></span></div>
                <p class="slideshow-item__desc" data-uk-slideshow-parallax="x: 200,-200">{!! $slide->caption !!}</p>
                <h2 class="slideshow-item__title" data-uk-slideshow-parallax="x: -300,300">{!! $slide->title !!}</h2>
              </div>
            </div>
          </li>
          @endforeach
        </ul>
        <div class="uk-visible@m"><a class="uk-position-center-left uk-position-small" href="#" data-uk-slidenav-previous data-uk-slideshow-item="previous"></a><a class="uk-position-center-right uk-position-small" href="#" data-uk-slidenav-next data-uk-slideshow-item="next"></a></div>
      </div>
    </div>
    <div class="section-find">
      <div class="uk-container">
        <div class="find-box">
          <div class="find-box__title"> <span>Find The Right Equipment</span></div>
          <div class="find-box__form">
            <form action="{{ route('search.machinery')}}" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="uk-grid uk-grid-medium uk-flex-middle uk-child-width-1-3@m uk-child-width-1-2@s" data-uk-grid>
                {{-- <div>
                  <div class="uk-inline uk-width-1-1"><span class="uk-form-icon"><img src="./assets/img/icons/truck.svg" alt="truck" data-uk-svg></span><select class="uk-select uk-form-large" name="category">
                      <option value="">Select Category</option>
                      <option value="">Category 1 </option>
                      <option value="">Category 2</option>
                      <option value="">Category 3</option>
                    </select></div>
                </div> --}}
                <div>
                  <div class="uk-inline uk-width-1-1"><span class="uk-form-icon">
                      <img src="{{ asset('assets/img/icons/derrick.svg')}}" alt="derrick" data-uk-svg></span>
                      <input class="uk-input uk-form-large uk-width-1-1" required name="q" type="text" placeholder="Equipment Name"></div>
                </div>
                {{-- <div>
                  <div class="uk-inline uk-width-1-1"><span class="uk-form-icon"> <img src="./assets/img/icons/location.svg" alt="location" data-uk-svg></span><input class="uk-input uk-form-large uk-width-1-1" type="text" placeholder="What???s Your Location"></div>
                </div> --}}
                <div>
                  <div class="uk-inline uk-width-1-1"><span class="uk-form-icon"><img src="{{ asset('assets/img/icons/calendar.svg')}}" alt="calendar" data-uk-svg></span><input class="js-calendar uk-input uk-form-large uk-width-1-1" type="text" placeholder="Rental Duration Period"></div>
                </div>
                {{-- <div>
                  <div class="uk-inline uk-width-1-1"><label> <input class="uk-radio" type="radio" name="delivery" checked><span>{{ trans('panel.site_title') }} Delivery</span></label><label> <input class="uk-radio" type="radio" name="delivery"><span>Self Pickup</span></label></div>
                </div> --}}
                <div><button class="uk-button uk-button-secondary uk-button-large uk-width-1-1" type="submit"><span>Search Equipment</span><img src="{{ asset('assets/img/icons/arrow.svg')}}" alt="arrow" data-uk-svg></button></div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="section-category">
      <div class="uk-container">
        <div class="section-title uk-text-center">
          <div class="uk-text-meta">We Promise To Find You The Right Equipment</div>
          <div class="uk-h2">Browse Machinery Categories</div>
        </div>
        <div class="section-content">
          <div class="uk-grid uk-grid-medium uk-child-width-1-3@m uk-child-width-1-2@s" data-uk-grid>
              @foreach ($categories as $category)
              <div>
                <div class="category-item"> <a class="category-item__link uk-inline-clip uk-transition-toggle" href="{{ route('machinery.category', $category->id)}}" tabindex="0">
                    <div class="category-item__media">
                        @if($category->photo)
                            <img src="{{ $category->photo->getUrl() }}" style="height: 280px; width:100%" alt="Category">
                        @endif
                      <div class="uk-transition-fade">
                        <div class="uk-overlay-primary uk-position-cover"></div>
                        <div class="uk-position-center"><span data-uk-icon="icon: plus; ratio: 2"></span></div>
                      </div>
                    </div>
                    <div class="category-item__title"> <span>{{ $category->name }}</span></div>
                  </a></div>
              </div>
              @endforeach

          </div>
          {{-- <div class="uk-margin-large-top uk-text-center"><a class="uk-button uk-button-default uk-button-large" href="#!"><span>More categories</span><img src="./assets/img/icons/arrow.svg" alt="arrow" data-uk-svg></a></div> --}}
        </div>
      </div>
    </div>
    <div class="section-stats">
      <div class="uk-container uk-container-xlarge">
        <div class="uk-grid uk-child-width-1-4@l uk-child-width-1-2@s" data-uk-grid>
          <div>
            <div class="stats-item">
              <div class="stats-item__header">
                <div class="stats-item__numb">3.4k</div>
                <div class="stats-item__icon"><img src="{{ asset('assets/img/icons/ico-stats-1.svg')}}" data-uk-svg alt="Helping Projects Done"></div>
              </div>
              <div class="stats-item__title">Helping Projects Done</div>
              <div class="stats-item__desc">Best thing about {{ trans('panel.site_title') }} is to earn some extra revenue on their equipments.</div>
            </div>
          </div>
          <div>
            <div class="stats-item">
              <div class="stats-item__header">
                <div class="stats-item__numb">25+</div>
                <div class="stats-item__icon"><img src="{{ asset('assets/img/icons/ico-stats-2.svg')}}" data-uk-svg alt="Years In Rent Business"></div>
              </div>
              <div class="stats-item__title">Years In Rent Business</div>
              <div class="stats-item__desc">Best thing about {{ trans('panel.site_title') }} is to earn some extra revenue on their equipments.</div>
            </div>
          </div>
          <div>
            <div class="stats-item">
              <div class="stats-item__header">
                <div class="stats-item__numb">18+</div>
                <div class="stats-item__icon"><img src="{{ asset('assets/img/icons/ico-stats-3.svg')}}" data-uk-svg alt="Received Awards So far"></div>
              </div>
              <div class="stats-item__title">Received Awards So far</div>
              <div class="stats-item__desc">Best thing about {{ trans('panel.site_title') }} is to earn some extra revenue on their equipments.</div>
            </div>
          </div>
          <div>
            <div class="stats-item">
              <div class="stats-item__header">
                <div class="stats-item__numb">5.9%</div>
                <div class="stats-item__icon"><img src="{{ asset('assets/img/icons/ico-stats-4.svg')}}" data-uk-svg alt="Earned Revenue This Year"></div>
              </div>
              <div class="stats-item__title">Earned Revenue This Year</div>
              <div class="stats-item__desc">Best thing about {{ trans('panel.site_title') }} is to earn some extra revenue on their equipments.</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="section-about">
      <div class="uk-container">
        <div class="section-content">
          <div class="uk-grid uk-grid-large uk-child-width-1-2@m" data-uk-grid>
            <div><img src="{{ asset('assets/img/img-about.png')}}" alt="img-about"></div>
            <div>
              <div class="section-title">
                <div class="uk-text-meta">About {{ trans('panel.site_title') }} Equipments Rental</div>
                <div class="uk-h2">We Offer Smarter & More<br> Affordable Access To Rent<br> Farm Equipment</div>
              </div>
              {{-- <p>Aiusmod tempor incididunt ut labore sed dolore magna aliquay dnim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea reprehen deritin voluptate.</p>
              <ul class="about-list">
                <li> <strong>The Facilities<br> Less Expensive</strong><span>Velit esse cillum dolore ipsum eu fugiat nulla pariatur. </span></li>
                <li> <strong>Innovating<br> The Heavy Fleets</strong><span>Excepteur sint occaecat cupidat non proident sunt iny.</span></li>
              </ul> --}}
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="section-steps">
      <div class="uk-container uk-container-large">
        <div class="section-title uk-text-center">
          <div class="uk-text-meta">We Promise To Find You The Right Equipment</div>
          <div class="uk-h2">Get Your Rentals In Easy Steps</div>
        </div>
        <div class="section-content">
          <div class="steps-list uk-position-relative" tabindex="-1" data-uk-slider="finite: true">
            <ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-3@m uk-child-width-1-4@l">
              <li>
                <div class="steps-item">
                  <div class="steps-item__box" data-uk-tooltip="title: Best thing about {{ trans('panel.site_title') }} is to earn some extra revenue on their equipments.; pos: bottom-center; animation: uk-animation-slide-bottom-small; duration: 500; pos: bottom">
                    <div class="steps-item__icon"><img src="{{ asset('assets/img/icons/ico-step-1.png')}}" alt="icon-step"></div>
                    <div class="steps-item__title"><b>1</b><span>Search Your Equipment</span></div>
                  </div>
                </div>
              </li>
              <li>
                <div class="steps-item">
                  <div class="steps-item__box" data-uk-tooltip="title: Best thing about {{ trans('panel.site_title') }} is to earn some extra revenue on their equipments.; pos: bottom-center; animation: uk-animation-slide-bottom-small; duration: 500; pos: bottom">
                    <div class="steps-item__icon"><img src="{{ asset('assets/img/icons/ico-step-2.png')}}" alt="icon-step"></div>
                    <div class="steps-item__title"><b>2</b><span>compare Your selection</span></div>
                  </div>
                </div>
              </li>
              <li>
                <div class="steps-item">
                  <div class="steps-item__box" data-uk-tooltip="title: Best thing about {{ trans('panel.site_title') }} is to earn some extra revenue on their equipments.; pos: bottom-center; animation: uk-animation-slide-bottom-small; duration: 500; pos: bottom">
                    <div class="steps-item__icon"><img src="{{ asset('assets/img/icons/ico-step-3.png')}}" alt="icon-step"></div>
                    <div class="steps-item__title"><b>3</b><span>Reserve the equipment   </span></div>
                  </div>
                </div>
              </li>
              <li>
                <div class="steps-item">
                  <div class="steps-item__box" data-uk-tooltip="title: Best thing about {{ trans('panel.site_title') }} is to earn some extra revenue on their equipments.; pos: bottom-center; animation: uk-animation-slide-bottom-small; duration: 500; pos: bottom">
                    <div class="steps-item__icon"><img src="{{ asset('assets/img/icons/ico-step-4.png')}}" alt="icon-step"></div>
                    <div class="steps-item__title"><b>4</b><span> Get Start Your Project</span></div>
                  </div>
                </div>
              </li>
            </ul>
            <div class="uk-hidden@l">
              <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin-medium-top"></ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="section-cta">
      <div class="uk-container-expand">
        <div class="section-cta__box">
          <div class="section-cta__img"><img src="{{ asset('assets/img-cta.png')}}" alt=""></div>
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
          <div class="section-cta__btn">
              <a href="{{ route('contact.us')}}" class="uk-button uk-button-danger uk-button-large"><span>Contact Us</span>
                <img src="{{ asset('assets/img/icons/arrow.svg')}}" alt="arrow" data-uk-svg>
            </a>
        </div>
        </div>
      </div>
    </div>
    <div class="section-why-choose-us">
      <div class="uk-container">
        <div class="uk-grid uk-grid-large uk-child-width-1-2@m uk-flex-middle" data-uk-grid>
          <div>
            <div class="blocks-icon uk-grid uk-grid-medium uk-child-width-1-2@s" data-uk-grid>
              <div>
                <div class="block-icon"><a class="block-icon__link" href="#!">
                    <div class="block-icon__box">
                      <div class="block-icon__ico"><img src="{{ asset('assets/img/icons/ico-why-choose-1.svg')}}" alt="block-icon"></div>
                      <div class="block-icon__title">Rent Quality<br> Equipment</div>
                    </div>
                  </a></div>
              </div>
              <div>
                <div class="block-icon"><a class="block-icon__link" href="#!">
                    <div class="block-icon__box">
                      <div class="block-icon__ico"><img src="{{ asset('assets/img/icons/ico-why-choose-2.svg')}}" alt="block-icon"></div>
                      <div class="block-icon__title">Reliable &<br> Fast Service</div>
                    </div>
                  </a></div>
              </div>
              <div>
                <div class="block-icon"><a class="block-icon__link" href="#!">
                    <div class="block-icon__box">
                      <div class="block-icon__ico"><img src="{{ asset('assets/img/icons/ico-why-choose-3.svg')}}" alt="block-icon"></div>
                      <div class="block-icon__title">Best Prices<br> Gurantee</div>
                    </div>
                  </a></div>
              </div>
              <div>
                <div class="block-icon"><a class="block-icon__link" href="#!">
                    <div class="block-icon__box">
                      <div class="block-icon__ico"><img src="{{ asset('assets/img/icons/ico-why-choose-4.svg')}}" alt="block-icon"></div>
                      <div class="block-icon__title">Rent With Full<br> Security</div>
                    </div>
                  </a></div>
              </div>
            </div>
          </div>
          <div>
            <div class="section-title">
              <div class="uk-text-meta">Why Choose {{ trans('panel.site_title') }} Equipment Rentals</div>
              <div class="uk-h2">Over 15,000+ Rental Deals {{ trans('panel.site_title') }} Is The Best Choice</div>
            </div>
            <div class="section-content">
              <p>
                Farm machinery, mechanical devices, including tractors and implements, used in farming to save labour. Farm machines include a great variety of devices with a wide range of complexity: from simple hand-held implements used since prehistoric times to the complex harvesters of modern mechanized agriculture.                </p>
              {{-- <ul class="list-checked">
                <li>Nostrud exercitation ullamco laboris</li>
                <li>Ut aliquip ex ea reprehen deritin voluptate</li>
                <li>Adipisicing elit sed eiusmod tempor incididunt</li>
                <li>Labore dolore magna aliqua veniam nostrud</li>
              </ul> --}}
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="section-equipment">
      <div class="uk-container">
        <div class="equipment-box">
          <div class="equipment-box__media"><img src="{{ asset('assets/img/img-equipment.jpg')}}" alt=""></div>
          <div class="equipment-box__desc">
            <div class="equipment-box__title">Worried About The Idling Yard?</div>
            <div class="equipment-box__text">Start hiring our equipment(s) today!</div>
            <div class="equipment-box__btn"><a href="{{ route('about.us')}}" class="uk-button uk-button-large"><span>Learn more</span><img src="{{ asset('assets/img/icons/arrow.svg"')}} alt="arrow" data-uk-svg></a></div>
          </div>
        </div>
      </div>
    </div>
    <div class="section-reviews">
      <div class="uk-container">
        <div class="section-title uk-text-center">
          <div class="uk-text-meta">We Promise To Find You The Right Equipment</div>
          <div class="uk-h2">Read Customers Thoughts</div>
        </div>
        <div class="section-content">
          <div data-uk-slider="autoplay: true">
            <div class="uk-position-relative" tabindex="-1">
              <ul class="uk-slider-items uk-grid uk-grid-medium uk-child-width-1-2@m">
                  @foreach ($reviews as $review)
                  <li>
                    <div class="review-item">
                      <div class="review-item__box">
                        <div class="review-item__title">{{ $review->title }} </div>
                        <div class="review-item__text">{{ $review->description }}</div>
                        <div class="review-item__user">
                          {{-- <div class="review-item__avatar"><img src="./assets/img/review-avatar-1.png" alt="review-avatar"></div> --}}
                          <div class="review-item__info">
                            <div class="review-item__name">{{ $review->customer_name }}</div>
                            <div class="review-item__position">{{ $review->professional }}</div>
                          </div>
                          <div class="review-item__stars"> <img src="{{ asset('assets/img/icons/stars.svg')}}" alt="stars"></div>
                        </div>
                      </div>
                    </div>
                  </li>
                  @endforeach

              </ul>
            </div>
            <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin-large-top"></ul>
          </div>
        </div>
      </div>
    </div>
    <div class="section-blog">
      <div class="uk-container">
        <div class="section-header">
          <div class="section-title">
            <div class="uk-text-meta">We Promise To Find You The Right Equipment</div>
            <div class="uk-h2">Latest News & Updates</div>
          </div><a class="uk-button uk-button-default uk-button-large" href="{{ route('blogs.list')}}"><span>View all news</span><img src="{{ asset('assets/img/icons/arrow.svg')}}" alt="arrow" data-uk-svg></a>
        </div>
        <div class="section-content">
          <div data-uk-slider>
            <div class="uk-position-relative" tabindex="-1">
              <ul class="uk-slider-items uk-grid uk-grid-medium uk-child-width-1-2@s uk-child-width-1-3@m">
                @if (count($blogs) > 0)
                  @foreach ($blogs as $blog)
                  <li>
                    <div class="blog-item blog-item--slider">
                      <div class="blog-item__media">
                          <a href="{{ route('blog.details', $blog->id)}}">
                            @if($blog->photo)
                                <img src="{{ $blog->photo->getUrl() }}" style="height: 200px" alt="{{ $blog->title }}">
                            @endif
                          </a>
                        <div class="blog-item__category">{{ $blog->blog_category->name ?? '' }}</div>
                      </div>
                      <div class="blog-item__body">
                        <div class="blog-item__info">
                          <div class="blog-item__date">{{ $blog->created_at->diffForHumans() }}</div>
                          <div class="blog-item__author">By <a href="{{ route('blog.details', $blog->id)}}">{{ trans('panel.site_title') }} {{ $blog->created_by->name ?? '' }}</a></div>
                        </div>
                        <div class="blog-item__title">{{ $blog->title }}</div>
                        {{-- <div class="blog-item__intro">Magna aliqua umt enimd mini venia quis ulamco aliquip commodo cons equat duis aute irue derit ...</div> --}}
                      </div>
                      <div class="blog-item__bottom"> <a class="link-more" href="{{ route('blog.details', $blog->id)}}"><span>Read More</span><img src="./assets/img/icons/arrow.svg" alt="arrow" data-uk-svg></a></div>
                    </div>
                  </li>
                  @endforeach
                @else
                    <h4>No blogs available!!</h4>
                @endif
              </ul>
            </div>
            <div class="uk-hidden@m">
              <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin-large-top"></ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection
