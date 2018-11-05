<?php

class EFilm 
{
    /** Il codice del film */
    private $codice; 
	/** Il nome del film */
    private $name;          
    /** L'autore del film */
    private $author;        
    /** Il genere del film */
    private $genre; 	
    /** La descrizione del film */
    private $descrizione;
	/** La locandina del film */
<<<<<<< HEAD
    private $locandina;  	   
=======
    private $locandina; 
>>>>>>> dbc69086bfacb9878477cfbacb9afcffed180481
    /** ERecensione che rappresenta la recensione del film */
    private $recensione; 
    
    /* 
	Instanzia un oggetto EFilm vuoto, di default non visibile a nessuna tipologia di utente 
    function __construct ()
    {
        $this->author = new EUser();
        $guest = false;
        $supporter = false;
        $registered = false;
    }
    */
   
    /** Metodo che fornisce il nome del regista che ha prodotto il film */
    function getAuthor()
    {
        return $this->author;
    }
    /** Metodo che fornisce il nome del film */
    function getName() 
    {
        return $this->name;
    }
    /** Metodo che fornisce il genere del film */
    function getGenre() 
    {
        return $this->genre;
    }
    
    /** Metodo che fornisce il codice di un film */
    function getCodice() 
    {
        return $this->codice;
    }
	
	/** Metodo che fornisce la descrizione di un film */
    function getDescrizione() 
    {
        return $this->descrizione;
    }
	
	/** Metodo che fornisce la locandina di un film */
    function getLocandina() 
    {
        return $this->locandina;
    }
	
    /** Metodo che fornisce la recensione di un film */
    function getRecensione() 
    {
        return $this->recensione;
    }
	
    /** Metodo che imposta l'autore del film */
    function setAuthor($author)
    {
        $this->author = $author;
    }
    
    /** Metodo che imposta il nome del film */
    function setName($name)
    {
        $this->name = $name;
    }
    
    /** Metodo che imposta il genere del film */
    function setGenre($genre)
    {
        $this->genre = $genre;
    }
    
    /** Metodo che crea una nuova istanza di recensione */
    function setRecensione ($recensione)
    { 
       $this->recensione = $recensione;
    }
	
	/** Metodo che imposta il codice del film */
    function setCodice($codice)
    {
        $this->codice = $codice;
    }
         
    /** Metodo che imposta la descrizione del film */
    function setDescrizione($descrizione)
    {
        $this->descrizione = $descrizione;
    }
	
	/** Metodo che imposta la locandina del film */
    function setLocandina($locandina)
    {
        $this->locandina = $locandina;
    }
	
<<<<<<< HEAD
   
=======
    
>>>>>>> dbc69086bfacb9878477cfbacb9afcffed180481
    /** Nasconde il film a tutti gli utenti */
    function setHidden() 
    {
        $this->guest = false;
        $this->registered = false;
    }
 }   
