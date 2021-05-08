@extends('layouts.homepage')


@section('content')
<main class="page-main">
    <div class="page-head">
      <div class="page-head__bg" style="background-image: url(
           @if($blog->photo)
                   {{ $blog->photo->getUrl() }}
            @endif
          )">
        <div class="page-head__content" data-uk-parallax="y: 0, 100">
          <div class="uk-container">
            <div class="header-icons"><span></span><span></span><span></span></div>
            <div class="page-head__title"> {{ $blog->title }}</div>
            <div class="page-head__breadcrumb">
              <ul class="uk-breadcrumb">
                <li><a href="/">Home</a></li>
                <li><span>{{ $blog->title }}</span></li>
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
            <article class="article-full">
              <div class="article-full__image" data-uk-lightbox><a href="{{ $blog->photo->getUrl() }}">
                @if($blog->photo)
                    <img src="{{ $blog->photo->getUrl() }}" alt="">
                @endif

                </a>
                <div class="article-full__category">{{ $blog->blog_category->name ?? '' }}</div>
              </div>
              <h1 class="article-full__title">{{ $blog->title }}</h1>
              <div class="article-full__info">
                <div class="article-full__date"><i class="fas fa-calendar-alt"></i><span>{{ $blog->created_at->diffForHumans() }}</span></div>
                <div class="article-full__author"><i class="fas fa-user"></i><span>By </span><a href="#!"> {{ $blog->created_by->name ?? '' }}</a></div>
                <div class="article-full__comments"><i class="fas fa-comment"></i><a href="#article-reviews" data-uk-scroll="offset: 120">43 Comments</a></div>
                {{-- <div class="article-full__share"><i class="fas fa-share-alt"></i><a href="#article-bottom" data-uk-scroll="offset: 120">Share This</a></div> --}}
              </div>
              <div class="article-full__content">
                <p>
                    {!! $blog->description !!}
                </p>
              </div>
              <div class="article-full__bottom" id="article-bottom">
                <div class="article-full__tags">
                  <ul class="tags-list">
                    @foreach($blog->tags as $key => $tags)
                        <li class="label label-info"><a>{{ $tags->name }}</a></li>
                    @endforeach
                  </ul>
                </div>
                {{-- <div class="article-full__share">
                  <ul class="share-list">
                    <li><a href="#!"><img src="./assets/img/icons/social-1.svg" alt="social"></a></li>
                    <li><a href="#!"><img src="./assets/img/icons/social-2.svg" alt="social"></a></li>
                    <li><a href="#!"><img src="./assets/img/icons/social-3.svg" alt="social"></a></li>
                    <li><a href="#!"><img src="./assets/img/icons/social-4.svg" alt="social"></a></li>
                    <li><a href="#!"><img src="./assets/img/icons/social-5.svg" alt="social"></a></li>
                  </ul>
                </div> --}}
              </div>
              <div class="section-article-reviews" id="article-reviews">
                <div class="section-title">
                  <div class="uk-h2">Comments (2)</div>
                </div>
                <div class="section-content">
                  <article class="uk-comment">
                    <header class="uk-comment-header">
                      <div class="uk-grid-medium" data-uk-grid>
                        <div class="uk-width-auto@s"><img class="uk-comment-avatar" src="./assets/img/img-reviews-3.png" alt></div>
                        <div class="uk-width-expand@s">
                          <div class="uk-flex uk-flex-between uk-margin-small-bottom">
                            <div>
                              <h6 class="uk-comment-title uk-margin-remove">Katherine A. Fogg</h6><span class="uk-text-meta">November 25, 2020</span>
                            </div>
                            <div> <a class="link-more" href="#!"><span>Reply</span><img src="./assets/img/icons/arrow.svg" alt="arrow" data-uk-svg></a></div>
                          </div>
                          <div class="uk-comment-body">
                            <p>Kiusmod tempor incididunt ut labore sed dolore magna aliquay enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                          </div>
                        </div>
                      </div>
                    </header>
                  </article>
                  <hr class="uk-margin-medium">
                  <article class="uk-comment">
                    <header class="uk-comment-header">
                      <div class="uk-grid-medium" data-uk-grid>
                        <div class="uk-width-auto@s"><img class="uk-comment-avatar" src="./assets/img/img-reviews-4.png" alt></div>
                        <div class="uk-width-expand@s">
                          <div class="uk-flex uk-flex-between uk-margin-small-bottom">
                            <div>
                              <h4 class="uk-comment-title uk-margin-remove">David H. Medyson</h4><span class="uk-text-meta">November 25, 2020</span>
                            </div>
                            <div> <a class="link-more" href="#!"><span>Reply</span><img src="./assets/img/icons/arrow.svg" alt="arrow" data-uk-svg></a></div>
                          </div>
                          <div class="uk-comment-body">
                            <p>Kiusmod tempor incididunt ut labore sed dolore magna aliquay enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                          </div>
                        </div>
                      </div>
                    </header>
                  </article>
                  <div class="block-form">
                    <div class="section-title">
                      <div class="uk-h2">Leave a Reply</div>
                    </div>
                    <div class="section-content">
                      <p>Your email address will not be published. Required fields are marked with *</p>
                      <form action="#!">
                        <div class="uk-grid uk-grid-small uk-child-width-1-2@s" data-uk-grid>
                          <div><input class="uk-input uk-form-large" type="text" placeholder="Name *"></div>
                          <div><input class="uk-input uk-form-large" type="text" placeholder="Email *"></div>
                          <div class="uk-width-1-1"><input class="uk-input uk-form-large" type="text" placeholder="Website"></div>
                          <div class="uk-width-1-1"><textarea class="uk-textarea uk-form-large" placeholder="Comment"></textarea></div>
                          <div><button class="uk-button uk-button-large" type="submit"> <span>Post comment</span><img src="./assets/img/icons/arrow.svg" alt="arrow" data-uk-svg></button></div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </article>
          </div>
          <div class="uk-width-1-3@m">
            <aside class="sidebar">
              <div class="widjet widjet-category">
                <h4 class="widjet__title">Categories</h4>
                <ul class="list-category">
                    @foreach ($categories as $category)
                        <li><a href="{{ route('machinery.category', $category->id)}}">{{ $category->name }}</a></li>
                    @endforeach
                </ul>
              </div>
              <div class="widjet widjet-list-articles">
                <h4 class="widjet__title">Top Articles</h4>
                <ul class="list-articles">
                    @foreach ($blogs as $blog)
                        <li class="list-articles-item">
                            <a class="list-articles-item__link" href="{{ route('blog.details', $blog->id)}}">
                                <div class="list-articles-item__img">
                                    @if($blog->photo)
                                            <img src="{{ $blog->photo->getUrl('thumb') }}" alt="{{ $blog->title }}">
                                    @endif
                                </div>
                                <div class="list-articles-item__info">
                                <div class="list-articles-item__title">{{ $blog->title }}</div>
                                <div class="list-articles-item__date">Posted: {{ $blog->created_at->diffForHumans() }}</div>
                                </div>
                            </a>
                        </li>
                    @endforeach
                </ul>
              </div>
            </aside>
          </div>
        </div>
      </div>
    </div>
  </main>

@endsection
