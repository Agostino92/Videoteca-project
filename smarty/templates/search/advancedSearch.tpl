<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>Ricerca avanzata</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet"
	href="/Videoteca-project/resources/css/style.css">
<link rel="stylesheet"
	href="/videoteca-project/resources/css/login.css">
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>

	{user->getId assign='uId'} 
	{user->getNickName assign='uName'}
	
	{include file="navbar.tpl"}
	
		<div class="container col-xs-12 col-sm-6 col-sm-offset-3 well text-center">
			<h2>Ricerca avanzata</h2>
			<hr>
			<!-- Sezione di immissione dati !-->
			<form class="form-vertical col-sm-offset-2 col-sm-8 ricercaavanzata" action="/videoteca-project/search/advanced">
				<!-- Ricerca !-->
				<div class="form-group">
					<label for="search">Inserisci la stringa di ricerca:</label>
					<input type="text" class="form-control" id="search" name="str" placeholder="Cerca...">
				</div>
				
				<!-- Categoria di ricerca (chiave) !-->
				<div class="form-group">
					<label for="inputKey">Stai cercando un film o un utente?</label>
					<select id="inputKey" class="form-control" name="key">
						<option value="film" selected>Film</option>
						<option value="user">Utente</option>
					</select>
				</div>
				
				<!-- Genere di ricerca (valore) !-->
				<div class="form-group">
					<label for="search">In base a cosa lo stai cercando? </br> PS Puoi cercare utenti solo tramite nome!</label>
					<select id="inputKey" class="form-control" name="value">
						<option value="genre" selected>Genere</option>
						<option value="name">Nome</option>
						<option value="author" selected>Autore</option>
					</select>
					
				</div class="form-group">
					<button type="submit" class="btn btn-default">Cerca</button>
				</div>
			</form>
	</div>
	
</body>
</html>