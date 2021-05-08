@extends('layouts.homepage')
@section('content')
<main class="page-main">
    <div class="page-head">
      <div class="page-head__bg" style="background-image: url({{ asset('assets/img/blog.jpg')}})">
        <div class="page-head__content" data-uk-parallax="y: 0, 100">
          <div class="uk-container">
            <div class="header-icons"><span></span><span></span><span></span></div>
            <div class="page-head__title"> Blog - Latest News</div>
            <div class="page-head__breadcrumb">
              <ul class="uk-breadcrumb">
                <li><a href="/">Home</a></li>
                <li><span>Blog List</span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="page-content">
      <div class="uk-section-large uk-container">
        <div class="uk-grid uk-grid-medium uk-child-width-1-3@m uk-child-width-1-2@s" data-uk-grid>
           @if (count($blogs) > 0)
            @foreach ($blogs as $blog)
            <div>
                <div class="blog-item">
                <div class="blog-item__media"><a href="#!">
                    @if($blog->photo)
                            <img src="{{ $blog->photo->getUrl() }}" alt="{{ $blog->title }}">
                    @endif
                    <div class="blog-item__category">{{ $blog->blog_category->name ?? '' }}</div>
                </div>
                <div class="blog-item__body">
                    <div class="blog-item__info">
                    <div class="blog-item__date">
                        {{ $blog->created_at->diffForHumans() }}
                    </div>
                    <div class="blog-item__author">By <a>{{ $blog->created_by->name ?? '' }}</a></div>
                    </div>
                    <div class="blog-item__title">{{ $blog->title }}</div>
                    <div class="blog-item__intro">
                        {!! Str::limit($blog->description, 60, '...') !!}
                    </div>
                </div>
                <div class="blog-item__bottom"> <a class="link-more" href="#!"><span>Read More</span><img src="{{ asset('assets/img/icons/arrow.svg')}}" alt="arrow" data-uk-svg></a></div>
                </div>
            </div>
            @endforeach
           @else
                <h4>No blogs available!!</h4>
           @endif


        </div>
        {{-- <ul class="uk-pagination uk-flex-center uk-margin-large-top">
          <li class="uk-active"><span>1</span></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a class="uk-pagination-next" href="#"><img src="./assets/img/icons/arrow.svg" alt="" data-uk-svg></a></li>
        </ul> --}}
      </div>
    </div>
  </main>
@endsection
