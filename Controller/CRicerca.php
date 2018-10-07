<?php

	require_once '../Entity/EFilm.php';
	
    class CRicerca
    {
        
        public static function cercaFilm(string $name)
        {
            $_film=new EFilm;
            $risultati_film=$_film->cerca($name);            
            return $risultati_film;
        }
		
		public static function cercaFilmMigliorata(string $author,int $genre)
        {
            $_film=new EFilm;
            $risultati_film=$_film->miglioraRicerca($author,$genre);            
            return $risultati_film;
        }

    }
?>