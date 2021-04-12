	<div id="top-menu">
		<ul class="nav" id="top-menu-cfg">
			<li><a href="start.php">START <i class="fa fa-home" aria-hidden="true"></i></a></li>
			<li><a href="form.php">FORMULARZ <i class="fa fa-check-square-o" aria-hidden="true"></i></a></li>
			<li><a href="contact.php">KONTAKT <i class="fa fa-envelope-o" aria-hidden="true"></i> </a></li>
			<li><a href="help.php">POMOC <i class="fa fa-globe" aria-hidden="true"></i> </a></li>
			<li><a href="faq.php">FAQ <i class="fa fa-question" aria-hidden="true"></i> </a></li>
			<li><a href="index.php">INFORMACJE <i class="fa fa-info" aria-hidden="true"></i></a></li>
			<?php
			if ((isset($_SESSION['zalogowanie'])) && ($_SESSION['zalogowanie']==true))
			{
				echo '<li><a href="logout.php">WYLOGUJ <i class="fa fa-key" aria-hidden="true"></i></a></li>';
			}
			else
			{
				echo '<li><a href="login.php">ZALOGUJ <i class="fa fa-key" aria-hidden="true"></i></a></li>';
			}
			?>
		</ul>
	</div>