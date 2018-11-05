<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>Advanced Search</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet"
	href="/Videoteca-project/resources/css/style.css">
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>

	{user->getId assign='uId'} 
	{user->getNickName assign='uName'}
	
	{include file="navbar.tpl"}
	
	<div class="container text-center">
		<div class="col-sm-32">
		
        </div>
		<div style="position:absolute; top:100px; left:400px">
		
		<div class="col-sm-27 well">
			<form action="/Videoteca-project/search/advancedSearch">
				<div class="form-row">
					<div class="form-group col-md-12">
						<input type="text" class="form-control" id="search" name="str" placeholder="Search...">
					</div>
					<div class="form-group col-md-12">
						<select id="inputKey" class="form-control" name="key">
							<option value="film" selected>Film</option>
						</select>
					</div>
					<div class="form-group col-md-12">
						<select id="inputKey" class="form-control" name="value">
							<option value="genre" selected>Genere</option>
							<option value="author" selected>Autore</option>
							<option value="name">Nome</option>
						</select>
					</div>
					<button class="btn btn-primary" type="submit">Search</button>

				</div>
			</form>
		</div>
		<div class="col-sm-3>
		
		</div>
	</div>
</body>
</html>