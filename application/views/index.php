<!DOCTYPE html>
<html>
<head>
	<title>All Users</title>
	<link rel="stylesheet" href="/assets/stylesheets/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<style media="screen">
	*{
		margin: 0px;
		margin: auto;
		padding: auto;
	}
	h1 {
		color: blue;
		background-color: red;
	}

	.errors {
		color: red;
	}
	#login {
		text-align: center;
		margin-bottom: 20px;
	}
	#logindetails {
		background-color: white;
		color: black;
		border-radius: 50px;
		position: relative;
		top: 50%;
		transform: translateY(-50%);
	}
	#loginbackground {
		background-image: url(http://archive.beefjack.com/files/2011/10/video-game-clouds.jpg);
		position: absolute;
		width: 100%;
		height: 100%;
	}
	#down {
		margin-top: 20px;
	}
	.middle {
		align-items: center;
	}
	.ordersmenu {
		list-style-type: none;
		margin: 0;
		padding: 0;
		display: block;
		color: white;
		text-align: center;
		padding: 14px 16px;
		text-decoration: none;
	}
	.dashboard{
		background-color: lightgrey;
		width: 100%;
		height: 100%;
		background-size: cover;
	}
	.center {
		text-align: center;
		align-items: center;
	}
	.tableone {
		width: 100%;
		height: 200px;
		overflow: scroll;
		align-items: center;
		margin-top: 100px;
	}
	.dontshow {
		visibility: hidden;
	}

	</style>
</head>
<body>
	<div class="container back" id="loginbackground">
		<div class="col-sm-2 col-lg-4 col-md-2">
		</div>
		<div class="jumbotron col-sm-8 col-lg-4 col-md-6" id="logindetails" >
			<h2 id="login">Game  <span class="glyphicon glyphicon-cloud" ></span></h2>
			<div class="middle">
			<form class="col-sm-12 col-lg-12 col-md-12" id="login" action="/Users/loggin" method="post">
				<span class="col-sm-12 col-lg-12 col-md-12"><input type="email" name="email" placeholder="Email"></span>
				<span class="col-sm-12 col-lg-12 col-md-12"><input type="text" name="password" placeholder="Password"></span>
				<span class="col-sm-12 col-lg-12 col-md-12"><input class="btn btn-warning" id="down" type="submit" name="submit" value="Login"></span>
			</form>
			</div>
		</div>
		<div class="col-sm-2 col-lg-4 col-md-2">
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
</body>
</html>
