<!DOCTYPE html>
@if (App::isLocale('ru'))
	<html lang="ru">
@elseif (App::isLocale('uk'))
	<html lang="uk">
@endif

<head>
	<meta charset="utf-8">
	<title>{{ trans('main.title') }}</title>
	<meta name="description" content="{{ trans('main.description') }}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!--
	<meta property="og:title" content="">
	<meta property="og:description" content="">
	<meta property="og:type" content="website">
	<meta property="og:url" content="">
	<meta property="og:image" content=""/>
	-->
	<link rel="icon" href="/img/favicon/favicon.ico">
	<meta name="theme-color" content="#00C24B">

	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-WZZG5B6');</script>
	<!-- End Google Tag Manager -->
</head>

<body>

	<div id="top"></div>

	<div class="content">
		<nav class="nav">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-2 col-6">
						<a href="#top">
							<img src="/img/logo.png" alt="skoda" class="nav-logo">
						</a>
					</div>
					<div class="col-lg-7 d-none d-lg-block">
						<ul class="nav-list">
							<li class="nav-list__item"><a href="#services" class="anchor">{{ trans('main.menu1') }}</a></li>
							<li class="nav-list__item"><a href="#sale" class="anchor">{{ trans('main.menu2') }}</a></li>
							<li class="nav-list__item"><a href="#diagnostics" class="anchor">{{ trans('main.menu3') }}</a></li>
							<li class="nav-list__item"><a href="#washing" class="anchor">{{ trans('main.menu4') }}</a></li>
							<li class="nav-list__item"><a href="#about" class="anchor">{{ trans('main.menu5') }}</a></li>
							<li class="nav-list__item"><a href="#contacts" class="anchor">{{ trans('main.menu6') }}</a></li>
						</ul>
					</div>
					<div class="col-lg-3 d-none d-lg-block">
						<a href="tel:+380674000176" class="nav-phone">+38(067) 400 01 76</a>
						<div class="nav-lang">
							@if (App::isLocale('ru'))
								<span>Рус</span>
								<a href="/" class="nav-lang__select">Укр</a>
							@elseif (App::isLocale('uk'))
								<span>Укр</span>
								<a href="/ru" class="nav-lang__select">Рус</a>
							@endif
						</div>
					</div>
					<div class="col-6 d-block d-lg-none">
						<div class="mob-menu__link">
							<img src="/img/menu.svg" alt="skoda" width="34" height="34">
						</div>
					</div>
				</div>
			</div>
			<div class="mob-menu d-block d-lg-none">
				<div class="container">
					<div class="row">
						<div class="col">
							<ul class="nav-list">
								<li class="nav-list__item"><a href="#services" class="anchor">{{ trans('main.menu1') }}</a></li>
								<li class="nav-list__item"><a href="#sale" class="anchor">{{ trans('main.menu2') }}</a></li>
								<li class="nav-list__item"><a href="#diagnostics" class="anchor">{{ trans('main.menu3') }}</a></li>
								<li class="nav-list__item"><a href="#washing" class="anchor">{{ trans('main.menu4') }}</a></li>
								<li class="nav-list__item"><a href="#about" class="anchor">{{ trans('main.menu5') }}</a></li>
								<li class="nav-list__item"><a href="#contacts" class="anchor">{{ trans('main.menu6') }}</a></li>
							</ul>
							<a href="tel:+380674000176" class="nav-phone">+38(067) 400 01 76</a>
							<div class="nav-lang">
								@if (App::isLocale('ru'))
									<span>Рус</span>
									<a href="/" class="nav-lang__select">Укр</a>
								@elseif (App::isLocale('uk'))
									<span>Укр</span>
									<a href="/ru" class="nav-lang__select">Рус</a>
								@endif
							</div>
						</div>
					</div>
				</div>
			</div>
		</nav>

		<header class="head">
			<div class="head-slider">
				@foreach($titles as $item)
					<div class="head-slider__slide">
						<div class="head-bg" style="background-image: url(/{{ $item['image'] }});"></div>
						<div class="head-flex">
							<div class="head-flex__content container">
								<div class="row align-items-center">
									<div class="col-lg-8 col-md-7">
										<div class="head-title">
											<div class="head-title__top"></div>
											<h1 class="head-title__ttl">
												@if (App::isLocale('ru'))
													{!! $item['title'] !!}
												@elseif (App::isLocale('uk'))
													{!! $item['titleUkr'] !!}
												@endif
											</h1>
											<p class="head-title__txt">
												@if (App::isLocale('ru'))
													{!! $item['text'] !!}
												@elseif (App::isLocale('uk'))
													{!! $item['textUkr'] !!}
												@endif
											</p>
											<div class="head-title__bottom"></div>
										</div>
									</div>
									<div class="col-lg-4 col-md-5">
										<form action="mail.php" class="form_check head-form" autocomplete="flase">
											<input type="hidden" name="title" value="Рассчитать стоимость ремонта">
											<h3 class="head-form__ttl">{{ trans('main.mainFormTtl') }}</h3>
											<div class="rline">
												<input type="text" name="work" class="head-form__input" placeholder="{{ trans('main.mainFormInput1') }}">
											</div>
											<div class="rline">
												<input type="text" name="parts" class="head-form__input" placeholder="{{ trans('main.mainFormInput2') }}">
											</div>
											<div class="rline">
												<input type="text" name="name" class="head-form__input" placeholder="{{ trans('main.mainFormInput3') }}">
											</div>
											<div class="rline">
												<input type="text" name="phone" class="rfield phonefield head-form__input" placeholder="{{ trans('main.mainFormInput4') }}">
											</div>
											<button type="submit" class="btnsubmit head-form__btn">{{ trans('main.mainFormBtn') }}</button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				@endforeach
			</div>
			<div class="head-control">
				
			</div>
		</header>

		<section class="advantages">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-3">
						<h3 class="advantages__ttl">{{ trans('main.advantagesTtl') }}</h3>
					</div>
					<div class="col-lg-9">
						<div class="advantages-item advantages-item_black">
							<div class="advantages-item__numb">1</div>
							<div class="advantages-item__ico advantages-item__ico_i1"></div>
							<p class="advantages-item__txt">{!! trans('main.advantagesItem1') !!}</p>
						</div>
						<div class="advantages-item advantages-item_grey">
							<div class="advantages-item__numb">2</div>
							<div class="advantages-item__ico advantages-item__ico_i2"></div>
							<p class="advantages-item__txt">{!! trans('main.advantagesItem2') !!}</p>
						</div>
						<div class="advantages-item advantages-item_black">
							<div class="advantages-item__numb">3</div>
							<div class="advantages-item__ico advantages-item__ico_i3"></div>
							<p class="advantages-item__txt">{!! trans('main.advantagesItem3') !!}</p>
						</div>
						<div class="advantages-item advantages-item_grey">
							<div class="advantages-item__numb">4</div>
							<div class="advantages-item__ico advantages-item__ico_i4"></div>
							<p class="advantages-item__txt">{!! trans('main.advantagesItem4') !!}</p>
						</div>
					</div>
					<div class="col">
						<div class="advantages-item advantages-item_black">
							<div class="advantages-item__numb">5</div>
							<div class="advantages-item__ico advantages-item__ico_i5"></div>
							<p class="advantages-item__txt">{!! trans('main.advantagesItem5') !!}</p>
						</div>
						<div class="advantages-item advantages-item_grey">
							<div class="advantages-item__numb">6</div>
							<div class="advantages-item__ico advantages-item__ico_i6"></div>
							<p class="advantages-item__txt">{!! trans('main.advantagesItem6') !!}</p>
						</div>
						<div class="advantages-item advantages-item_black">
							<div class="advantages-item__numb">7</div>
							<div class="advantages-item__ico advantages-item__ico_i7"></div>
							<p class="advantages-item__txt">{!! trans('main.advantagesItem7') !!}</p>
						</div>
						<div class="advantages-item advantages-item_grey">
							<div class="advantages-item__numb">8</div>
							<div class="advantages-item__ico advantages-item__ico_i8"></div>
							<p class="advantages-item__txt">{!! trans('main.advantagesItem8') !!}</p>
						</div>
						<div class="clearfix d-block d-lg-none"></div>
						<div class="advantages-item advantages-item_black last">
							<div class="advantages-item__numb">9</div>
							<div class="advantages-item__ico advantages-item__ico_i9"></div>
							<p class="advantages-item__txt">{!! trans('main.advantagesItem9') !!}</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="services" id="services">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-xs-auto">
						<h3 class="services__ttl">{{ trans('main.serviceTtl') }}</h3>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 col-sm-6">
						<div class="services-item services-item_i1">
							<h4 class="services-item__ttl">{!! trans('main.serviceItem1') !!}</h4>
						</div>
						<a href="#service-modal" class="services-item__btn fancybox">{{ trans('main.serviceBtn') }}</a>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="services-item services-item_i2">
							<h4 class="services-item__ttl">{!! trans('main.serviceItem2') !!}</h4>
						</div>
						<a href="#service-modal" class="services-item__btn fancybox">{{ trans('main.serviceBtn') }}</a>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="services-item services-item_i3">
							<h4 class="services-item__ttl">{!! trans('main.serviceItem3') !!}</h4>
						</div>
						<a href="#service-modal" class="services-item__btn fancybox">{{ trans('main.serviceBtn') }}</a>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="services-item services-item_i4">
							<h4 class="services-item__ttl">{!! trans('main.serviceItem4') !!}</h4>
						</div>
						<a href="#service-modal" class="services-item__btn fancybox">{{ trans('main.serviceBtn') }}</a>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="services-item services-item_i5">
							<h4 class="services-item__ttl">{!! trans('main.serviceItem5') !!}</h4>
						</div>
						<a href="#service-modal" class="services-item__btn fancybox">{{ trans('main.serviceBtn') }}</a>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="services-item services-item_i6">
							<h4 class="services-item__ttl">{!! trans('main.serviceItem6') !!}</h4>
						</div>
						<a href="#service-modal" class="services-item__btn fancybox">{{ trans('main.serviceBtn') }}</a>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="services-item services-item_i7">
							<h4 class="services-item__ttl">{!! trans('main.serviceItem7') !!}</h4>
						</div>
						<a href="#service-modal" class="services-item__btn fancybox">{{ trans('main.serviceBtn') }}</a>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="services-item services-item_i8">
							<h4 class="services-item__ttl">{!! trans('main.serviceItem8') !!}</h4>
						</div>
						<a href="#service-modal" class="services-item__btn fancybox">{{ trans('main.serviceBtn') }}</a>
					</div>
				</div>
			</div>
		</section>

		<section class="about" id="about">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6 offset-lg-1 col-md-6">
						<h3 class="about__ttl">{{ trans('main.aboutTtl') }}</h3>
						<p class="about__subttl">{{ trans('main.aboutSubttl') }}</p>
					</div>
					<div class="col-lg-5 col-md-6">
						<img src="/img/about_pattern.svg" alt="skoda" class="img-r">
					</div>
				</div>
				<div class="row">
					<div class="col-lg-5 col-md-6">
						<p class="about__txt">{!! trans('main.aboutTxt1') !!}</p>
						<p class="about__txt">{!! trans('main.aboutTxt2') !!}</p>
						<p class="about__txt last">{!! trans('main.aboutTxt3') !!}</p>
						<a href="#about-modal" class="about__btn fancybox">{{ trans('main.aboutBtn') }}</a>
					</div>
					<div class="col-lg-7 col-md-6">
						<img src="/img/about_video.jpg" alt="skoda" class="img-r">
					</div>
				</div>
				<div class="row">
					<div class="col">
						<div class="about-slider">
							@foreach($galleries['images'] as $item)
								<a href="/{{ $item }}" class="about-slider__slide fancybox" data-fancybox="gallery" style="background-image: url({{ '/images/uploads/small/'.basename($item) }})"></a>
							@endforeach
							<!-- <img src="/img/about_slide1.jpg" alt="skoda" class="img-r">
							<img src="/img/about_slide2.jpg" alt="skoda" class="img-r">
							<img src="/img/about_slide3.jpg" alt="skoda" class="img-r">
							<img src="/img/about_slide4.jpg" alt="skoda" class="img-r"> -->
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="diagnostics" id="diagnostics">
			<div class="container">
				<img src="/img/diagnostics_img.png" alt="skoda" class="diagnostics__img img-r">
				<div class="row align-items-center">
					<div class="col-md-4 offset-1 col-sm-7 col-10">
						<h3 class="diagnostics__ttl">{!! trans('main.diagnosticTtl') !!}</h3>
						<p class="diagnostics__txt">{{ trans('main.diagnosticTxt') }}</p>
					</div>
					<div class="col-md-5 offset-1 offset-md-0 col-10">
						<form action="mail.php" class="diagnostics-form form_check" autocomplete="flase">
							<input type="hidden" name="title" value="Записаться на диагностику">
							<div class="rline first">
								<input type="text" name="name" class="diagnostics-form__input" placeholder="{{ trans('main.diagnosticFormInput1') }}">
							</div>
							<div class="rline">
								<input type="text" name="phone" class="rfield phonefield diagnostics-form__input" placeholder="{{ trans('main.diagnosticFormInput2') }}">
							</div>
							<div class="rline">
								<input type="text" name="date" class="diagnostics-form__input" placeholder="{{ trans('main.diagnosticFormInput3') }}">
							</div>
							<button type="submit" class="btnsubmit diagnostics-form__btn">{{ trans('main.diagnosticFormBtn') }}</button>
						</form>
					</div>
				</div>
			</div>
		</section>

		<section class="sale" id="sale">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-6 offset-md-1">
						<img src="/img/sale_img2.png" alt="skoda" class="sale__img img-r">
						<h3 class="sale__ttl">{{ trans('main.saleTtl') }}</h3>
						<p class="sale__txt">{!! trans('main.saleTxt1') !!}</p>
						<p class="sale__txt">{!! trans('main.saleTxt2') !!}</p>
						<img src="/img/sale_img.png" alt="skoda" class="sale__bg">
					</div>
					<div class="col-md-5">
						<form action="mail.php" class="sale-form form_check" autocomplete="flase">
							<input type="hidden" name="title" value="Получить консультацию и точную стоимость запчастей">
							<h4 class="sale-form__ttl">{!! trans('main.saleFormTtl') !!}</h4>
							<div class="rline">
								<input type="text" name="name" class="sale-form__input" placeholder="{{ trans('main.saleFormInput1') }}">
							</div>
							<div class="rline">
								<input type="text" name="phone" class="rfield phonefield sale-form__input" placeholder="{{ trans('main.saleFormInput2') }}">
							</div>
							<div class="rline">
								<input type="text" name="part" class="sale-form__input" placeholder="{{ trans('main.saleFormInput3') }}">
							</div>
							<button type="submit" class="btnsubmit sale-form__btn">{{ trans('main.saleFormBtn') }}</button>
						</form>
					</div>
				</div>
			</div>
		</section>

		<section class="business">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-xl-9 col-lg-10">
						<h3 class="business__ttl">{{ trans('main.businessTtl') }}</h3>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-5 col-sm-6">
						<div class="business-item business-item_i1">
							<h4 class="business-item__ttl">{!! trans('main.businessItem1') !!}</h4>
						</div>
					</div>
					<div class="col-lg-5 col-sm-6">
						<div class="business-item business-item_i2">
							<h4 class="business-item__ttl">{!! trans('main.businessItem2') !!}</h4>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-5 offset-lg-2 col-sm-6">
						<div class="business-item business-item_i3">
							<h4 class="business-item__ttl business-item__ttl_right">{!! trans('main.businessItem3') !!}</h4>
						</div>
					</div>
					<div class="col-lg-5 col-sm-6">
						<div class="business-item business-item_i4">
							<h4 class="business-item__ttl business-item__ttl_right">{!! trans('main.businessItem4') !!}</h4>
						</div>
					</div>
				</div>
				<div class="row">
					<img src="/img/business_pattern.svg" alt="skoda" class="business__img">
					<div class="col-lg-5 offset-lg-7">
						<a href="#business-modal" class="business__btn fancybox">{{ trans('main.businessBtn') }}</a>
					</div>
				</div>
			</div>
		</section>
		
		<section class="washing" id="washing">
			<div class="container">
				<div class="row">
					<div class="col-xl-7 col-lg-8 col-md-8">
						<div class="washing-block">
							<img src="/img/washing_img.svg" alt="skoda" class="washing-block__img">
							<h3 class="washing-block__ttl">{{ trans('main.washTtl') }}</h3>
							<p class="washing-block__txt">{{ trans('main.washTxt1') }}</p>
							<p class="washing-block__txt">{{ trans('main.washTxt2') }}</p>
						</div>
					</div>
				</div>
				<img src="/img/washing_bg.jpg" alt="skoda" class="washing__bg">
			</div>
		</section>

		<section class="equipment">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-5 d-none d-md-block">
						<img src="/img/equipment1.jpg" alt="skoda" class="equipment__img img-r">
					</div>
					<div class="col-md-4">
						<h3 class="equipment__ttl">{{ trans('main.equipTtl') }}</h3>
						<p class="equipment__txt">{{ trans('main.equipTxt') }}</p>
					</div>
					<div class="col-md-3 d-none d-md-block">
						<img src="/img/equipment2.png" alt="skoda" class="equipment__img img-r">
					</div>
				</div>
				<div class="row align-items-center">
					<div class="col-md-4 d-none d-md-block">
						<img src="/img/equipment3.jpg" alt="skoda" class="equipment__img img-r">
					</div>
					<div class="col-md-2 col-sm-6">
						<div class="equipment-item equipment-item_black">
							<div class="equipment-item__numb">1</div>
							<div class="equipment-item__ico equipment-item__ico_i1"></div>
							<p class="equipment-item__txt">{{ trans('main.equipItem1') }}</p>
						</div>
					</div>
					<div class="col-md-2 col-sm-6">
						<div class="equipment-item equipment-item_grey">
							<div class="equipment-item__numb">2</div>
							<div class="equipment-item__ico equipment-item__ico_i2"></div>
							<p class="equipment-item__txt">{{ trans('main.equipItem2') }}</p>
						</div>
					</div>
					<div class="col-md-2 col-sm-6">
						<div class="equipment-item equipment-item_black">
							<div class="equipment-item__numb">3</div>
							<div class="equipment-item__ico equipment-item__ico_i3"></div>
							<p class="equipment-item__txt">{{ trans('main.equipItem3') }}</p>
						</div>
					</div>
					<div class="col-md-2 col-sm-6">
						<div class="equipment-item equipment-item_grey">
							<div class="equipment-item__numb">4</div>
							<div class="equipment-item__ico equipment-item__ico_i4"></div>
							<p class="equipment-item__txt">{{ trans('main.equipItem4') }}</p>
						</div>
					</div>
				</div>
				<div class="row align-items-center">
					<div class="col-md-2 offset-md-1 col-sm-6">
						<div class="equipment-item equipment-item_black">
							<div class="equipment-item__numb">5</div>
							<div class="equipment-item__ico equipment-item__ico_i5"></div>
							<p class="equipment-item__txt">{{ trans('main.equipItem5') }}</p>
						</div>
					</div>
					<div class="col-md-2 col-sm-6">
						<div class="equipment-item equipment-item_grey">
							<div class="equipment-item__numb">6</div>
							<div class="equipment-item__ico equipment-item__ico_i6"></div>
							<p class="equipment-item__txt">{{ trans('main.equipItem6') }}</p>
						</div>
					</div>
					<div class="col-md-2 col-sm-6">
						<div class="equipment-item equipment-item_black">
							<div class="equipment-item__numb">7</div>
							<div class="equipment-item__ico equipment-item__ico_i3"></div>
							<p class="equipment-item__txt">{{ trans('main.equipItem7') }}</p>
						</div>
					</div>
					<div class="col-md-2 col-sm-6">
						<div class="equipment-item equipment-item_grey">
							<div class="equipment-item__numb">8</div>
							<div class="equipment-item__ico equipment-item__ico_i8"></div>
							<p class="equipment-item__txt">{{ trans('main.equipItem8') }}</p>
						</div>
					</div>
					<div class="col-md-3">
						<a href="#service-modal" class="equipment__btn fancybox">{{ trans('main.equipBtn') }}</a>
					</div>
				</div>
			</div>
		</section>

		<section class="works">
			<div class="container">
				<div class="row">
					<div class="col offset-md-1">
						<h3 class="works__ttl">{{ trans('main.caseTtl') }}</h3>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<div class="works-slider">
							@foreach($portfolios as $item)
								<div class="works-slider__slide">
									<div class="works-item">
										<div class="works-item__numb">{{ $item['numb'] }}</div>
										<img src="/{{ $item['image'] }}" alt="skoda" class="works-item__img img-r">
										<p class="works-item__txt">
											@if (App::isLocale('ru'))
												{{ $item['text'] }}
											@elseif (App::isLocale('uk'))
												{{ $item['textUkr'] }}
											@endif
										</p>
									</div>
								</div>
							@endforeach
						</div>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-auto">
						<div class="works-control"></div>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-auto">
						<img src="/img/works_pattern.svg" alt="skoda" class="img-r">
					</div>
				</div>
			</div>
		</section>

		<section class="clients">
			<div class="container">
				<div class="row">
					<div class="col-md-11">
						<div class="clients-block">
							<h3 class="clients__ttl">{{ trans('main.clientTtl') }}</h3>
							<img src="/img/clients_bg.jpg" alt="skoda" class="clients-block__img img-r">
							<div class="clients-item d-none d-sm-block">
								<img src="/img/logo1.png" alt="skoda" class="clients-item__img">
								<img src="/img/logo2.png" alt="skoda" class="clients-item__img">
								<img src="/img/logo3.png" alt="skoda" class="clients-item__img">
								<img src="/img/logo4.png" alt="skoda" class="clients-item__img">
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col d-none d-sm-block">
						@foreach($clients['images'] as $item)
							<img src="{{ $item }}" alt="skoda" class="clients__logo">
						@endforeach
					</div>
					<div class="col d-block d-sm-none">
						<div class="clients-slider">
							@foreach($clients['images'] as $item)
								<div><img src="/{{ $item }}" alt="skoda" class="clients__logo"></div>
							@endforeach
							<div><img src="/img/logo1.png" alt="skoda" class="clients__logo"></div>
							<div><img src="/img/logo2.png" alt="skoda" class="clients__logo"></div>
							<div><img src="/img/logo3.png" alt="skoda" class="clients__logo"></div>
							<div><img src="/img/logo4.png" alt="skoda" class="clients__logo"></div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="reviews">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-7">
						<h3 class="reviews__ttl">{{ trans('main.reviewTtl') }}</h3>
					</div>
					<div class="col-md-5">
						<img src="/img/reviews_pattern.svg" alt="skoda" class="reviews__img img-r">
					</div>
				</div>
				<div class="row">
					<div class="col">
						<div class="reviews-slider">
							@foreach($reviews as $item)
								@if($loop->iteration % 2 == 0)
									<div class="reviews-slider__slide mt100">
										<div class="reviews-item reviews-item_grey">
											<div class="reviews-item__name">{{ $item['name'] }}</div>
											<div class="reviews-item__txt">
												<span>{!! $item['text'] !!}</span>
												<a href="#review{{ $item['id'] }}" class="read_more fancybox">{{ trans('main.more') }}</a>
											</div>
										</div>
										<div class="d-none">
											<div id="review{{ $item['id'] }}" class="modal-review">
												<h3 class="modal-review__name">{{ $item['name'] }}</h3>
												<div class="modal-review__txt">{!! $item['text'] !!}</div>
											</div>
										</div>
									</div>
								@else
									<div class="reviews-slider__slide mt100">
										<div class="reviews-item reviews-item_black">
											<div class="reviews-item__name">{{ $item['name'] }}</div>
											<div class="reviews-item__txt">
												<span>{!! $item['text'] !!}</span>
												<a href="#review{{ $item['id'] }}" class="read_more fancybox">{{ trans('main.more') }}</a>
											</div>
										</div>
										<div class="d-none">
											<div id="review{{ $item['id'] }}" class="modal-review">
												<h3 class="modal-review__name">{{ $item['name'] }}</h3>
												<div class="modal-review__txt">{!! $item['text'] !!}</div>
											</div>
										</div>
									</div>
								@endif
							@endforeach
						</div>
						<div class="reviews-control"></div>
					</div>
				</div>
			</div>
		</section>

		<section class="contacts" id="contacts">
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<h3 class="contacts__ttl">{{ trans('main.contactTtl') }}</h3>
						<p class="contacts__txt">{{ trans('main.contactTxt') }}</p>
						<a href="#privat-modal" class="contacts-item privat fancybox">
							<span>{{ trans('main.contactLink1') }}</span>
						</a>
						<a href="#discont-modal" class="contacts-item discont fancybox">
							{{ trans('main.contactLink2') }}
						</a>
					</div>
					<div class="col-md-2 col-sm-4">
						<h4 class="contacts__subttl">{{ trans('main.contactTime') }}</h4>
						<p class="contacts__time">
							@if (App::isLocale('ru'))
								{!! $contacts['timetable'] !!}
							@elseif (App::isLocale('uk'))
								{!! $contacts['timetableUkr'] !!}
							@endif
						</p>
						<h4 class="contacts__subttl">{{ trans('main.contactPhone') }}</h4>
						@if (isset($contacts['phone1']))
							<a href="tel:+38{{ preg_replace('~[^0-9]~','',$contacts['phone1']) }}" class="contacts__phone">{{ $contacts['phone1'] }}</a> 
						@endif
						@if (isset($contacts['phone2']))
							<a href="tel:+38{{ preg_replace('~[^0-9]~','',$contacts['phone2']) }}" class="contacts__phone">{{ $contacts['phone2'] }}</a> 
						@endif
						@if (isset($contacts['phone3']))
							<a href="tel:+38{{ preg_replace('~[^0-9]~','',$contacts['phone3']) }}" class="contacts__phone">{{ $contacts['phone3'] }}</a> 
						@endif
						@if (isset($contacts['phone4']))
							<a href="tel:+38{{ preg_replace('~[^0-9]~','',$contacts['phone4']) }}" class="contacts__phone">{{ $contacts['phone4'] }}</a> 
						@endif
						@if (isset($contacts['fax']))
							<a href="tel:+38{{ preg_replace('~[^0-9]~','',$contacts['fax']) }}" class="contacts__phone last">{{ $contacts['fax'] }} факс</a> 
						@endif
						<h4 class="contacts__subttl">{{ trans('main.contactAddr') }}</h4>
						<p class="contacts__addr">
							@if (App::isLocale('ru'))
								{!! $contacts['addr'] !!}
							@elseif (App::isLocale('uk'))
								{!! $contacts['addrUkr'] !!}
							@endif
						</p>
						<div class="contacts-soc">
							@if (isset($contacts['facebook']))
								<a href="{{ $contacts['facebook'] }}" target="_blank" class="contacts-soc__link">
									<img src="/img/facebook.svg" alt="skoda">
								</a>
							@endif
							@if (isset($contacts['instagram']))
								<a href="{{ $contacts['instagram'] }}" target="_blank" class="contacts-soc__link">
									<img src="/img/instagram.svg" alt="skoda">
								</a>
							@endif
							@if (isset($contacts['youtube']))
								<a href="{{ $contacts['youtube'] }}" target="_blank" class="contacts-soc__link">
									<img src="/img/yotube.svg" alt="skoda">
								</a>
							@endif
						</div>
					</div>
					<div class="col-md-5 col-sm-8">
						<div id="map" class="map"></div>
					</div>
				</div>
				<div class="row align-items-center mt40">
					<div class="col-sm-6">
						<img src="/img/logo.png" alt="skoda" class="contacts__logo">
					</div>
					<div class="col-sm-6">
						<a href="https://wamp.com.ua/" target="_blank" class="dev">
							<span>{{ trans('main.dev') }}</span>
							<img src="/img/dev-logo.png" alt="wamp">
						</a>
					</div>
				</div>
			</div>
		</section>
	</div>

	<div class="d-none">

		<div id="thn" class="thn">
			<h3>{{ trans('main.thnTtl') }}</h3>
			<p>{{ trans('main.thnTxt') }}</p>
		</div>

		<div id="about-modal" class="modal-about">
			<div class="modal-about__img">
				<img src="/img/modal_about.jpg" alt="skoda" class="img-r">
			</div>
			<form action="mail.php" class="modal-about-form form_check" autocomplete="flase">
				<input type="hidden" name="title" value="Получить консультацию">
				<h3 class="modal-about-form__ttl">{{ trans('main.aboutModalTtl') }}</h3>
				<div class="rline">
					<input type="text" name="name" class="modal-about-form__input" placeholder="{{ trans('main.modalInput1') }}">
				</div>
				<div class="rline">
					<input type="text" name="phone" class="rfield phonefield modal-about-form__input" placeholder="{{ trans('main.modalInput2') }}">
				</div>
				<button type="submit" class="btnsubmit modal-about-form__btn">{{ trans('main.aboutModalBtn') }}</button>
			</form>
		</div>

		<div id="business-modal" class="modal-business">
			<div class="row align-items-center">
				<div class="col-md-8">
					<div class="modal-business__img">
						<img src="/img/business_about.jpg" alt="skoda" class="img-r">
					</div>
				</div>
				<div class="col-md-4">
					<form action="mail.php" class="modal-business-form form_check" autocomplete="flase">
						<input type="hidden" name="title" value="Получения корпоративных бонусов">
						<h3 class="modal-business-form__ttl">{{ trans('main.businessModalTtl') }}</h3>
						<p class="modal-business-form__txt">{{ trans('main.businessModalTxt') }}</p>
						<div class="rline">
							<input type="text" name="name" class="modal-business-form__input" placeholder="{{ trans('main.modalInput1') }}">
						</div>
						<div class="rline">
							<input type="text" name="phone" class="rfield phonefield modal-business-form__input" placeholder="{{ trans('main.modalInput2') }}">
						</div>
						<button type="submit" class="btnsubmit modal-business-form__btn">{{ trans('main.businessModalBtn') }}</button>
					</form>
				</div>
			</div>
		</div>

		<div id="service-modal" class="modal-service">
			<div class="row align-items-center">
				<div class="col-md-8">
					<h3 class="modal-service__ttl">{{ trans('main.modalServiceTtl') }}</h3>
					<ul class="modal-service-list">
						{!! trans('main.modalServiceList') !!}
					</ul>
					<form action="mail.php" class="modal-service-form form_check" autocomplete="flase">
						<input type="hidden" name="title" value="Получения корпоративных бонусов">
						<div class="rline">
							<select name="service" class="modal-service-form__input">
								{!! trans('main.modalServiceOptions') !!}
							</select>
						</div>
						<div class="rline">
							<input type="text" name="name" class="modal-service-form__input" placeholder="{{ trans('main.modalInput1') }}">
						</div>
						<div class="rline">
							<input type="text" name="phone" class="rfield phonefield modal-service-form__input" placeholder="{{ trans('main.modalInput2') }}">
						</div>
						<button type="submit" class="btnsubmit modal-service-form__btn">{{ trans('main.modalServiceBtn') }}</button>
					</form>
					
				</div>
				<div class="col-md-4">
					<div class="modal-service__img">
						<img src="/img/services_about.jpg" alt="skoda" class="img-r">
					</div>
				</div>
			</div>
		</div>

		<div id="privat-modal" class="modal-info">
			@if (App::isLocale('ru'))
				{!! $privat['text'] !!}
			@elseif (App::isLocale('uk'))
				{!! $privat['textUkr'] !!}
			@endif
		</div>

		<div id="discont-modal" class="modal-info">
			@if (App::isLocale('ru'))
				{!! $discont['text'] !!}
			@elseif (App::isLocale('uk'))
				{!! $discont['textUkr'] !!}
			@endif
		</div>
	</div>


	<link rel="stylesheet" href="/css/main.min.css">
	<script src="/js/scripts.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDcKXBKsIMkew7SppGI1p-MKSBteq60bBY"></script>
	<script>
		google.maps.event.addDomListener(window, 'load', init);
		function init() {
			var mapOptions = {
				zoom: 14,
				scrollwheel: true,
				scaleControl: false,
				draggable: true,
				streetViewControl: false,
				mapTypeControl: false,
				center: new google.maps.LatLng({{ $contacts['longitude'] }},{{ $contacts['latitude'] }})
			};
			var mapElement = document.getElementById('map');
			var map = new google.maps.Map(mapElement, mapOptions);
			var marker = new google.maps.Marker({
				position: new google.maps.LatLng({{ $contacts['longitude'] }},{{ $contacts['latitude'] }}),
				map: map,
			});
		}
	</script>

</body>
</html>