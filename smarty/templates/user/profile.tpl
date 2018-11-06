<!DOCTYPE html>
 
{user->getNickName assign='uName'}
{user->getId assign='uId'}
 
{profile->getNickName assign='pName'}
{profile->getId assign='pId'}

<html lang="en">
<head>
<title>{$pName}'s Profile</title>
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
	

	<div class="container text-center">
	
		<div class="col-sm-3">
		<!-- Informazioni utente -->
			{include file="user/userInfo.tpl"}

			
        </div>
			<div class="col-sm-7 well">
			<!-- Contenuto principale -->

				

				
				{if $content eq 'Listafilm'}
				<!-- Lista following -->
				<h4 id="important">Lista Film</h4>
				Sezione in via di sviluppo

				
				{elseif $content eq 'None'}
				<!-- Simple introduction-->
				<h3>Hi! I'm a {ucfirst($pType)}!</h3>
				{/if}
			</div>

		
	</div>

</body>
</html>
