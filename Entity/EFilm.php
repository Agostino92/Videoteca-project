<?php

require_once 'inc.php';
include_once 'Entity/EObject.php';

/**
 * @author gruppo13
 * @package Entity
 * La classe EFilm caratterizza i film su cui si basa l'applicazione. Oltre a 
 * caratteristiche generali, quali nome, autore e genere, la classe permette di impostare
 * la visibilita' del film in modo tale da proporlo a specifiche categorie di utenti.
 * Inoltre, un film racchiude al suo interno anche i commenti lasciati dagli altri utenti.
 */
class EFilm extends EObject
{
    //generics
    /**  Il nome del film */
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
    
    /**
     * Instanzia un oggetto EFilm vuoto, di default non visibile a nessuna tipologia di utente
     */
    function __construct ()
    {
        $this->recensione = new ERecensione();
        $this->author = new EUser();
        $guest = false;
        $supporter = false;
        $registered = false;
    }

/********************************************* GETTER ************************************************/
    
    /**
     * Metodo che fornisce il nome del regista che ha
     * prodotto il film
     * @return EDirector il regista del film
     */
    function getAuthor() : EDirector
    {
        return $this->author;
    }
    /**
     * Metodo che fornisce il nome del film
     * @return string il nome del film
     */
    function getName() : string
    {
        return $this->name;
    }
    /**
     * Metodo che fornisce il genere del film
     * @return string il genere del film
     */
    function getGenre() : string
    {
        return $this->genre;
    }
    
    /**
     * 
     * @return ERecensione oggetto ERecensione
     */
    function getRecensione() : ERecensione
    {
        if($this->recensione) // se la recensione e' gia presente, la restituisce
            return $this->recensione;
        else // altrimenti effettua una load dal database
        {
            $this->recensione = FPersistantManager::getInstance()->load('Recensione', $this->id);
            return $this->recensione;
        }
    }
    
/************************************* SETTER *******************************************************/
    /**
     * Metodo che imposta l'autore del film.
     * @param EDirector $author il regista che ha diretto il film.
     */
    function setAuthor(EDirector &$author)
    {
        $this->author = $author;
    }
    
    /**
     * Metodo che imposta il nome del film.
     * @param string $name il nome del film.
     */
    function setName(string $name)
    {
        $this->name = $name;
    }
    
    /**
     * Metodo che imposta il genere del film.
     * @param string $genre il genere del film.
     */
    function setGenre(string $genre)
    {
        $this->genre = $genre;
    }
    
    /**
     * crea una nuova istanza di recensione
     * @param ERecensione $recensione l'oggetto recensione da assegnare al film
     */
    function setRecensione (Recensione &$recensione)
    { 
       $this->recensione = $recensione;
    }
    
/*************************************** PRIVACY SETTINGS *******************************************/    

    /**
     * Metodo che verifica se il film e' nascosto a tutte le tipologie di utenti.
     * @return bool true se il film e' nascosto, false altrimenti.
     */
    function isHidden() : bool
    {
        return !$this->supporter;
    }
    
    /**
     * Controlla se il film e' visibile per tutte le tipologie di utenti
     * @return bool true se le due categorie di utenti (guest, registrati) 
     * possono vedere i film
     */
    function isForAll() : bool
    {
        return $this->guest;
    }
    
      
    /**
     * Controlla se il film e' visibile solo per chi e' registrato
     * @return bool
     */
    function isForRegisteredOnly() : bool
    {
        return $this->registered;
    }
    
    /**
     * Imposta la visibilita' per tutti gli utenti.
     */
    function setForAll() 
    {
        $this->guest = true;
        $this->registered = true;
    }
    
        
    /**
     * Imposta la visibilita' solo per chi e' registrato.
     */
    function setForRegisteredOnly() 
    {
        $this->guest = false;
        $this->registered = true;
    }
    
    /**
     * Nasconde il film a tutti gli utenti
     */
    function setHidden() 
    {
        $this->guest = false;
        $this->registered = false;
    }
    
/*************************************** VALIDATION *******************************************/
    /**
     * Funzione che verifica che il nome del film sia valido. Un nome si intende valido se 
     * contiene solamente numeri, lettere e spazi
     * @return bool true se il nome e' corretto, false altrimenti
     */
    function validateName() : bool
    {
        if (preg_match("/^[a-zA-Z0-9][a-zA-Z0-9 -]+$/", $this->name)) // solo lettere, numeri e spazi
            return true;
        else 
            return false;
    }
    
    /**
     * Funzione che verifica che il nome del film sia valido. Un nome si intende valido se
     * contiene solamente numeri, lettere e spazi
     * @return bool true se il nome e' corretto, false altrimenti
     */
    function validateGenre(): bool
    {
        if (preg_match("/^[a-zA-Z0-9][a-zA-Z0-9 -]+$/", $this->genre)) // solo lettere, numeri e spazi
            return true;
        else
            return false;
    }
    
   