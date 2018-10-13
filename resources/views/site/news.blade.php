@extends('layouts.site')
@section('header')
  @include('site.header')
@endsection

         @if($news)
        <!--================Home Banner Area =================-->
        <section class="home_banner_area blog_banner">
            <div class="banner_inner d-flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="blog_b_text text-center">
						<h2>Все <br /> Новости</h2>
						
						<a class="white_bg_btn" href="#allnews">Посмотреть все</a>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        <!--================Blog Area =================-->
        <section class="blog_area" id="allnews">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog_left_sidebar">
                            <p id="demo"></p>
                        	<?php foreach ($news as $value): ?>
                            <article class="row blog_item">
                               <div class="col-md-3">
                                   <div class="blog_info text-right">
                                        
                                        <ul class="blog_meta list">
                                            
                                            <li><a href="#">{{$value->created_at}}<i class="lnr lnr-calendar-full"></i></a></li>
                                            <li><a href="#">6 Views<i class="lnr lnr-eye"></i></a></li>
                                            <li><a href="#">36 Comments<i class="lnr lnr-bubble"></i></a></li>
                                        </ul>
                                    </div>
                               </div>
                                <div class="col-md-9">
                                    <div class="blog_post">
                                        <img src="{{asset('template/img/our-blog/'.$value->image)}}" alt="">
                                        <div class="blog_details">
                                            <a href="{{route('pages', array('id'=>$value->id))}}"><h2>{{$value->name}}</h2></a>
                                            {!!$value->description!!}
                                            <a href="{{route('pages', array('id'=>$value->id))}}" class="blog_btn">Подробнее</a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <?php endforeach; ?>


                           {{$news->links()}}
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog_right_sidebar">
                            <aside class="single_sidebar_widget search_widget">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search Posts">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button"><i class="lnr lnr-magnifier"></i></button>
                                    </span>
                                </div><!-- /input-group -->
                                <div class="br"></div>
                            </aside>
                            <aside class="single_sidebar_widget post_category_widget">
                                <h4 class="widget_title">Сортировка по категориям</h4>
                                @if($cat)
                                <ul class="list cat-list">
                                    <?php foreach ($cat as $ct): ?>
                                    <li>
                                            <a href="{{route('test', array('req'=>$ct->id))}}" class="d-flex justify-content-between">
                                                <p>{{$ct->name}}</p>
                                                <p><?php
                                                    $k=0;
                                                    foreach ($for_n as $value) {
                                                        if($ct->id == $value->category_id)
                                                            $k++;    
                                                    }
                                                    echo $k;
                                                    ?>    
                                                </p>
                                            </a>
                                    </li>
                                    <?php endforeach; ?>										
                                </ul>
                                @endif
                                <div class="br"></div>
                            </aside>
                            <aside class="single-sidebar-widget newsletter_widget">
                                <h4 class="widget_title">Newsletter</h4>
                                <p>
                                Here, I focus on a range of items and features that we use in life without
                                giving them a second thought.
                                </p>
                                <div class="form-group d-flex flex-row">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Enter email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'">
                                    </div>
                                    <a href="#" class="bbtns">Subcribe</a>
                                </div>	
                                <p class="text-bottom">You can unsubscribe at any time</p>	
                                <div class="br"></div>							
                            </aside>
                            <aside class="single-sidebar-widget tag_cloud_widget">
                                <h4 class="widget_title">Tag Clouds</h4>
                                <ul class="list">
                                    <li><a href="#">Technology</a></li>
                                    <li><a href="#">Fashion</a></li>
                                    <li><a href="#">Architecture</a></li>
                                    <li><a href="#">Fashion</a></li>
                                    <li><a href="#">Food</a></li>
                                    <li><a href="#">Technology</a></li>
                                    <li><a href="#">Lifestyle</a></li>
                                    <li><a href="#">Art</a></li>
                                    <li><a href="#">Adventure</a></li>
                                    <li><a href="#">Food</a></li>
                                    <li><a href="#">Lifestyle</a></li>
                                    <li><a href="#">Adventure</a></li>
                                </ul>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================Blog Area =================-->
@endif

 @section('footer')
  @include('site.footer')
@endsection