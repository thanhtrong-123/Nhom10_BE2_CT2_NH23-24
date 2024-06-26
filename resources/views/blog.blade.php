@extends('layout')
@section('content')
    <nav aria-label="breadcrumb" class="breadcrumb-nav mb-2">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="#">Blog</a></li>
            </ol>
        </div><!-- End .container -->
    </nav><!-- End .breadcrumb-nav -->

    <div class="page-content">
        <div class="container">
            <nav class="blog-nav">
                <ul class="menu-cat entry-filter justify-content-center">
                    <li class="active"><a href="#" data-filter="*">All Blog Posts<span>9</span></a></li>
                    <li><a href="#" data-filter=".lifestyle">Lifestyle<span>3</span></a></li>
                    <li><a href="#" data-filter=".shopping">Shopping<span>1</span></a></li>
                    <li><a href="#" data-filter=".fashion">Fashion<span>2</span></a></li>
                    <li><a href="#" data-filter=".travel">Travel<span>4</span></a></li>
                    <li><a href="#" data-filter=".hobbies">Hobbies<span>2</span></a></li>
                </ul><!-- End .blog-menu -->
            </nav><!-- End .blog-nav -->

            <div class="entry-container max-col-3" data-layout="fitRows">
                <div class="entry-item lifestyle shopping col-sm-6 col-lg-4">
                    <article class="entry entry-grid text-center">
                        <figure class="entry-media">
                            <a href="#">
                                <img src="{{ asset('assets/images/blog/grid/3cols/post-1.jpg') }}" alt="image desc">
                            </a>
                        </figure><!-- End .entry-media -->

                        <div class="entry-body">
                            <div class="entry-meta">
                                <span class="entry-author">
                                    by <a href="#">John Doe</a>
                                </span>
                                <span class="meta-separator">|</span>
                                <a href="#">Nov 22, 2018</a>
                                <span class="meta-separator">|</span>
                                <a href="#">2 Comments</a>
                            </div><!-- End .entry-meta -->

                            <h2 class="entry-title">
                                <a href="#">Cras ornare tristique elit.</a>
                            </h2><!-- End .entry-title -->

                            <div class="entry-cats">
                                in <a href="#">Lifestyle</a>,
                                <a href="#">Shopping</a>
                            </div><!-- End .entry-cats -->

                            <div class="entry-content">
                                <p>Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit
                                    nunc tortor eu nibh. Suspendisse potenti. Sed egestas vulputate ...</p>
                                <a href="#" class="read-more">Continue Reading</a>
                            </div><!-- End .entry-content -->
                        </div><!-- End .entry-body -->
                    </article><!-- End .entry -->
                </div><!-- End .entry-item -->

                <div class="entry-item lifestyle col-sm-6 col-lg-4">
                    <article class="entry entry-grid text-center">
                        <figure class="entry-media entry-video">
                            <a href="#">
                                <img src="{{ asset('assets/images/blog/grid/3cols/post-2.jpg') }}" alt="image desc">
                            </a>
                        </figure><!-- End .entry-media -->

                        <div class="entry-body">
                            <div class="entry-meta">
                                <span class="entry-author">
                                    by <a href="#">John Doe</a>
                                </span>
                                <span class="meta-separator">|</span>
                                <a href="#">Nov 21, 2018</a>
                                <span class="meta-separator">|</span>
                                <a href="#">0 Comments</a>
                            </div><!-- End .entry-meta -->

                            <h2 class="entry-title">
                                <a href="#">Vivamus vestibulum ntulla necante.</a>
                            </h2><!-- End .entry-title -->

                            <div class="entry-cats">
                                in <a href="#">Lifestyle</a>
                            </div><!-- End .entry-cats -->

                            <div class="entry-content">
                                <p>Morbi purus libero, faucibus commodo quis, gravida id, est. Vestibulumvolutpat, lacus a
                                    ultrices sagittis, mi neque euismod dui ...</p>
                                <a href="#" class="read-more">Continue Reading</a>
                            </div><!-- End .entry-content -->
                        </div><!-- End .entry-body -->
                    </article><!-- End .entry -->
                </div><!-- End .entry-item -->

                <div class="entry-item lifestyle fashion col-sm-6 col-lg-4">
                    <article class="entry entry-grid text-center">
                        <figure class="entry-media">
                            <div class="owl-carousel owl-simple owl-light owl-nav-inside" data-toggle="owl">
                                <a href="#">
                                    <img src="{{ asset('assets/images/blog/grid/3cols/post-3.jpg') }}" alt="image desc">
                                </a>
                                <a href="#">
                                    <img src="{{ asset('assets/images/blog/grid/3cols/post-4.jpg') }}" alt="image desc">
                                </a>
                            </div><!-- End .owl-carousel -->
                        </figure><!-- End .entry-media -->

                        <div class="entry-body">
                            <div class="entry-meta">
                                <span class="entry-author">
                                    by <a href="#">John Doe</a>
                                </span>
                                <span class="meta-separator">|</span>
                                <a href="#">Nov 18, 2018</a>
                                <span class="meta-separator">|</span>
                                <a href="#">3 Comments</a>
                            </div><!-- End .entry-meta -->

                            <h2 class="entry-title">
                                <a href="#">Utaliquam sollicitudin leo.</a>
                            </h2><!-- End .entry-title -->

                            <div class="entry-cats">
                                in <a href="#">Fashion</a>,
                                <a href="#">Lifestyle</a>
                            </div><!-- End .entry-cats -->

                            <div class="entry-content">
                                <p>Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit
                                    nunc tortor eu nibh. Suspendisse potenti. Sed egestas ... </p>
                                <a href="#" class="read-more">Continue Reading</a>
                            </div><!-- End .entry-content -->
                        </div><!-- End .entry-body -->
                    </article><!-- End .entry -->
                </div><!-- End .entry-item -->

                <div class="entry-item travel col-sm-6 col-lg-4">
                    <article class="entry entry-grid text-center">
                        <figure class="entry-media">
                            <a href="#">
                                <img src="{{ asset('assets/images/blog/grid/3cols/post-4.jpg') }}" alt="image desc">
                            </a>
                        </figure><!-- End .entry-media -->

                        <div class="entry-body">
                            <div class="entry-meta">
                                <span class="entry-author">
                                    by <a href="#">Jane Doe</a>
                                </span>
                                <span class="meta-separator">|</span>
                                <a href="#">Nov 15, 2018</a>
                                <span class="meta-separator">|</span>
                                <a href="#">4 Comments</a>
                            </div><!-- End .entry-meta -->

                            <h2 class="entry-title">
                                <a href="#">Fusce pellentesque suscipit.</a>
                            </h2><!-- End .entry-title -->

                            <div class="entry-cats">
                                in <a href="#">Travel</a>
                            </div><!-- End .entry-cats -->

                            <div class="entry-content">
                                <p>Praesent dapibus, neque id cursus faucibus, tortor neque egestas auguae, eu vulputate
                                    magna eros eu erat. Aliquam erat volutpat ... </p>
                                <a href="#" class="read-more">Continue Reading</a>
                            </div><!-- End .entry-content -->
                        </div><!-- End .entry-body -->
                    </article><!-- End .entry -->
                </div><!-- End .entry-item -->

                <div class="entry-item travel hobbies col-sm-6 col-lg-4">
                    <article class="entry entry-grid text-center">
                        <figure class="entry-media">
                            <a href="#">
                                <img src="{{ asset('assets/images/blog/grid/3cols/post-5.jpg') }}" alt="image desc">
                            </a>
                        </figure><!-- End .entry-media -->

                        <div class="entry-body">
                            <div class="entry-meta">
                                <span class="entry-author">
                                    by <a href="#">John Doe</a>
                                </span>
                                <span class="meta-separator">|</span>
                                <a href="#">Nov 11, 2018</a>
                                <span class="meta-separator">|</span>
                                <a href="#">2 Comments</a>
                            </div><!-- End .entry-meta -->

                            <h2 class="entry-title">
                                <a href="#">Aenean dignissim pellente squefelis.</a>
                            </h2><!-- End .entry-title -->

                            <div class="entry-cats">
                                in <a href="#">Travel</a>,
                                <a href="#">Hobbies</a>
                            </div><!-- End .entry-cats -->

                            <div class="entry-content">
                                <p>Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus,
                                    metus. Phasellus ultrices nulla quis nibh. Quisque lectus ... </p>
                                <a href="#" class="read-more">Continue Reading</a>
                            </div><!-- End .entry-content -->
                        </div><!-- End .entry-body -->
                    </article><!-- End .entry -->
                </div><!-- End .entry-item -->

                <div class="entry-item hobbies col-sm-6 col-lg-4">
                    <article class="entry entry-grid text-center">
                        <figure class="entry-media">
                            <a href="#">
                                <img src="{{ asset('assets/images/blog/grid/3cols/post-6.jpg') }}" alt="image desc">
                            </a>
                        </figure><!-- End .entry-media -->

                        <div class="entry-body">
                            <div class="entry-meta">
                                <span class="entry-author">
                                    by <a href="#">John Doe</a>
                                </span>
                                <span class="meta-separator">|</span>
                                <a href="#">Nov 10, 2018</a>
                                <span class="meta-separator">|</span>
                                <a href="#">4 Comments</a>
                            </div><!-- End .entry-meta -->

                            <h2 class="entry-title">
                                <a href="#">Quisque volutpat mattiseros.</a>
                            </h2><!-- End .entry-title -->

                            <div class="entry-cats">
                                in <a href="#">Hobbies</a>
                            </div><!-- End .entry-cats -->

                            <div class="entry-content">
                                <p>Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus. Phasellus
                                    ultrices nulla quis nibh. Quisque lectus. Donec consectetuer ... </p>
                                <a href="#" class="read-more">Continue Reading</a>
                            </div><!-- End .entry-content -->
                        </div><!-- End .entry-body -->
                    </article><!-- End .entry -->
                </div><!-- End .entry-item -->

                <div class="entry-item travel col-sm-6 col-lg-4">
                    <article class="entry entry-grid text-center">
                        <figure class="entry-media">
                            <div class="owl-carousel owl-simple owl-light owl-nav-inside" data-toggle="owl">
                                <a href="#">
                                    <img src="{{ asset('assets/images/blog/grid/3cols/post-7.jpg') }}" alt="image desc">
                                </a>
                                <a href="#">
                                    <img src="{{ asset('assets/images/blog/grid/3cols/post-6.jpg') }}" alt="image desc">
                                </a>
                            </div><!-- End .owl-carousel -->
                        </figure><!-- End .entry-media -->

                        <div class="entry-body">
                            <div class="entry-meta">
                                <span class="entry-author">
                                    by <a href="#">John Doe</a>
                                </span>
                                <span class="meta-separator">|</span>
                                <a href="#">Nov 11, 2018</a>
                                <span class="meta-separator">|</span>
                                <a href="#">3 Comments</a>
                            </div><!-- End .entry-meta -->

                            <h2 class="entry-title">
                                <a href="#">Utaliquam sollicitudin leo.</a>
                            </h2><!-- End .entry-title -->

                            <div class="entry-cats">
                                in <a href="#">Travel</a>
                            </div><!-- End .entry-cats -->

                            <div class="entry-content">
                                <p>Praesent dapibus, neque id cursus faucibus, tortor neque egestas auguae, eu vulputate
                                    magna eros eu erat. Aliquam erat volutpat ... </p>
                                <a href="#" class="read-more">Continue Reading</a>
                            </div><!-- End .entry-content -->
                        </div><!-- End .entry-body -->
                    </article><!-- End .entry -->
                </div><!-- End .entry-item -->

                <div class="entry-item fashion col-sm-6 col-lg-4">
                    <article class="entry entry-grid text-center">
                        <figure class="entry-media">
                            <a href="#">
                                <img src="{{ asset('assets/images/blog/grid/3cols/post-8.jpg') }}" alt="image desc">
                            </a>
                        </figure><!-- End .entry-media -->

                        <div class="entry-body">
                            <div class="entry-meta">
                                <span class="entry-author">
                                    by <a href="#">John Doe</a>
                                </span>
                                <span class="meta-separator">|</span>
                                <a href="#">Nov 08, 2018</a>
                                <span class="meta-separator">|</span>
                                <a href="#">0 Comments</a>
                            </div><!-- End .entry-meta -->

                            <h2 class="entry-title">
                                <a href="#">Quisque a lectus. </a>
                            </h2><!-- End .entry-title -->

                            <div class="entry-cats">
                                in <a href="#">Fashion</a>
                            </div><!-- End .entry-cats -->

                            <div class="entry-content">
                                <p>Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus,
                                    metus. Phasellus ultrices nulla quis nibh. Quisque lectus ... </p>
                                <a href="#" class="read-more">Continue Reading</a>
                            </div><!-- End .entry-content -->
                        </div><!-- End .entry-body -->
                    </article><!-- End .entry -->
                </div><!-- End .entry-item -->

                <div class="entry-item travel col-sm-6 col-lg-4">
                    <article class="entry entry-grid text-center">
                        <figure class="entry-media">
                            <a href="#">
                                <img src="{{ asset('assets/images/blog/grid/3cols/post-9.jpg') }}" alt="image desc">
                            </a>
                        </figure><!-- End .entry-media -->

                        <div class="entry-body">
                            <div class="entry-meta">
                                <span class="entry-author">
                                    by <a href="#">John Doe</a>
                                </span>
                                <span class="meta-separator">|</span>
                                <a href="#">Nov 07, 2018</a>
                                <span class="meta-separator">|</span>
                                <a href="#">5 Comments</a>
                            </div><!-- End .entry-meta -->

                            <h2 class="entry-title">
                                <a href="#">Fusce lacinia arcu etnulla.</a>
                            </h2><!-- End .entry-title -->

                            <div class="entry-cats">
                                in <a href="#">Travel</a>
                            </div><!-- End .entry-cats -->

                            <div class="entry-content">
                                <p>Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus. Phasellus
                                    ultrices nulla quis nibh. Quisque lectus. Donec consectetuer ...</p>
                                <a href="#" class="read-more">Continue Reading</a>
                            </div><!-- End .entry-content -->
                        </div><!-- End .entry-body -->
                    </article><!-- End .entry -->
                </div><!-- End .entry-item -->
            </div><!-- End .entry-container -->

            <nav aria-label="Page navigation">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link page-link-prev" href="#" aria-label="Previous" tabindex="-1"
                            aria-disabled="true">
                            <span aria-hidden="true"><i class="icon-long-arrow-left"></i></span>Prev
                        </a>
                    </li>
                    <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item">
                        <a class="page-link page-link-next" href="#" aria-label="Next">
                            Next <span aria-hidden="true"><i class="icon-long-arrow-right"></i></span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div><!-- End .container -->
    </div><!-- End .page-content -->
@endsection
