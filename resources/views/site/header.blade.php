<!--================Header Menu Area =================-->
        <header class="header_area">
            <div class="main_menu" id="mainNav">
            	<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container box_1620">
						<!-- Brand and toggle get grouped for better mobile display -->
						<a class="navbar-brand logo_h" href="{{route('home')}}"><img src="{{asset('template/img/logo.png')}}" alt=""></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav ml-auto">
								<li class="nav-item active"><a class="nav-link" href="{{route('home')}}">Главная</a></li> 
								<li class="nav-item"><a class="nav-link" href="{{route('about')}}">О нас</a></li> 
								<li class="nav-item"><a class="nav-link" href="{{route('allPages')}}">Новости</a></li>
								<li class="nav-item"><a class="nav-link" href="{{route('contact')}}">Контакты</a></li>
							</ul>
						</div> 
					</div>
            	</nav>
            </div>
        </header>
        <!--================Header Menu Area =================-->