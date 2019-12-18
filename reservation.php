<html lang="tr">
<?php $pagenum=3; ?>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Library Management System</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/lightbox.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">

    </head>

    <body>
        <!-- Header -->
        <div class="header">
        <?php include("theme/header.php"); ?>
        </div>

        <!-- Rezervasyon nasıl yapılır -->
        <section class="reservation" id="reservation">
            <div class="reservation-container">
                <div class="col-md-12 reservation-big-title">
                    Rezervasyon Nasıl Yapılır?
                </div>
                <div class="col-md-12 reservation-desc">     
                <div class="col-lg-6 intro_col">
					<div class="intro_form_container">
						<div class="intro_form_title">  <em>   Rezervasyon yap </em> </div>
						<form action="#" class="intro_form" id="intro_form">
							<div class="d-flex flex-row align-items-start justify-content-between flex-wrap">
								<input type="name" class="intro_input" placeholder="İsim" >
								<input type="email" class="intro_input" placeholder="E-mail" >
								<input type="text" id="datepicker" class="intro_input datepicker" placeholder="Date">
							</div>
							<button class="button button_1 intro_button trans_200">Rezervasyon Yap</button>
						</form>
					</div>
				</div>
                </div>                        
            </div>
        </section>

        <!-- İletişim -->
        <section class="iletisim">
            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 contact-title">
                <div class="title">İLETİŞİM</div>
                <div class="line"></div>
            </div>
            <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 contact-detail">
                <div class="col-lg-3 col-md-4 col-sm-3 col-xs-12">                 
                    <div class="phone">
                        <div class="icon">
                            <i class="fa fa-phone"></i> 
                        </div>
                        <p>0538 785 18 51</p>
                    </div>
                    <div class="phone">
                        <div class="icon">
                            <i class="fa fa-phone"></i> 
                        </div>
                        <p>0 530 279 07 51</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                    <div class="mail">
                        <div class="icon">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <p>rukiyebeyzasarikaya@hotmail.com</p>                          
                    </div> 
                    <div class="mail">
                        <div class="icon">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <p>cagrihd@icloud.com</p>                          
                    </div>               
                </div>

                <div class="col-lg-5 col-md-4 col-sm-4 col-xs-12">
                    <div class="icon">
                        <i class="fa fa-map-marker"></i> 
                    </div>
                    <p>
                        ADANA
                    </p>     
                </div>
            </div>
            <div class="col-xs-12 footer-social-media">
                <ul>
                    <li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook-f"></i></a></li>
                    <li><a href="https://www.twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="https://www.youtube.com/" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
                    <li><a href="https://plus.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                </ul>
            </div>
        </section>

        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/jquery.nicescroll.min.js"></script>
        <script src="assets/js/custom.js"></script>
        <script>
        	function clickEvent(loc) {
                var offset=$("." + loc).position().top;
                $('html, body').animate({
                    scrollTop: offset
                }, 900);    
            }   
        </script>

        <script>
            var hash=window.location.hash;
            if (hash == "#reservation") {
                var offset=$("#reservation").offset().top;
                $('html, body').animate({
                    scrollTop: offset
                }, 900);    
            }

            var hash=window.location.hash;
            if (hash == "#mediator") {
                var offset=$("#mediator").offset().top;
                $('html, body').animate({
                    scrollTop: offset
                }, 900);    
            }

            var hash=window.location.hash;
            if (hash == "#mediator-when") {
                var offset=$("#mediator-when").offset().top;
                $('html, body').animate({
                    scrollTop: offset
                }, 900);    
            }

            var hash=window.location.hash;
            if (hash == "#process") {
                var offset=$("#process").offset().top;
                $('html, body').animate({
                    scrollTop: offset
                }, 900);    
            }

            var hash=window.location.hash;
            if (hash == "#law") {
                var offset=$("#law").offset().top;
                $('html, body').animate({
                    scrollTop: offset
                }, 900);    
            }

            var hash=window.location.hash;
            if (hash == "#result") {
                var offset=$("#result").offset().top;
                $('html, body').animate({
                    scrollTop: offset
                }, 900);    
            }
        </script>
    </body>
</html>