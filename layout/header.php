<!DOCTYPE html>
<html>
<head>
	<title>Award Wizard</title>
	<meta http-equiv="content-type" content="text/html" charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="A website dedicated to cool searches of data gathered from award shows" />

	<!-- stylesheets -->
	<link type="text/css" rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css" />
	<link type="text/css" rel="stylesheet" href="bower_components/fontawesome/css/font-awesome.min.css" />
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<!-- fonts -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="wrapper">
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mainNav">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Award Wizard</a>
				</div>
				<div class="collapse navbar-collapse" id="mainNav">
					<ul class="nav navbar-nav">
						<li><a href="index.php">Home</a></li>
						<li><a href="dashboard.php">Dashboard</a></li>
						<li><a href="search.php">Search</a></li>
						<li><a href="insert.php">Insert</a></li>
						<li><a href="breakdown.php">Data Breakdown</a></li>
					</ul>
					<!--<form class="navbar-form navbar-right" role="login" data-bind="visible: LoggedIn">
  						<div class="form-group">
    						<input type="text" class="form-control" id="usernameInput" placeholder="Username" />
    						<input type="password" class="form-control" id="passwordInput" placeholder="Password" />
  						</div>
  						<button type="submit" class="btn btn-default" data-bind="click: login">Log in</button>
					</form>
					<p class="navbar-right navbar-text" data-bind="visible: LoggedIn() === false">Logged In: <span data-bind="text: Username"></span></p>-->
				</div>
			</div>
		</nav>
		<!--<div class="modal fade" id="registerModal" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times"></i></span></button>
						<h4 class="modal-title">Register</h4>
					</div>
					<div class="modal-body">
						<input class="form-control" placeholder="Username" type="text" id="usernameRegister" />
						<input class="form-control" placeholder="Password" type="password" id="passwordRegister" />
						<input class="form-control" placeholder="Email" type="text" id="emailRegister" />
						<span id="alertText"></span>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-bind="click: register">Register</button>
					</div>
				</div>
			</div>
		</div>-->