<div id="header">
	<h1 style="flex-grow: 1">Pedigree</h1>
	<div style="flex-grow: 2" id="navmenu">
		<a href="?module=home#pos">Home</a>
		<a href="?module=family#pos">Family</a>
		<a href="?module=about#pos">About</a>
	</div>
	<h3 class="username-navbar">
		<?php session_start();
				include"content/connection.php";
				$username=$_SESSION['username'];
				$no_family=$_SESSION['no_family'];
				echo "$username"; ?>
	</h3>
	<div class="butmen" style="flex-shrink: 1" align="right">
		<form action="?module=signoutproc#pos" method="post">
			<input class="btnsignout" type="submit" value="Sign-Out">
		</form>
	</div>
</div>