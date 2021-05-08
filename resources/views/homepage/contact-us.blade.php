@extends('layouts.homepage')
@section('content')
<main class="page-main">
    <div class="page-head">
      <div class="page-head__bg" style="background-image: url({{ asset('assets/img/bg_contacts.jpg')}})">
        <div class="page-head__content" data-uk-parallax="y: 0, 100">
          <div class="uk-container">
            <div class="header-icons"><span></span><span></span><span></span></div>
            <div class="page-head__title"> Contact Us</div>
            <div class="page-head__breadcrumb">
              <ul class="uk-breadcrumb">
                <li><a href="/">Home</a></li>
                <li><span>get in touch</span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="page-content">
      <div class="uk-section-large uk-container">
        <div class="contacts-block">
          <div class="uk-grid uk-grid-collapse" data-uk-grid>
            <div class="uk-width-1-3@m">
              <div class="sidebar">
                <div class="widjet widjet-contacts">
                  <h4 class="widjet__title">Contact Details</h4>
                  <ul class="contacts-list">
                    <li class="contacts-list-item">
                      <div class="contacts-list-item__icon"><img src="{{ asset('assets/img/icons/ico-contact-1.svg')}}" data-uk-svg alt="HeadOffice Address"></div>
                      <div class="contacts-list-item__desc">
                        <div class="contacts-list-item__label">HeadOffice Address</div>
                        <div class="contacts-list-item__content">{{ trans('panel.location') }}</div>
                      </div>
                    </li>
                    <li class="contacts-list-item">
                      <div class="contacts-list-item__icon"><img src="{{ asset('assets/img/icons/ico-contact-2.svg')}}" data-uk-svg alt="For Rental Support"></div>
                      <div class="contacts-list-item__desc">
                        <div class="contacts-list-item__label">For Rental Support</div>
                        <div class="contacts-list-item__content"><a href="tel:{{ trans('panel.phone1') }}">{{ trans('panel.phone1') }} / {{ trans('panel.phone2') }}</a></div>
                      </div>
                    </li>
                    <li class="contacts-list-item">
                      <div class="contacts-list-item__icon"><img src="{{ asset('assets/img/icons/ico-contact-3.svg')}}" data-uk-svg alt="The Office Hours"></div>
                      <div class="contacts-list-item__desc">
                        <div class="contacts-list-item__label">The Office Hours</div>
                        <div class="contacts-list-item__content">{{ trans('panel.open_hours') }}</div>
                      </div>
                    </li>
                    <li class="contacts-list-item">
                      <div class="contacts-list-item__icon"><img src="{{ asset('assets/img/icons/ico-contact-4.svg')}}" data-uk-svg alt="Send Us Email"></div>
                      <div class="contacts-list-item__desc">
                        <div class="contacts-list-item__label">Send Us Email</div>
                        <div class="contacts-list-item__content"> <a href="mailto:{{ trans('panel.email') }}">{{ trans('panel.email') }}</a></div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="uk-width-2-3@m">
              <div class="block-form">
                <div class="section-title">
                  <div class="uk-h2">Send a Message</div>
                </div>
                <div class="section-content">
                  <p>Your email address will not be published. Required fields are marked with *</p>
                  <form action="{{ route('contact.add')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="uk-grid uk-grid-small uk-child-width-1-2@s" data-uk-grid>
                      <div><input class="uk-input uk-form-large" type="text" name="name" required placeholder="Name *"></div>
                      <div><input class="uk-input uk-form-large" type="text" name="email" required placeholder="Email *"></div>
                      <div class="uk-width-1-1"><input class="uk-input uk-form-large" name="subject" required type="text" placeholder="Subject"></div>
                      <div class="uk-width-1-1"><textarea class="uk-textarea uk-form-large" name="message" required placeholder="Your Message"></textarea></div>
                      <div><button class="uk-button uk-button-large" type="submit"> <span>Send message</span>
                        <img src="{{ asset('assets/img/icons/arrow.svg')}}" alt="arrow" data-uk-svg></button></div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="contacts-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9487.875897255464!2d37.078454189864225!3d-1.0405158092236801!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f4e5b27c66117%3A0xb6f8a7e126152c26!2sThika!5e0!3m2!1sen!2ske!4v1620509630804!5m2!1sen!2ske" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>            {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127653.07272008446!2d37.023412636417184!3d-1.042011471602146!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f4e5b27c66117%3A0xb6f8a7e126152c26!2sThika!5e0!3m2!1sen!2ske!4v1620509542285!5m2!1sen!2ske"></iframe></div> --}}
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
