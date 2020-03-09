<meta charset="utf-8">
<meta name="description" content="This is an example of a meta description."
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login Page</title>
<link rel="stylesheet" href="css/login.css">



<header>
	<nav class="nav-header">
		<a class="header-logo" href="#">
			<img src ="img/see-thru-boi.png" alt="logo">
		</a>
		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="#">Portfolio</a></li>
			<li><a href="#">About Me</a></li>
			<li><a href="#">Contact</a></li>
		</ul>
		<div class header-login>
			<form action="includes/login.inc.php" method="post">
				<input type="text" name="mailuid" placeholder="Username">
				<input type="password" name="pwd" placeholder="Password">
				<button type="submit" name="login-submit">Login</button>
			</form>
			<a href="pages/php/signup.php">Signup</a>
			<form action="includes/logout.inc.php" method="post">
				<button type="submit" name="logout-submit">Login</button>
			</form>
		</div>
	</nav>
</header>