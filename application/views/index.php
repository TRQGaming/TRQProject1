<!DOCTYPE html>
<html>
<head>
	<title>All Users</title>
	<link rel="stylesheet" href="/assets/stylesheets/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"></head>
<body>
	<div class="container back" id="loginbackground">
		<div class="col-sm-4 col-lg-5 col-md-4">
		</div>
		<div class="jumbotron col-sm-4 col-lg-2 col-md-4" id="logindetails" >
			<h2 id="login">Game  <span class="glyphicon glyphicon-cloud" ></span></h2>
			<div class="middle">
			<form class="col-sm-12 col-lg-12 col-md-12" id="login" action="users/user_login" method="post">
				<span class="col-sm-12 col-lg-12 col-md-12"><input type="email" name="email" placeholder="Email" ></span>
				<span class="col-sm-12 col-lg-12 col-md-12"><input type="text" name="password" placeholder="password" ></span>
				<span class="col-sm-12 col-lg-12 col-md-12"><input class="btn btn-warning" id="down" type="submit" name="submit" value="Login"></span>
			</form>
			</div>
		</div>
		<div class="col-sm-4 col-lg-5 col-md-4">
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
</body>
</html>
