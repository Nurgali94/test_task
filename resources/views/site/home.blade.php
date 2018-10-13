@extends('layouts.site')
@section('header')
  @include('site.header')
@endsection
<!--================Home Banner Area =================-->
        <section class="home_banner_area" id="home">
            <div class="banner_inner">
				<div class="container">
					<div class="banner_content">
						<h2>Precise concept design <br />for stylish living</h2>
						<p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price. You may see some for as low as $.17 each.</p>
						<a class="banner_btn" href="#about_us">Get Started</a>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->

<!--================Design Area =================-->
        <section class="design_area p_120" id="about_us">
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
        					<a class="main_btn" href="{{route('about')}}">More About Us</a>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
        <!--================End Design Area =================-->
        
        <!--================Our Blog Area =================-->
        <section class="our_blog_area p_120">
        	<div class="container">
        		<div class="main_title">
        			<h2>Новости</h2>
        			
        		</div>
        		<div class="blog_inner row">
        			@if(isset($news) && is_object($news))
  						@foreach($news as $k=>$new)
        			<div class="col-lg-4">
        				<div class="o_blog_item">
        					<div class="blog_img">
        						<img class="img-fluid" width="360" height="240" src="{{asset('template/img/our-blog/'.$new->image)}}" alt="" style="height: 240px">
        					</div>
        					<div class="blog_text">
        						
        						<a href="#"><h4>{{$new->name}}</h4></a>
        						{!!$new->description!!}
        						<div class="blog_cat">
        							<a class="active" href="{{route('pages', array('id'=>$new->id))}}">Подробнее</a>
        						</div>
        						{{$new->created_at}}
        					</div>
        				</div>
        			</div>
        			 @endforeach
					@endif
        			
        		</div>
        	</div>
        </section>
        <!--================End Our Blog Area =================-->
@section('footer')
  @include('site.footer')
@endsection