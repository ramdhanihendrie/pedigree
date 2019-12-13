<div id="header">
	<h1 style="flex-grow: 1">Pedigree</h1>
	<h3 class="username-navbar" style="align-content : left"><?php session_start();
				include"content/connection.php";
				$username=$_SESSION['username'];
				echo "$username"; ?>
	</h3>
	<div class="butmen" style="flex-shrink: 1" align="right">
		<form action="?module=signout#pos" method="post">
			<a href="index.php" class="btnsignup">Sign-Out</a>
		</form>
	</div>
</div>