<!DOCTYPE html>
<html lang="en">
<head>
<!-- <meta http-equiv="content-type" content="text/html; charset=UTF-8"> <!-- character encoding of document !--> 
<title>Installazione</title>
<meta charset="utf-8"> <!-- unicode !-->
<meta name="viewport" content="width=device-width, initial-scale=1"> <!-- mobile-device responsive !-->
 <link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">  <!-- including bootstrap !-->
<link rel="stylesheet"
	href="/prova/resources/css/style.css">
<!-- <script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
!-->
</head>
<body>

	
	<div class="container text-center">		
		<div class="col-sm-offset-3 col-sm-6 well">
		    <!-- Container (Sezione di presentazione del contenuto)!-->
		    <div class="well">
				<h1 id="important"> Programmazione Web </h1>
				<h4>Applicazione videoteca</h4>
				<h4 id="important">Autori:</h4>
				<ul>
					<li>Del Vecchio Agostino</li>
					<li>Morelli Claudio</li>
					<li>Morelli Massimo</li>
				</ul>
			<p>Per la corretta fruizione di questa applicazione<br>ABILITARE I COOKIES</p>
		    </div>
			{*if $version*}
			<h2>Installazione</h2>
			<hr>
			<!-- Sezione di immissione dati !-->
			<form class="form-vertical col-sm-offset-2 col-sm-8" method="post" action="install">
				<div class="form-group">
					<label for="user">User Name:</label> 
					<input type="text" class="form-control" id="user" placeholder="Enter username" name="admin">
				</div>
				<div class="form-group">
					<label for="pwd">Password:</label> 
					<input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
				</div>
				<div class="form-group">
					<label for="db">DB Name:</label>
					<input type="text" class="form-control" id="db" placeholder="Enter database name" name="database">
				</div>		
				<div class="form-group">
					<button type="submit" class="btn btn-default">Invia</button>
				</div>
			</form>
			{*else*}
			<div class="col-sm-offset-2 col-sm-8">
			    <p>This application requires PHP 7.2.1</p>
			</div>
			{*/if*}
	    </div>
	</div>

	
</body>
</html>