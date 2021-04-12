<?php

session_start();
?>
<!DOCTYPE html>
<html lang="PL">
<head>
	<title>Fundacja - Grubcio</title>
	<meta charset="utf-8"/>
	<meta name="author" content="Karol Foryszewski" />
	<meta name="description" content="Strona fundacji organizująca eventy na rzecz pomocy ludziom." />
	<meta name="keywords"  content="fundacja, szczęście, radość, pomoc" />
	<meta name="viewport" content="width=device-width,initial-scale=1"/>
	<link rel="stylesheet" type="text/css" href="css/presentation.css" />
	<link rel="stylesheet" href="css/animations.css" type="text/css"/>
	<link href='http://fonts.googleapis.com/css?family=Athiti&subset=latin,latin-ext' rel='stylesheet' type='text/css'/>

	<!--[if IE]>
		<script type="text/javascript">
			 var console = { log: function() {} };
		</script>
	<![endif]-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
	<script src="js/mousewheel.js"></script>
	<script src='js/jquery.scrollto.js'></script>
	<script type="text/javascript" src="js/jquery.fullPage.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$(document).mousedown(function(e){
				if(e.which === 2 ){
				   return false; // Or e.preventDefault()
				}
			});
			$('#fullpage').fullpage({
				sectionsColor: ['#0086B3', '#4BBFC3', '#7BAABE'],
				anchors: ['first', 'second', 'third'],
				menu: '#menu',
				 scrollBar: true,
			});
			
			        /** 
         navbar
         */
        $("nav a").click(function(evn){
            evn.preventDefault();
            $('html,body').scrollTo(this.hash, this.hash); 
        });
        
        var aChildren = $("nav li").children(); 
        var aArray = [];
        for (var i=0; i < aChildren.length; i++) {    
            var aChild = aChildren[i];
            var ahref = $(aChild).attr('href');
            aArray.push(ahref);
        }
        
        $(window).scroll(function(){
            var windowPos = $(window).scrollTop();
            var windowHeight = $(window).height();
            var docHeight = $(document).height();
            
            for (var i=0; i < aArray.length; i++) {
                var theID = aArray[i];
                var divPos = $(theID).offset().top;
                var divHeight = $(theID).height();
                if (windowPos >= divPos && windowPos < (divPos + divHeight)) {
                    $("a[href='" + theID + "']").addClass("nav-active");
                } else {
                    $("a[href='" + theID + "']").removeClass("nav-active");
                }
            }
            
            if(windowPos + windowHeight == docHeight) {
                if (!$("nav li:last-child a").hasClass("nav-active")) {
                    var navActiveCurrent = $(".nav-active").attr("href");
                    $("a[href='" + navActiveCurrent + "']").removeClass("nav-active");
                    $("nav li:last-child a").addClass("nav-active");
                }
            }
        });

		});
	</script>
</head>
<body>

<div class='animatedParent animateOnce'>
        <div id="sidebar">
            <nav id="menu">
                <ul>
                    <li><a href="#section0"></a></li>
                    <li><a href="#section1"></a></li>
                    <li><a href="#section2"></a></li>
                </ul>
            </nav>
        </div><!-- /sidebar -->
</div>

<div id="fullpage">
<br/>
	<div class="section " id="section0">
	<div class="animatedParent">
		<h1 id="title" class="animated bounceInDown">Fundacja - Grubcio</h1>
		<img id="picture1" class="animated bounceInLeft" src="img/presentation/img1.png" alt="obrazek fundacja grubcio"/>
		<div id="text-area" class="animated bounceInRight"><p id="desc">Fundacja Grubcio istnieje już od 20 lat. Jesteśmy fundacją z wieloletnim doświadczeniem w organizowaniu przeróżnych eventów.</p></div>
		<div id="links">
			<a href="start.php" id="button" class='animated fadeInLeft'>Strona Fundacji</a>
			<a href="contact.php" id="button" class='animated fadeInRight'>Kontakt</a>
		</div>
		<!-- <div id="text-section" class="animated fadeIn">
			<p class="animated rotateInUpRight">Witaj na stronie fundacji Grubcio! Obejrzyj naszą krótką prezentację!</p>
		</div> -->
		</div>
	</div>
	<div class="section" id="section1">
	<div class="animatedParent">
		<h1 id="title" class="animated wobble">O fundacji</h1>
		<div id="pictures-area" class="animated zoomIn">
		<h1 id="events-images" class="animated shake">Eventy</h1>
			<img id="picture-about" src="img/presentation/about1.jpg" alt="obrazek fundacja grubcio"/>
			<img id="picture-about" src="img/presentation/about2.jpg" alt="obrazek fundacja grubcio"/><br/>
			<img id="picture-about" src="img/presentation/about3.jpg" alt="obrazek fundacja grubcio"/>
			<img id="picture-about" src="img/presentation/about4.jpg" alt="obrazek fundacja grubcio"/>
		</div>
		<div id="text-about" class="animated flipInX">
			<p id="desc2" class="animated fadeIn">Jesteśmy fundacją, która organizuje mnóstwo eventów związanych z pomocą charytatywną czy zwiększeniem bezpieczeństwa w razie zagrożenia.
			Pomogliśmy już milionom osób na świecie, które się do nas zwróciły. Pomagamy również w organizacjach zbiórek na osoby chore, niepełnosprawne.
			Uczestniczymy również w projektach unijnych, które pomagają nam w postaci pieniężnej, abyśmy mogli działać i nieść pomoc potrzebującym ludziom na całym świecie!
			</p>
		</div>
		</div>
	</div>
	<div class="section" id="section2">
	<br/>
	<div class="animatedParent">
		<h1 id="title" class="animated bounceIn">Co zrobić, aby otrzymać od nas pomoc?</h1>
		<img id="picture-help" src="img/presentation/help.png" alt="pomoc fundacja grubcio" class="animated fadeInLeft"/>
		<div id="text-help" class="animated rollIn">
		<p id="txt-help">W kilku prostych krokach opiszemy jak to zrobić.</p>
		<br/>
			<ol id="list-help" class="animated zoomInDown">
				<li>Wypełnić nasz formularz zgłoszeniowy</li>
				<li>Podać dokładne informacje w <a href="form.php">formularzu</a>, które są niezbędne do udzielenia pomocy
				<br/>
				-Określić cel, <br/>
				-Dokładnie opisać zgłoszenie podając jak najwięcej informacji,</li>
				<li>Wysłać formularz i zaakceptować regulamin</li>
				<li>Czekać na odpowiedź od fundacji</li>
			</ol><br/>
			<h1 style="text-align:center;text-shadow:1px 1px 5px orange">Czekamy na wasze zgłoszenia!</h1>
		</div>
	</div>
	</div>
</div>


</body>
</html>
<script src="js/css3-animate-it.js"></script>