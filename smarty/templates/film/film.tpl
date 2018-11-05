<!DOCTYPE html>
<html lang="en">
<head>
{user->getNickName assign='uName'}
{user->getId assign='uId'}
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>{$film->getName()}</title>
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

	
	{include file="navbar.tpl"}
	
	<div class="container col-xs-12 col-sm-6 col-sm-offset-3 well text-center">
	

			<h4><a href="/videoteca-project/film/film/{$film->getId()}">{$film->getAuthor()}</a> : {$film->getName()} ({$film->getGenre()})</h4>
	
			
		</div>
		
			
	</div>
</body>
</html>
