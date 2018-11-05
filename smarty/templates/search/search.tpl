<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>Ricerca di: {$string}</title>
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
		<h2>Ricerca di: {$string}</h2>
		<!-- Sezione di output !-->
		<div class="col-sm-offset-2 col-sm-8">
			<h4>Search Results for {$key}'s {$value} {$string}: </h4>
				{if $key eq "Film"}
					{include file="FilmList.tpl"}
				{elseif $key eq "User"}
					{include file="UserList.tpl"}
				{/if}			
		</div>
	</div>
	
</body>
</html>

