<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>Registrazione Info</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
			<h2>Info Registrazione</h2>
			<hr>			
			<!-- Sezione di immissione dati !-->
			<form class="form-vertical col-sm-offset-2 col-sm-8" method="post" action="editInfo">
				<!-- Nome !-->
				<div class="form-group">
					<label for="Nome" class="{if $error1} text-danger{/if}" >Nome:</label> 
					<input type="text" class="form-control" id="Nome" placeholder="Alfanumerico 2-20 caratteri" name="firstName">
				</div>
				{if $error1}
				<div class="errori">
  						Deve essere lungo 2-20 caratteri!
				</div>
				{/if}				
				
				<!-- Cognome !-->
				<div class="form-group">
					<label for="Cognome" class="{if $error2} text-danger{/if}">Cognome:</label> 
					<input type="text" class="form-control" id="Cognome" placeholder="Alfanumerico 2-20 caratteri" name="lastName">
				</div>
				{if $error2}
				<div class="errori">
  						Deve essere lungo 2-20 caratteri!
				</div>
				{/if}				
				
				<!-- Luogo di nascita !-->
				<div class="form-group">
					<label for="Luogodinascita" class="{if $error3} text-danger{/if}">Luogo di nascita:</label> 
					<input type="text" class="form-control" id="Luogodinascita" placeholder="3-25 caratteri" name="birthPlace">
				</div>
				{if $error3}
				<div class="errori">
  						Deve essere lungo 3-25 caratteri!      
				</div>
				{/if}

				<!-- Data di nascita !-->
				<div class="form-group">
					<label for="Datadinascita" class="{if $error4} text-danger{/if}">Data di nascita:</label> 
					<input type="text" class="form-control" id="Datadinascita" placeholder="Formato gg/mm/aaaa" name="birthDate">
				</div>
				{if $error4}
				<div class="errori">
  						Deve essere nel formato valido e compresa tra il 1900 e il 2009!      
				</div>
				{/if}

				<!-- Biografia !-->
				<div class="form-group">
					<label for="Biografia" class="{if $error5} text-danger{/if}">Biografia:</label> 
					<input type="text" class="form-control" id="Biografia" placeholder="Inserisci una breve biografia" name="bio">
				</div>
				{if $error5}
				<div class="errori">
  						Deve essere lunga max 140 caratteri!      
				</div>
				{/if}
				
				<div class="form-group">
					<button type="submit" class="btn btn-default">Invia</button>
				</div>
			</form>
	    </div>
	

	
</body>
</html>