@extends('layouts.app')

@section('content')

    @include('layouts.error')
    @include('layouts.success')

    <div class="container">
        <h1>{{ __('messages.message_photoalbum_header') }}</h1>
    </div>

    <div class="container">
        @foreach ($array_of_photos as $key=>$photos_of_folder)
                <h2>{{ $key }}</h2>
                <div class="my-gallery container" itemscope itemtype="http://schema.org/ImageGallery">
                    @foreach ($photos_of_folder as $photo_filename=>$dimension)
                        <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                            <a href="{{ asset($photo_filename) }}" itemprop="contentUrl" data-size="{{$dimension}}">
                                <img src="{{ asset($photo_filename) }}" itemprop="thumbnail" alt="basename($photo_filename)" />
                            </a>
                            <figcaption itemprop="caption description">{{ basename($photo_filename) }}</figcaption>
                        </figure>
                    @endforeach
                </div>
        @endforeach
    </div>

    <!-- Root element of PhotoSwipe. Must have class pswp. -->
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

        <!-- Background of PhotoSwipe.
             It's a separate element, as animating opacity is faster than rgba(). -->
        <div class="pswp__bg"></div>

        <!-- Slides wrapper with overflow:hidden. -->
        <div class="pswp__scroll-wrap">

            <!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
            <!-- don't modify these 3 pswp__item elements, data is added later on. -->
            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>

            <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
            <div class="pswp__ui pswp__ui--hidden">

                <div class="pswp__top-bar">

                    <!--  Controls are self-explanatory. Order can be changed. -->

                    <div class="pswp__counter"></div>

                    <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                    <button class="pswp__button pswp__button--share" title="Share"></button>

                    <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

                    <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                    <!-- Preloader demo https://codepen.io/dimsemenov/pen/yyBWoR -->
                    <!-- element will get class pswp__preloader-active when preloader is running -->
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div>

                <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
                </button>

                <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
                </button>

                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>

            </div>

        </div>

    </div>

    <!-- Core JS file -->
    <script src="{{ asset('js/photoswipe.min.js') }}"></script>

    <!-- UI JS file -->
    <script src="{{ asset('js/photoswipe-ui-default.min.js') }}"></script>

    <link href="{{ asset('css/photoswipe.css') }}" rel="stylesheet">
    <link href="{{ asset('css/default-skin.css') }}" rel="stylesheet">
@endsection
