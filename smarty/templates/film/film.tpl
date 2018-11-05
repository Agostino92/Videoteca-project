<!DOCTYPE html>
<html lang="en">
<head>
{user->getNickName assign='uName'}
{user->getId assign='uId'}
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>{$film->getName()}</title>
<meta charset="utf-8"> <!-- unicode !-->
<meta name="viewport" content="width=device-width, initial-scale=1"> <!-- mobile-device responsive !-->
 <link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">  <!-- including bootstrap !-->
<link rel="stylesheet"
	href="/videoteca-project/resources/css/home.css">
<link rel="stylesheet"
	href="/videoteca-project/resources/css/login.css">	
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style> body 
{
	background-color: RebeccaPurple;
	background-image: url("https://pre00.deviantart.net/47a1/th/pre/i/2015/177/1/2/lulu_and_bard_by_dakun87-d8ysub2.jpg"); 
	background-position: 50% 85%;
	background-size: cover; 
	background-repeat: no-repeat;
	background-attachment: fixed;
	-webkit-background-size: cover; /* per garantire compatibilità cross-browser */
	-moz-background-size: cover; 
	-o-background-size: cover; 
} </style>
</head>

<body>

	
	{include file="navbar.tpl"}
	
<div class="container-fluid stiled nopad text-center" id="descr">
<h2>{$film->getAuthor()} : {$film->getName()} ({$film->getGenre()})</h2>
	
    <div class="col-xs-12 col-sm-offset-3 col-sm-6 container bianco nopad" id="reviewcont">
     <div id="mezza">
	  <img src="{$film->getLocandina()}"  class="nopad"/>
	  <p>{$film->getDescrizione()}</p>
     </div>
	</div>
</div>
			
	</div>
</body>
</html>
