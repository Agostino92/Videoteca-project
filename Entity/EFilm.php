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
    private $descrizione
	/** La locandina del film */
    private $locandina; ; 	
    /** Denota se la recensione del film può essere vista dagli utenti guest */  
    private $guest;
    /** Denota se la recensione del film può essere vista dagli utenti registrati */
    private $registered;        
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
	
    /** Controlla se il film e' visibile per tutte le tipologie di utenti */
    function isForAll() : bool
    {
        return $this->guest;
    }
          
    /** Controlla se il film e' visibile solo per chi e' registrato */
    function isForRegisteredOnly() : bool
    {
        return $this->registered;
    }
    
    /** Imposta la visibilita' per tutti gli utenti */
    function setForAll() 
    {
        $this->guest = true;
        $this->registered = true;
    }
            
    /** Imposta la visibilita' solo per chi e' registrato */
    function setForRegisteredOnly() 
    {
        $this->guest = false;
        $this->registered = true;
    }
    
    /** Nasconde il film a tutti gli utenti */
    function setHidden() 
    {
        $this->guest = false;
        $this->registered = false;
    }
 }   
