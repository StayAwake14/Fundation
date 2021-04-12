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
		<link rel="stylesheet" type="text/css" href="css/start.css" />
		<link rel="stylesheet" href="css/animations.css" type="text/css"/>
		<link rel="stylesheet" href="css/orbit-1.2.3.css">
		<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

		<link href='http://fonts.googleapis.com/css?family=Average+Sans&subset=latin,latin-ext' rel='stylesheet' type='text/css'/>
		<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.3.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.orbit-1.2.3.min.js"></script>	
		
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
			<img id="footer-top-logo" src="img/start/logo.png" alt="fundacja grubcio top-footer image"/>
			<h1 id="top-footer-title">Fundacja - Grubcio</h1>
			<p id="subtitle"><q>życie jest po to, żeby dawać z siebie jak najwięcej innym ludziom.</q></p>
		</div>
				
		<?php include 'content/menu.php'; ?>
		<?php include 'content/slider.php'; ?>

		<div id="container">
			<div id="square-news">
				<h1 id="article-head"><i class="fa fa-book fa-1x" aria-hidden="true"></i> Artykuły</h1>
				<hr id="article-lane">
		<?php
			require_once "connect.php";
			
			$connect = new PDO('mysql:host='.$host.';dbname='.$db_name.'', $db_user,$db_password);
			$connect -> exec("SET CHARACTER SET utf8");
			
			$limit = 10;
		
			$zap  = 'SELECT * FROM Articles LIMIT '.$limit.'';
			
		if($wykonaj = $connect->query($zap))
			{
				$wiersze = $wykonaj->rowCount();
			
					$zap2  = 'SELECT * FROM Articles order by id_article DESC  LIMIT '.$limit.'';
					
					if($wykonaj2 = $connect->query($zap2))
					{
						while($wyniki2 = $wykonaj2->fetch())
						{
						
							$id = $wyniki2['id_article'];
							$title = $wyniki2['title'];
							$content = $wyniki2['content'];	
							$text = wordwrap($content,100, '<br />');
echo "
							<div id='article'>
								<a href='articles/a$id.php' id='article-link'>
								<img id='article-img' src='img/articles/1.jpg' alt='obrazek fundacja grubcio'/>
								<h3 id='article-title'><i class='fa fa-paper-plane-o' aria-hidden='true'></i> $title </h3>
								<hr id='lane'>
								<p id='article-content'>
								$text
								</p>
								</a>
							</div>
				";						
						}
					}
				
			}
			else
			{
				echo "ERROR";
			}
?>	
			</div>
			
			<div id="nav-container">
			<h1 id="nav-title"><i class="fa fa-newspaper-o" aria-hidden="true"></i> Wiadomości</h1>
			<hr id="nav-lane">
				<div id="nav-bar">
					<div id="latest-news">
						<h1>Najnowsze artykuły:</h1>
						<?php

						$connect = new PDO('mysql:host='.$host.';dbname='.$db_name.'', $db_user,$db_password);
						$connect -> exec("SET CHARACTER SET utf8");
						
						$limit2 = 5;
					
						$zap  = 'SELECT * FROM Articles LIMIT '.$limit2.'';

						if($wykonaj = $connect->query($zap))
						{
							$wiersze = $wykonaj->rowCount();
						
								$zap2  = 'SELECT * FROM Articles order by id_article DESC  LIMIT '.$limit2.'';
								
								if($wykonaj2 = $connect->query($zap2))
								{
									while($wyniki2 = $wykonaj2->fetch())
									{
									
										$id = $wyniki2['id_article'];
										$title = $wyniki2['title'];

										echo '<a href="###" id="link-news"><h3 id="newest-article">'.$title.'</h3></a>
										<br/>';
									}
								}
						}
					?>
					</div>
					<hr id="lane-ad">
					<h1 id="nav-title"><i class="fa fa-hand-paper-o" aria-hidden="true"></i> Współpraca</h1>
					<div id="fun1">
						<a href=""><img src="img/start/fun1.jpg" alt="fundacja grubcio fundacja1" />
					</div>
					<div id="fun2">
						<img src="img/start/fun2.jpg" alt="fundacja grubcio fundacja2"/>
					</div>
				</div>
			</div>
		</div>
		
		<div id="footer-cp">
		
			<div id="back-top">
				<a href="#top" class="back-top"><img src="img/start/back-top.png" width="100" height="100"></a>
			</div>
		
			<div id="cp">
				<img src="img/start/footer.png" alt="footer fundacja image" width="200" height="150"/><br/>
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