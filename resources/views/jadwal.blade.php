<!DOCTYPE html>
<html  >

<!-- Projek Website ini masih belum Sempurna
Semoga kedepannya dikembangkan lebih menarik lagi
*** "TIM KP UPT Virtual Expo ITK 2018" *** -->

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v5.4.1, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/itk-rounded.png" type="image/x-icon">
  <meta name="description" content="Jadwal Webminar">


  <title>V.E ITK | JADWAL</title>
  <link rel="stylesheet" href="{{ asset('assets/web/assets/mobirise-icons2/mobirise2.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }} ">
  <link rel="stylesheet" href=" {{ asset('assets/bootstrap/css/bootstrap-grid.min.css') }} ">
  <link rel="stylesheet" href=" {{ asset('assets/bootstrap/css/bootstrap-reboot.min.css') }} ">
  <link rel="stylesheet" href="{{ asset('assets/dropdown/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/socicon/css/styles.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/theme/css/style.css') }}">
  <link rel="preload" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"></noscript>
  <link rel="preload" as="style" href="{{ asset('assets/mobirise/css/mbr-additional.css') }}"><link rel="stylesheet" href="{{ asset('assets/mobirise/css/mbr-additional.css') }}" type="text/css">




</head>
<body>

  <section data-bs-version="5.1" class="menu cid-sIXGJOQQnD" once="menu" id="menu1-22">

    <nav class="navbar navbar-dropdown navbar-fixed-top collapsed">
        <nav class="navbar navbar-dropdown navbar-fixed-top collapsed">
            @include('Layout.navbar')
        </nav>
    </nav>

</section>

<section data-bs-version="5.1" class="header13 cid-sIXHaDUi4m mbr-fullscreen" id="header13-24">





    <div class="align-center container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <h1 class="mbr-section-title mbr-fonts-style mb-3 display-1"><strong>JADWAL</strong></h1>
                {{-- <form action="{{ $link->link }}" target="_blank"> --}}
                    <a class='btn badge bg-danger' href=''>Enter room</a>
                </form>
                <table class="table table-striped table-primary table-borderless">
                    <thead>
                      <tr>
                        <th scope="col">No.</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                      </tr>
                    </thead>
                @foreach ($event as $acara)
                <tbody>
                    <tr>
                      <th scope="row">{{ $loop -> iteration}}</th>
                      <td>{{ $acara["event"] }}</td>
                      <td>{{ $acara["jam"] }}</td>
                    </tr>
                  </tbody>
                @endforeach
                </table>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="footer3 cid-sIXGJQuggQ" once="footers" id="footer3-23">





    <div class="container">
		<p class="mbr-text mb-0 mbr-fonts-style mbr-white align-left display-7">
            📍 Jl. Soekarno-Hatta Km. 15, Karang Joang, Balikpapan,<br> Kalimantan Timur, 76127<br>
			📞 0542-8530800<br>
			📞 08115390801</p>
        <div class="media-container-row align-center mbr-white">

            <div class="row social-row">
                <div class="social-list align-right pb-2">






						<div class="soc-item">
							<a href="https://twitter.com/itk_official_" target="_blank">
								<span class="mbr-iconfont mbr-iconfont-social socicon-twitter socicon"></span>
							</a>
						</div>

						<div class="soc-item">
							<a href="https://www.facebook.com/Institut-Teknologi-Kalimantan-1269749206375911" target="_blank">
								<span class="mbr-iconfont mbr-iconfont-social socicon-facebook socicon" style="color: rgb(255, 255, 255); fill: rgb(255, 255, 255);"></span>
							</a>
						</div>

						<div class="soc-item">
							<a href="https://www.youtube.com/channel/UCViEeXYt6zxQ7nd1xqw6ZpQ/featured" target="_blank">
								<span class="mbr-iconfont mbr-iconfont-social socicon-youtube socicon"></span>
							</a>
						</div>

						<div class="soc-item">
							<a href="https://www.instagram.com/itk_official/" target="_blank">
								<span class="mbr-iconfont mbr-iconfont-social socicon-instagram socicon"></span>
							</a>
						</div>

						<div class="soc-item">
							<a href="https://www.tiktok.com/@itk_official?lang=id-ID" target="_blank">
								<span class="mbr-iconfont mbr-iconfont-social socicon-tiktok socicon"></span>
							</a>
						</div>

				</div>
            </div>
            <div class="row row-copirayt">
                <p class="mbr-text mb-0 mbr-fonts-style mbr-white align-center display-7">
                    © Copyright 2021 V.E. ITK. <br>All Rights Reserved.
                </p>
            </div>
        </div>
    </div>

<section style="background-color: #003454; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Helvetica Neue', Arial, sans-serif; color:#aaa; font-size:12px; padding: 0; align-items: center; display: flex;">
	<a href="https://mobirise.site/z" style="flex: 1 1; height: 3rem; padding-left: 1rem;"></a>
</section>
<script src="{{ asset('assets/bootstrap/js/bootstrap.bundle.min.js') }}" defer></script>
<script src="{{ asset('assets/smoothscroll/smooth-scroll.js') }}"defer></script>
<script src="{{ asset('assets/ytplayer/index.js') }}" defer></script>
<script src="{{ asset('assets/playervimeo/vimeo_player.js') }}" defer></script>
<script src="{{ asset('assets/dropdown/js/navbar-dropdown.js') }}" defer></script>
<script src="{{ asset('assets/theme/js/script.js') }}" defer></script>
<script src="{{ asset('assets/formoid/formoid.min.js') }}" defer></script>


	<div id="scrollToTop" class="scrollToTop mbr-arrow-up">
		<a style="text-align: center;">
			<i class="mbr-arrow-up-icon mbr-arrow-up-icon-cm cm-icon cm-icon-smallarrow-up"></i>
		</a>
	</div>
</body>
</html>
