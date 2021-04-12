<?php

	session_start();
?>
<!DOCTYPE HTML>
<html lang="PL">
	<head>
		<title>Fundacja - Grubcio</title>
		<meta charset="utf-8"/>
		<meta name="author" content="Karol Foryszewski" />
		<meta name="description" content="Strona fundacji organizujaca eventy na rzecz pomocy ludziom." />
		<meta name="keywords"  content="fundacja, szczescie, radosc, pomoc" />
		<meta name="viewport" content="width=device-width,initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="../css/start.css" />
		<link rel="stylesheet" href="../css/animations.css" type="text/css"/>
		<link rel="stylesheet" href="../css/orbit-1.2.3.css">
		<link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">

		<link href='http://fonts.googleapis.com/css?family=Average+Sans&subset=latin,latin-ext' rel='stylesheet' type='text/css'/>
		<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.3.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script type="text/javascript" src="../js/jquery.orbit-1.2.3.min.js"></script>	
		
		<script>
		// PRELOADER //
				$(window).load(function() { 
				  $('#status').fadeOut(); 
				  $('#preloader').delay(350).fadeOut('slow');
				  $('body').delay(350).css({
					'overflow': 'visible'
				  });
				})
		// PRELOADER END //
		</script>
		
		<script type="text/javascript">
				$(window).load(function() {
					$('#slider').orbit({
						animation: 'fade',
						captions: false,
					});
				});
		</script>
		
		<script>
				$(document).ready(function() {
				var stickyNavTop = $('.nav').offset().top;
				 
				var stickyNav = function(){
				var scrollTop = $(window).scrollTop();
					  
				if (scrollTop > stickyNavTop) { 
					$('.nav').addClass('sticky');
				} else {
					$('.nav').removeClass('sticky'); 
				}
				};
				 
				stickyNav();
				 
				$(window).scroll(function() {
				  stickyNav();
				});
				});
		</script>
	
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/pl_PL/sdk.js#xfbml=1&version=v2.7";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
		</script>
		
		<script>
			$(document).ready(function(){

				// hide #back-top first
				$("#back-top").hide();
				
				// fade in #back-top
				$(function () {
					$(window).scroll(function () {
						if ($(this).scrollTop() > 100) {
							$('#back-top').fadeIn();
						} else {
							$('#back-top').fadeOut();
						}
					});

					// scroll body to 0px on click
					$('#back-top a').click(function () {
						$('body,html').animate({
							scrollTop: 0
						}, 800);
						return false;
					});
				});

			});
	</script>
		
	</head>
	
	<body>
	<div id="preloader">
		<div id="status">&nbsp;</div>
	</div>
		<div id="top-footer">
			<img id="footer-top-logo" src="../img/start/logo.png" alt="fundacja grubcio top-footer image"/>
			<h1 id="top-footer-title">Fundacja - Grubcio</h1>
			<p id="subtitle"><q>życie jest po to, żeby dawać z siebie jak najwięcej innym ludziom.</q></p>
		</div>
				
		<?php include '../content/menu_back.php'; ?>


		<div id="container">
		<h1 style="color:black;text-shadow: 1px 1px 10px black;margin-top: 100px;font-weight:900;font-size:35px;"> Pomoc Dzieciom </h1>
		<div id="content">
		
				<p id="right-content">Lorem Ipsum jest tekstem stosowanym jako przykładowy wypełniacz w przemyśle poligraficznym. Został po raz pierwszy użyty w XV w. przez nieznanego drukarza do wypełnienia tekstem próbnej książki. Pięć wieków później zaczął być używany przemyśle elektronicznym, pozostając praktycznie niezmienionym. Spopularyzował się w latach 60. XX w. wraz z publikacją arkuszy Letrasetu, zawierających fragmenty Lorem Ipsum, a ostatnio z zawierającym różne wersje Lorem Ipsum oprogramowaniem przeznaczonym do realizacji druków na komputerach osobistych, jak Aldus PageMakerLorem Ipsum jest tekstem stosowanym jako przykładowy wypełniacz w przemyśle poligraficznym. Został po raz pierwszy użyty w XV w. przez nieznanego drukarza do wypełnienia tekstem próbnej książki. Pięć wieków później zaczął być używany przemyśle elektronicznym, pozostając praktycznie niezmienionym. Spopularyzował się w latach 60. XX w. wraz z publikacją arkuszy Letrasetu, zawierających fragmenty Lorem Ipsum, a ostatnio z zawierającym różne wersje Lorem Ipsum oprogramowaniem przeznaczonym do realizacji druków na komputerach osobistych, jak Aldus PageMakerLorem Ipsum jest tekstem stosowanym jako przykładowy wypełniacz w przemyśle poligraficznym. Został po raz pierwszy użyty w XV w. przez nieznanego drukarza do wypełnienia tekstem próbnej książki. Pięć wieków później zaczął być używany przemyśle elektronicznym, pozostając praktycznie niezmienionym. Spopularyzował się w latach 60. XX w. wraz z publikacją arkuszy Letrasetu, zawierających fragmenty Lorem Ipsum, a ostatnio z zawierającym różne wersje Lorem Ipsum oprogramowaniem przeznaczonym do realizacji druków na komputerach osobistych, jak Aldus PageMakerLorem Ipsum jest tekstem stosowanym jako przykładowy wypełniacz w przemyśle poligraficznym. Został po raz pierwszy użyty w XV w. przez nieznanego drukarza do wypełnienia tekstem próbnej książki. Pięć wieków później zaczął być używany przemyśle elektronicznym, pozostając praktycznie niezmienionym. Spopularyzował się w latach 60. XX w. wraz z publikacją arkuszy Letrasetu, zawierających fragmenty Lorem Ipsum, a ostatnio z zawierającym różne wersje Lorem Ipsum oprogramowaniem przeznaczonym do realizacji druków na komputerach osobistych, jak Aldus PageMakerLorem Ipsum jest tekstem stosowanym jako przykładowy wypełniacz w przemyśle poligraficznym. Został po raz pierwszy użyty w XV w. przez nieznanego drukarza do wypełnienia tekstem próbnej książki. Pięć wieków później zaczął być używany przemyśle elektronicznym, pozostając praktycznie niezmienionym. Spopularyzował się w latach 60. XX w. wraz z publikacją arkuszy Letrasetu, zawierających fragmenty Lorem Ipsum, a ostatnio z zawierającym różne wersje Lorem Ipsum oprogramowaniem przeznaczonym do realizacji druków na komputerach osobistych, jak Aldus PageMaker</p>
				<br/>
				<hr>
				<img style="padding:20px 0px;display:inline;height:100px;border-radius:50px;"src='../img/articles/1.jpg' alt="article"/>
				<div id="left-content">
				
					<h1 style="display:inline;font-size:25px;color:black;">Dodał: Karol </h1>
					<p style="display:inline;float:right;color:black;">Data: 2016-25-10 </p>
				</div>
		</div>
		
		<div id="footer-cp">
		
			<div id="back-top">
				<a href="#top" class="back-top"><img src="../img/start/back-top.png" width="100" height="100"></a>
			</div>
		
			<div id="cp">
				<img src="../img/start/footer.png" alt="footer fundacja image" width="200" height="150"/><br/>
				<h4>All rights reserved &copy 2016 - Fundacja Grubcio</h4>
			</div>
			
			<div id="fb">
				<div class="fb-page" 
					  data-href="https://www.facebook.com/fundacjatvn/?fref=ts"
					  data-hide-cover="false"
					  data-show-facepile="false" 
					  data-show-posts="false">
					 </div>
			</div>
			
		</div>
	</body>
	
</html>