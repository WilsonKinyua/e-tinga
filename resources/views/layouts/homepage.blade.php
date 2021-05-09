<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Welcome {{ trans('panel.site_title') }}</title>
  <meta content="" name="developer">
  <meta content="{{ trans('panel.site_title') }}" name="description">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="HandheldFriendly" content="true">
  <meta name="format-detection" content="telephone=no">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/favicon/apple-touch-icon.png')}}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicon/favicon-32x32.png')}}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicon/favicon-16x16.png')}}">
  <link rel="manifest" href="{{ asset('assets/img/favicon/site.webmanifest')}}">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#222222">
  <link rel="stylesheet" href="{{ asset('assets/css/libs.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/css/main.css')}}">
    {{-- toastr --}}
    <link rel="stylesheet" href="{{ asset('assets/toastr.min.css')}}">
</head>

<body class="page-home">
  <div class="page-wrapper">

    <header class="page-header">
      <div class="page-header-top">
        <div class="page-header-top__left">
          <div class="update"><i class="far fa-hand-point-right"></i><span><a href="/">Latest Updates</a> Get latest updates by subscribing to our newsletter1</span></div>
        </div>
        <div class="page-header-top__right">
          <div class="time-work icon"><i class="far fa-clock"></i><span>{{ trans('panel.open_hours') }}</span></div>
          {{-- <div class="login-link"> <i class="fas fa-sign-in-alt"></i><a href="#!">Login or Register</a></div> --}}
          <div class="social">
            <ul class="social-list">
                <li class="social-list__item"><a class="social-list__link" target="_blank" href="{{ trans('panel.twitter') }}"><i class="fab fa-twitter"></i></a></li>
                <li class="social-list__item"><a class="social-list__link" target="_blank" href="{{ trans('panel.facebook') }}"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                <li class="social-list__item"><a class="social-list__link" target="_blank" href="{{ trans('panel.google_plus') }}"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a></li>
                <li class="social-list__item"><a class="social-list__link" target="_blank" href="{{ trans('panel.youtube') }}"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
                <li class="social-list__item"><a class="social-list__link" target="_blank" href="{{ trans('panel.pinterest') }}"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="page-header-bottom" data-uk-sticky>
        <div class="page-header-bottom__left">
          <div class="logo">
              <a class="logo__link" href="/">
              {{-- <img class="logo__img" src="./assets/imsg/logo.png" alt=""> --}}
              <h1 class="link" style="text-transform: uppercase">{{ trans('panel.site_title') }}</h1>
            </a>
            </div>
          <div class="support"> <a class="support__link" href="tel:{{ trans('panel.phone1') }}">
              <div class="support__icon"><i class="fas fa-headset"></i></div>
              <div class="support__desc">
                <div class="support__label">Get Quick Support</div>
                <div class="support__phone">{{ trans('panel.phone1') }}</div>
              </div>
            </a></div>
        </div>
        <div class="page-header-bottom__right">
          <nav class="uk-navbar-container uk-navbar-transparent" data-uk-navbar>
            <div class="nav-overlay uk-visible@l">
              <ul class="uk-navbar-nav">
                <li class="uk-active"><a href="/">Home</a></li>
                <li><a href="#">Top Equipments<i class="fas fa-angle-down"></i></a>
                  <div class="uk-navbar-dropdown">
                    <ul class="uk-nav uk-navbar-dropdown-nav">
                      <li><a href="#">Page categories 1</a></li>
                    </ul>
                  </div>
                </li>
                <li><a href="#">Top Categories<i class="fas fa-angle-down"></i></a>
                  <div class="uk-navbar-dropdown">
                    <ul class="uk-nav uk-navbar-dropdown-nav">
                      @foreach ($categories as $category)
                        <li><a href="{{ route('machinery.category', $category->id)}}">{{ $category->name }}</a></li>
                      @endforeach
                    </ul>
                  </div>
                </li>
                <li><a href="{{ route('about.us')}}">About</a></li>
                <li><a href="{{ route('blogs.list')}}">News<i class="fas fa-angle-down"></i></a>
                  <div class="uk-navbar-dropdown">
                    <ul class="uk-nav uk-navbar-dropdown-nav">
                      <li><a href="{{ route('blogs.list')}}">Blogs</a></li>
                    </ul>
                  </div>
                </li>
                <li><a href="{{ route('contact.us') }}">Contact</a></li>
              </ul>
            </div>
            {{-- <div class="nav-overlay search-btn"><a class="uk-navbar-toggle" data-uk-search-icon data-uk-toggle="target: .nav-overlay; animation: uk-animation-fade" href="#"></a></div>
            <div class="nav-overlay uk-navbar-left uk-flex-1" hidden>
              <div class="uk-navbar-item uk-width-expand">
                <form class="uk-search uk-search-navbar uk-width-1-1" action="#!"><input class="uk-search-input" type="search" placeholder="Search..." autofocus></form>
              </div><a class="uk-navbar-toggle" data-uk-close data-uk-toggle="target: .nav-overlay; animation: uk-animation-fade" href="#"></a>
            </div> --}}
          </nav>
          <a class="uk-navbar-toggle uk-hidden@l" href="#offcanvas" data-uk-toggle>
              <span data-uk-icon="menu"></span></a>
              <a class="uk-navbar-toggle cart-btn" href="#">
            {{-- <div class="cart-btn__icon" data-uk-icon="cart"><span class="cart-btn__count">2</span>
            </div> --}}
          </a>
        </div>
      </div>
    </header>


    @yield('content')


    <footer class="page-footer">
        <div class="uk-container uk-container-large">
          <div class="page-footer-top">
            <div class="logo">
                <a style="text-transform: none" class="logo__link" href="/">
                {{-- <img class="logo__img" src="./assets/imdg/logo-white.png" alt="logo"> --}}
                {{-- <h1 class="text-white">{{ trans('panel.site_title') }}</h1> --}}
            </a></div>
            <div class="subscription-block">
              <div class="subscription-block__title">
                <h4>Newsletter Subscription</h4><span>Get Latest Deals from {{ trans('panel.site_title') }}</span>
              </div>
              <div class="subscription-block__form">
                <form action="{{ route('subsciber.add')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                  <div class="subscription-block__form-box"><input required class="uk-input uk-form-large" name="email" type="text" placeholder="Enter your email"><button class="uk-button uk-button-large" type="submit"> <span>Subscribe</span><img src="{{ asset('assets/img/icons/arrow.svg')}}" alt="arrow" data-uk-svg></button></div>
                </form>
              </div>
            </div>
          </div>
          <div class="page-footer-middle">
            <div class="uk-grid uk-child-width-1-4@l uk-child-width-1-2@s" data-uk-grid>
              <div class="uk-flex-first@l">
                <div class="title">About {{ trans('panel.site_title') }}</div>
                <p>{{ trans('panel.about_footer') }}</p>
                <ul class="social-list">
                    <li class="social-list__item"><a class="social-list__link" target="_blank" href="{{ trans('panel.twitter') }}"><i class="fab fa-twitter"></i></a></li>
                    <li class="social-list__item"><a class="social-list__link" target="_blank" href="{{ trans('panel.facebook') }}"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                    <li class="social-list__item"><a class="social-list__link" target="_blank" href="{{ trans('panel.google_plus') }}"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a></li>
                    <li class="social-list__item"><a class="social-list__link" target="_blank" href="{{ trans('panel.youtube') }}"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
                    <li class="social-list__item"><a class="social-list__link" target="_blank" href="{{ trans('panel.pinterest') }}"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a></li>
                </ul>
              </div>
              <div class="uk-flex-last@l">
                <div class="title">Get In Touch</div>
                <ul class="contacts-list">
                  <li class="contacts-list-item">
                    <div class="contacts-list-item__icon"><img src="{{ asset('assets/img/icons/ico-phone24.svg')}}" data-uk-svg alt="For Rental Support"></div>
                    <div class="contacts-list-item__desc">
                      <div class="contacts-list-item__label">For Rental Support</div>
                      <div class="contacts-list-item__content"> <a href="tel:{{ trans('panel.phone1') }}">{{ trans('panel.phone1') }} / {{ trans('panel.phone2') }}</a></div>
                    </div>
                  </li>
                  <li class="contacts-list-item">
                    <div class="contacts-list-item__icon"><img src="{{ asset('assets/img/icons/ico-timer.svg')}}" data-uk-svg alt="The Office Hours"></div>
                    <div class="contacts-list-item__desc">
                      <div class="contacts-list-item__label">The Office Hours</div>
                      <div class="contacts-list-item__content">{{ trans('panel.open_hours') }}</div>
                    </div>
                  </li>
                  <li class="contacts-list-item">
                    <div class="contacts-list-item__icon"><img src="{{ asset('assets/img/icons/ico-mail.svg')}}" data-uk-svg alt="Send Us Email"></div>
                    <div class="contacts-list-item__desc">
                      <div class="contacts-list-item__label">Send Us Email</div>
                      <div class="contacts-list-item__content"> <a href="mailto:{{ trans('panel.email') }}">{{ trans('panel.email') }}</a></div>
                    </div>
                  </li>
                </ul>
              </div>
              <div>
                <div class="title">Useful links</div>
                <ul class="uk-nav uk-list-disc">
                  <li> <a href="{{ route('about.us')}}">About {{ trans('panel.site_title') }}</a></li>
                  <li> <a href="{{ route('blogs.list')}}">Latest News</a></li>
                  <li> <a href="{{ route('contact.us') }}">Contact Us</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="page-footer-bottom"><span>@ 2021 {{ trans('panel.site_title') }} - Renting Farm Equipments.</span>
            <a href="/">Terms & Conditions</a></div>
            <a class="totop-link" href="#top" data-uk-scroll>
              <img src="{{ asset('assets/img/icons/ico-totop.svg')}}" alt="totop"><span>Scroll Up</span></a>
        </div>
        {{-- navigation bar for mobile devices --}}
        <div id="offcanvas" data-uk-offcanvas="overlay: true">
          <div class="uk-offcanvas-bar"><button class="uk-offcanvas-close" type="button" data-uk-close=""></button>
            <div class="uk-margin">
              <div class="logo"><a class="logo__link" href="/">
                  {{-- class="logo__img" src="./assdets/img/logo-white.png" alt="logo"> --}}
                  <h1 class="text-white link">{{ trans('panel.site_title') }}</h1>
                </a></div>
            </div>
            <div class="uk-margin">
              <ul class="uk-nav-default uk-nav-parent-icon" data-uk-nav>
                <li class="uk-active"><a href="/">Home</a></li>
                <li class="uk-parent"><a href="#">Top Equipments</a>
                  <ul class="uk-nav-sub">
                    <li><a href="#">Page categories 1</a></li>
                  </ul>
                </li>
                <li class="uk-parent"><a href="#">Top Categories</a>
                  <ul class="uk-nav-sub">
                    @foreach ($categories as $category)
                        <li><a href="{{ route('machinery.category', $category->id)}}">{{ $category->name }}</a></li>
                    @endforeach
                  </ul>
                </li>
                <li><a href="{{ route('about.us')}}">About</a></li>
                <li class="uk-parent"><a href="{{ route('blogs.list')}}">News</a>
                  <ul class="uk-nav-sub">
                    <li><a href="{{ route('blogs.list')}}">Blogs</a></li>
                  </ul>
                </li>
                <li><a href="{{ route('contact.us') }}">Contact</a></li>
              </ul>
            </div>
            <div class="uk-margin">
              <div class="support"> <a class="support__link" href="tel:236-799-5500">
                  <div class="support__icon"><i class="fas fa-headset"></i></div>
                  <div class="support__desc">
                    <div class="support__label">Get Quick Support</div>
                    <div class="support__phone">{{ trans('panel.phone1') }}</div>
                  </div>
                </a></div>
            </div>
            <div class="uk-margin">
              <div class="social">
                <ul class="social-list">
                  <li class="social-list__item"><a class="social-list__link" target="_blank" href="{{ trans('panel.twitter') }}"><i class="fab fa-twitter"></i></a></li>
                  <li class="social-list__item"><a class="social-list__link" target="_blank" href="{{ trans('panel.facebook') }}"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                  <li class="social-list__item"><a class="social-list__link" target="_blank" href="{{ trans('panel.google_plus') }}"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a></li>
                  <li class="social-list__item"><a class="social-list__link" target="_blank" href="{{ trans('panel.youtube') }}"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
                  <li class="social-list__item"><a class="social-list__link" target="_blank" href="{{ trans('panel.pinterest') }}"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        {{-- <div class="uk-flex-top" id="callback" data-uk-modal="">
          <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical"><button class="uk-modal-close-default" type="button" data-uk-close=""></button>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                 eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                  nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                   Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </div> --}}
      </footer>
    </div>
    <script src="{{ asset('assets/js/libs.js')}}"></script>
    <script src="{{ asset('assets/js/main.js')}}"></script>
    <script src="{{ asset('assets/js/libs/jquery-3.1.1.min.js')}}"></script>
        <!-- toastr -->
    {{-- notification --}}
    <script src="{{ asset('assets/toastr.min.js')}}"></script>

    <script>
        // Get the Toast button
        var toastButton = document.getElementById("toast-btn");
        // Get the Toast element
        var toastElement = document.getElementsByClassName("toast")[0];

        toastButton.onclick = function() {
            $('.toast').toast('show');
        }
    </script>

    <script>
        @if (session()->has('success'))
            toastr.success("{{session()->get('success')}}");
        @endif

        @if (session()->has('danger'))
            toastr.warning("{{session()->get('danger')}}");
        @endif

        @if (session()->has('error'))
            toastr.error("{{session()->get('error')}}");
        @endif
    </script>
  </body>

  </html>
