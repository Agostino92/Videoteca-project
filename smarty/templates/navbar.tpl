<!DOCTYPE html>
<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> <!-- collapses bar on smaller screens !-->
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="/videoteca-project/"><img src="https://i.imgur.com/9idmjQq.png" alt="logo"></a>
			</div>
			<!-- Opzioni della Navbar -->
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-right">
					{if $uType eq 'guest'}
					<!-- Se Visitatore -->
					<li><a href="#sfoglia">SFOGLIA</a></li>
					<li><a href="#forum">FORUM</a></li>
					<li><a href="/videoteca-project/user/login">ACCEDI</a></li>
					<li><a href="/videoteca-project/user/signup">REGISTRATI</a></li>
				    {else}
					<li><a href="#sfoglia">SFOGLIA</a></li>
				    <!-- Se utente loggato 
					<li><a href="/deepmusic/user/profile/{$uId}"><span class="glyphicon glyphicon-user"></span> {$uName}'s Account </a></li> 
					{if $uType eq 'moderator'}
					<!-- Se moderatore 
					<li><a href="/deepmusic/manageReport/show"><span
							class="glyphicon glyphicon-warning-sign"></span> Report Hub </a></li> 
					{/if}
					<!-- Se utente loggato !-->
					<li><a href="/videoteca-project/user/logout"><span
							class="glyphicon glyphicon-log-out"></span> ESCI </a></li>
					<!--{/if} !-->
					
				</ul>
				<!-- Form per la barra di ricerca
				<form class="navbar-form navbar-right" role="search" action="/deepmusic/search/simple">
					<div class="form-group input-group">
						<input type="text" class="form-control" name="str"  placeholder="Search Song's Genre...">
						<span class="input-group-btn">
							<button class="btn btn-default" type="submit">
								<span class="glyphicon glyphicon-search"></span>
							</button>
						</span>
					</div>
				</form>
				{if $uType != "guest"}
				<!-- Button per la ricerca avanzata (se loggato) 
				<ul class="nav navbar-nav navbar-right">
					<li><a href="/deepmusic/search/advanced">Advanced Search</a></li>
				</ul>
				{/if} !-->
			</div>
		</div>
	</div>
</nav>
