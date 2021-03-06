<!DOCTYPE html>
<html lang="en">
<head>
<!-- <meta http-equiv="content-type" content="text/html; charset=UTF-8"> <!-- character encoding of document !--> 
<title>IoniaFilm</title>
<meta charset="utf-8"> <!-- unicode !-->
<meta name="viewport" content="width=device-width, initial-scale=1"> <!-- mobile-device responsive !-->
 <link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">  <!-- including bootstrap !-->
<link rel="stylesheet"
	href="/videoteca-project/resources/css/home.css">
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>

{include file="navbar.tpl"}

<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="7000">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="https://i.imgur.com/o1uoYkX.png" alt="WWS" width="1200" height="400">
        <div class="carousel-caption">
          <h2><a href="/videoteca-project/film/show/1">The wolf of Wall Street</a></h2>
          <h5><a href="/videoteca-project/film/show/1">"Commedia nera e stupefacente senza redenzione, brillante analisi antropologica sull'avidità"</a></h5>
		  <p>Mymovies</p>
        </div>     		
      </div>

      <div class="item">
        <img src="https://i.imgur.com/VZSLHSy.jpg" alt="8ful 8" width="1200" height="400">
        <div class="carousel-caption">
          <h2><a href="/videoteca-project/film/show/2">The hateful eight</a></h2>
          <h5><a href="/videoteca-project/film/show/2">"Sceneggiatura sapiente e ottimi dialoghi nell'ultima opera vincente di Tarantino."</a></h5>
		  <p>Repubblica</p>
        </div>      
      </div>
    
      <div class="item">
        <img src="https://i.imgur.com/LU9S1xY.jpg" alt="NGNL0" width="1200" height="400">
        <div class="carousel-caption">
          <h2><a href="/videoteca-project/film/show/3">No Game No Life Zero</a></h2>
          <h5><a href="/videoteca-project/film/show/3">"Coinvolgente, romantico e commovente. Non perderti questo capolavoro dell'animazione!"</a></h5>
		  <p>Anime & Manga ITA</p>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>	
	
<div id="filmpref" class="container-fluid stiled">
  <div class="row">
    <div class="col-sm-6" id="cercafilmpref">
      <h3>Cerca i tuoi film preferiti</h3>     
      <p>Scegli tra un'ampia gamma di opere ciò a cui sei più interessato</p></br>
    </div>
    <div class="col-sm-6">
	   <div class="row">
	      <div class="media col-md-3 col-md-offset-1">           
              <a href="/videoteca-project/film/show/4" class="deco-none"><img class="media-object img-rounded img-responsive"  src="https://i.imgur.com/pTWFyRY.jpg" alt="DjUnch" ></a>            
          </div>
          <div class="col-md-6">
            <h4 class="list-group-item-heading"></br><a href="/videoteca-project/film/show/4" class="deco-none">Django unchained</a></h4>          
          </div>
       </div> </br>
	   <div class="row">
	      <div class="media col-md-3 col-md-offset-1">
              <a href="/videoteca-project/film/show/5" class="deco-none"><img class="media-object img-rounded img-responsive"  src="https://i.imgur.com/bVsEMIX.jpg" alt="DjUnch" ></a>
          </div>
          <div class="col-md-6">
            <h4 class="list-group-item-heading"></br><a href="/videoteca-project/film/show/5" class="deco-none">Avengers: Infinity War</a></p>
          </div>
       </div>
    </div>
  </div>
</div>

<div class="container-fluid stiled nopad">
	<div class="col-xs-12 col-sm-6 col-sm-push-6" id="diventauncritico">
      <h3>Diventa tu stesso un critico e stila recensioni</h3></br>     
	</div>
	
    <div class="col-xs-12 col-sm-offset-1 col-sm-5 col-sm-pull-6 container bianco nopad" id="reviewcont">
     <div id="mezza">

	  <a href="/videoteca-project/film/show/7" class="deco-none"><img src="https://assets.cdn.moviepilot.de/files/c3eebe10965f3f5b5c0d5a8cb0c4a865da70135bb8a1b477a55d1c35dd41/fill/200/200/Steinsgatemovie.jpg" class="nopad"/></a>
	  <p>Un graditissimo ritorno. A chi si era affezionato ai personaggi e alle vicende del quartiere di Akihabara, 
	  questo film apparirà proprio in questo modo. La trama si svolge un anno dopo gli eventi della serie originale, con la comparsa 
	  di un problema che potrebbe stravolgere la vita di Rintaro e del suo variegato gruppetto, che richiede un nuovo intervento sulle varie linee temporali.</p>
     </div>
	</div>
</div>



<div class="container-fluid stiled"></br>

	<div id="listapersonale" class="col-sm-6">
      <h3>Gestisci la tua lista personale</h3>  </br>   
	</div>
    <div class="col-sm-6 container bianco">
      <h4>
		<p class="alignleft">1.</p>
		<p class="alignmid"><a href="/videoteca-project/film/show/7" class="deco-none">Steins;Gate:The Movie</a></p>
		<p class="alignright">10</p>
      </h4>
	  <h4>
		<p class="alignleft">2.</p>
		<p class="alignmid"><a href="/videoteca-project/film/show/2" class="deco-none">The Hateful Eight</a></p>
		<p class="alignright">9</p>
	  </h4>
	  <h4>
		<p class="alignleft">3.</p>
		<p class="alignmid"><a href="/videoteca-project/film/show/6" class="deco-none">Titanic</a></p>
		<p class="alignright">8</p>
	  </h4>
	</div>
</div>
	
<div class="container-fluid stiled text-center nopad">
  <div class="col-sm-12 nopad text-center">
    <h3>Cosa stai aspettando?</h3></br>
	<form action="/videoteca-project/user/signup">
      <button type="submit" class="btn">Iscriviti Subito</button>
	 </form>
  </br></br></br>
  </div>
</div>

<footer class="text-center"> <br>
  <div class="col-sm-4 "></br></br><img src="https://i.imgur.com/yKodUR4.png" alt="IF" id="IF">
  </div>
  <div class="col-sm-4 ">
  <h5>Chi siamo</h5>
  <p>L'applicazione è attualmente gestita dagli sviluppatori Del Vecchio Agostino, Morelli Claudio e Morelli Massimo, 3 studenti di Ingegneria dell'Informazione che condividono la vostra passione
  per il cinema e l'animazione in generale. </br> PS Stiamo cercando dei redattori, scrivici!</p>
  </div>
  <div class="col-sm-4 " id="contacts">
  <h5>Contattaci</h5>
  <p><span class="glyphicon glyphicon-envelope"></span> ioniafilm@gmail.com</p>
  <p><span class="glyphicon glyphicon-phone"></span> +39 389 1234567</p>
  </div>
  <div class="col-sm-12">
  <p id="credito">Graphics by M.M.</p>
  </div>
</footer>

</body>
</html>
