@extends('layouts.site')
@section('header')
  @include('site.header')
@endsection
        
        <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
                <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
                                <div class="container">
                                        <div class="banner_content text-center">
                                                <h2>О нас</h2>
                                                <div class="page_link">
                                                        <a href="{{route('home')}}">Главная</a>
                                                        <a href="{{route('about')}}">О нас</a>
                                                </div>
                                        </div>
                                </div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================Design Area =================-->
        <section class="design_area p_120">
                <div class="container">
                        <div class="design_inner row">
                                <div class="col-lg-5">
                                        <img class="img-fluid" src="{{asset('template/img/design-1.jpg')}}" alt="">
                                </div>
                                <div class="col-lg-7">
                                        <div class="design_left_text">
                                                <h6>Welcome to Maxitecture </h6>
                                                <h2>Precise concept <br /> design for<br /> stylish living</h2>
                                                <h5>Precise concept design for unique stylish living alone</h5>
                                                <p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price. You may see some for as low as $.17 each.</p>
                                        </div>
                                </div>
                        </div>
                </div>
        </section>
        <!--================End Design Area =================-->
        
        
        <!--================Testimonials Area =================-->
        <section class="testimonials_area p_120">
                <div class="container">
                        <div class="main_title">
                                <h2>What Customer Say About Us</h2>
                                <p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price. You may see some for as low as $.17 each.</p>
                        </div>
                        <div class="testi_slider owl-carousel">
                                <div class="item">
                                        <div class="testi_item">
                                                        <div class="media">
                                                                <div class="d-flex">
                                                                        <img src="{{asset('template/img/testimonials/testi-1.png')}}" alt="">
                                                                </div>
                                                                <div class="media-body">
                                                                        <p>Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware.</p>
                                                                        <h4>Mark Alviro Wiens</h4>
                                                                        <div class="rating">
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star-half-o"></i>
                                                                        </div>
                                                                </div>
                                                        </div>
                                        </div>
                                </div>
                                <div class="item">
                                        <div class="testi_item">
                                                        <div class="media">
                                                                <div class="d-flex">
                                                                        <img src="{{asset('template/img/testimonials/testi-2.png')}}" alt="">
                                                                </div>
                                                                <div class="media-body">
                                                                        <p>Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware.</p>
                                                                        <h4>Mark Alviro Wiens</h4>
                                                                        <div class="rating">
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star-half-o"></i>
                                                                        </div>
                                                                </div>
                                                        </div>
                                        </div>
                                </div>
                                <div class="item">
                                        <div class="testi_item">
                                                        <div class="media">
                                                                <div class="d-flex">
                                                                        <img src="{{asset('template/img/testimonials/testi-1.png')}}" alt="">
                                                                </div>
                                                                <div class="media-body">
                                                                        <p>Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware.</p>
                                                                        <h4>Mark Alviro Wiens</h4>
                                                                        <div class="rating">
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star-half-o"></i>
                                                                        </div>
                                                                </div>
                                                        </div>
                                        </div>
                                </div>
                                <div class="item">
                                        <div class="testi_item">
                                                        <div class="media">
                                                                <div class="d-flex">
                                                                        <img src="{{asset('template/img/testimonials/testi-2.png')}}" alt="">
                                                                </div>
                                                                <div class="media-body">
                                                                        <p>Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware.</p>
                                                                        <h4>Mark Alviro Wiens</h4>
                                                                        <div class="rating">
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star-half-o"></i>
                                                                        </div>
                                                                </div>
                                                        </div>
                                        </div>
                                </div>
                                <div class="item">
                                        <div class="testi_item">
                                                        <div class="media">
                                                                <div class="d-flex">
                                                                        <img src="{{asset('template/img/testimonials/testi-1.png')}}" alt="">
                                                                </div>
                                                                <div class="media-body">
                                                                        <p>Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware.</p>
                                                                        <h4>Mark Alviro Wiens</h4>
                                                                        <div class="rating">
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star-half-o"></i>
                                                                        </div>
                                                                </div>
                                                        </div>
                                        </div>
                                </div>
                                <div class="item">
                                        <div class="testi_item">
                                                        <div class="media">
                                                                <div class="d-flex">
                                                                        <img src="{{asset('template/img/testimonials/testi-2.png')}}" alt="">
                                                                </div>
                                                                <div class="media-body">
                                                                        <p>Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware.</p>
                                                                        <h4>Mark Alviro Wiens</h4>
                                                                        <div class="rating">
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star-half-o"></i>
                                                                        </div>
                                                                </div>
                                                        </div>
                                        </div>
                                </div>
                        </div>
                </div>
        </section>
        <!--================End Testimonials Area =================-->
        
        <!--================Clients Logo Area =================-->
        <section class="clients_logo_area p_120">
                <div class="container">
                        <div class="clients_slider owl-carousel">
                                <div class="item">
                                        <img src="{{asset('template/img/clients-logo/c-logo-1.png')}}" alt="">
                                </div>
                                <div class="item">
                                        <img src="{{asset('template/img/clients-logo/c-logo-2.png')}}" alt="">
                                </div>
                                <div class="item">
                                        <img src="{{asset('template/img/clients-logo/c-logo-3.png')}}" alt="">
                                </div>
                                <div class="item">
                                        <img src="{{asset('template/img/clients-logo/c-logo-4.png')}}" alt="">
                                </div>
                                <div class="item">
                                        <img src="{{asset('template/img/clients-logo/c-logo-5.png')}}" alt="">
                                </div>
                        </div>
                </div>
        </section>
        <!--================End Clients Logo Area =================-->
        
 @section('footer')
  @include('site.footer')
@endsection