<?php

class EFilm 
{
    /** Il nome del film */
    private $name;          
    /** L'autore del film */
    private $author;        
    /** Il genere del film */
    private $genre; 	   
    /** Denota se la recensione del film può essere vista dagli utenti guest */  
    private $guest;
    /** Denota se la recensione del film può essere vista dagli utenti registrati */
    private $registered;        
    /** ERecensione che rappresenta la recensione del film */
    private $recensione; 
    
    /* Instanzia un oggetto EFilm vuoto, di default non visibile a nessuna tipologia di utente */
    function __construct ()
    {
        $this->recensione = new ERecensione();
        $this->author = new EUser();
        $guest = false;
        $supporter = false;
        $registered = false;
    }

   
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
