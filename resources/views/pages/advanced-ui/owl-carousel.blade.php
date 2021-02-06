<x-layouts.app>
    @push('plugins_css')
        <link rel="stylesheet" href="{{ asset('assets/vendors/owl.carousel/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendors/owl.carousel/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendors/animate.css/animate.min.css') }}">
    @endpush
    <div class="page-content">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Advanced UI</a></li>
                <li class="breadcrumb-item active" aria-current="page">Owl Carousel</li>
            </ol>
        </nav>

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Owl Carousel 2</h4>
                        <p class="card-description mb-0">Read the <a
                                href="https://owlcarousel2.github.io/OwlCarousel2/" target="_blank">
                                Official Owl Carousel 2 Plugin Documentation </a>for a full list of instructions
                            and other options.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Basic Example</h6>
                        <div class="owl-carousel owl-theme owl-basic">
                            <div class="item">
                                <img src="{{ asset('assets/images/carousel/img1.jpg') }}" alt="item-image">
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/images/carousel/img2.jpg') }}" alt="item-image">
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/images/carousel/img3.jpg') }}" alt="item-image">
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/images/carousel/img4.jpg') }}" alt="item-image">
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/images/carousel/img5.jpg') }}" alt="item-image">
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/images/carousel/img6.jpg') }}" alt="item-image">
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/images/carousel/img7.jpg') }}" alt="item-image">
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/images/carousel/img8.jpg') }}" alt="item-image">
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/images/carousel/img9.jpg') }}" alt="item-image">
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/images/carousel/img10.jpg') }}" alt="item-image">
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/images/carousel/img11.jpg') }}" alt="item-image">
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/images/carousel/img12.jpg') }}" alt="item-image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Auto Play</h6>
                        <div class="owl-carousel owl-theme owl-auto-play">
                            <div class="item">
                                <img src="{{ asset('assets/images/carousel/img1.jpg') }}" alt="item-image">
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/images/carousel/img2.jpg') }}" alt="item-image">
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/images/carousel/img3.jpg') }}" alt="item-image">
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/images/carousel/img4.jpg') }}" alt="item-image">
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/images/carousel/img5.jpg') }}" alt="item-image">
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/images/carousel/img6.jpg') }}" alt="item-image">
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/images/carousel/img7.jpg') }}" alt="item-image">
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/images/carousel/img8.jpg') }}" alt="item-image">
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/images/carousel/img9.jpg') }}" alt="item-image">
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/images/carousel/img10.jpg') }}" alt="item-image">
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/images/carousel/img11.jpg') }}" alt="item-image">
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/images/carousel/img12.jpg') }}" alt="item-image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Animation</h6>
                        <p class="card-description">fadeout</p>
                        <div class="owl-carousel owl-theme owl-fadeout">
                            <div class="item">
                                <img src="{{ asset('assets/images/carousel/img2.jpg') }}" alt="item-image">
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/images/carousel/img1.jpg') }}" alt="item-image">
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/images/carousel/img3.jpg') }}" alt="item-image">
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/images/carousel/img4.jpg') }}" alt="item-image">
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/images/carousel/img5.jpg') }}" alt="item-image">
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/images/carousel/img6.jpg') }}" alt="item-image">
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/images/carousel/img7.jpg') }}" alt="item-image">
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/images/carousel/img8.jpg') }}" alt="item-image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Animation</h6>
                        <p class="card-description">Using <a href="https://daneden.github.io/animate.css/"
                                                             target="_blank">animate.css</a> library.</p>
                        <div class="owl-carousel owl-theme owl-animate-css">
                            <div class="item">
                                <img src="{{ asset('assets/images/carousel/img5.jpg') }}" alt="item-image">
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/images/carousel/img6.jpg') }}" alt="item-image">
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/images/carousel/img7.jpg') }}" alt="item-image">
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/images/carousel/img8.jpg') }}" alt="item-image">
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/images/carousel/img9.jpg') }}" alt="item-image">
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/images/carousel/img10.jpg') }}" alt="item-image">
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/images/carousel/img11.jpg') }}" alt="item-image">
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/images/carousel/img12.jpg') }}" alt="item-image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Mousewheel</h6>
                        <p class="card-description">To add mouswheel scrolling just include the fantastic
                            plugin <a href="https://github.com/brandonaaron/jquery-mousewheel"
                                      target="_blank">jquery.mousewheel.js</a>.</p>
                        <div class="owl-carousel owl-theme owl-mouse-wheel">
                            <div class="item">
                                <img src="{{ asset('assets/images/carousel/img1.jpg') }}" alt="item-image">
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/images/carousel/img2.jpg') }}" alt="item-image">
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/images/carousel/img3.jpg') }}" alt="item-image">
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/images/carousel/img4.jpg') }}" alt="item-image">
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/images/carousel/img5.jpg') }}" alt="item-image">
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/images/carousel/img6.jpg') }}" alt="item-image">
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/images/carousel/img7.jpg') }}" alt="item-image">
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/images/carousel/img8.jpg') }}" alt="item-image">
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/images/carousel/img9.jpg') }}" alt="item-image">
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/images/carousel/img10.jpg') }}" alt="item-image">
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/images/carousel/img11.jpg') }}" alt="item-image">
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/images/carousel/img12.jpg') }}" alt="item-image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('plugins_js')
        <script src="{{ asset('assets/vendors/owl.carousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
    @endpush
    @push('scripts')
        <script src="{{ asset('assets/js/carousel.js') }}"></script>
    @endpush
</x-layouts.app>
