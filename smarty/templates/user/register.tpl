<!DOCTYPE html>
<html lang="en">
<head>
<!-- <meta http-equiv="content-type" content="text/html; charset=UTF-8"> <!-- character encoding of document !--> 
<title>Registrazione</title>
<meta charset="utf-8"> <!-- unicode !-->
<meta name="viewport" content="width=device-width, initial-scale=1"> <!-- mobile-device responsive !-->
 <link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">  <!-- including bootstrap !-->
<link rel="stylesheet"
	href="/videoteca-project/resources/css/style.css">
<link rel="stylesheet"
	href="/videoteca-project/resources/css/login.css">
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>

		{include file="navbar.tpl"}
		
		<div class="container col-xs-12 col-sm-6 col-sm-offset-3 well text-center">
			<h2>Registrazione</h2>
			<hr>
			{if $error1} 
			<div class="alert alert-warning">
				<strong>Attenzione!</strong><br>Questo nome utente è già stato utilizzato <br>Si prega di riprovare.
			</div>
			{/if}
			{if $error2} 
			<div class="alert alert-warning">
				<strong>Attenzione!</strong><br>È già associato un account a questo indirizzo mail <br>Si prega di riprovare.
			</div>
			{/if}			
			<!-- Sezione di immissione dati !-->
			<form class="form-vertical col-sm-offset-2 col-sm-8" method="post" action="signup">
				<!-- Nome utente !-->
				<div class="form-group">
					<label for="user" class="{if $error3} text-danger{/if}" >Nome Utente:</label> 
					<input type="text" class="form-control" id="user" placeholder="Alfanumerico 6-15 caratteri" name="name">
				</div>
				{if $error3}
				<div class="errori">
  						Deve essere lungo 6-15 caratteri!
				</div>
				{/if}				
				
				<!-- Password !-->
				<div class="form-group">
					<label for="password" class="{if $error4} text-danger{/if}">Password:</label> 
					<input type="password" class="form-control" id="password" placeholder="Alfanumerico 6-20 caratteri" name="pwd">
				</div>
				{if $error4}
				<div class="errori">
  						Deve essere lunga 6-20 caratteri!
				</div>
				{/if}				
				
				<!-- Mail !-->
				<div class="form-group">
					<label for="mail" class="{if $error5} text-danger{/if}">Mail:</label> 
					<input type="text" class="form-control" id="mail" placeholder="Inserisci un indirizzo e-mail valido" name="mail">
				</div>
				{if $error5}
				<div class="errori">
  						Deve essere un indirizzo e-mail valido!      
				</div>
				{/if}
				
				<div class="form-group">
					<button type="submit" class="btn btn-default">Invia</button>
				</div>
			</form>
	    </div>
	

	
</body>
</html>