<?php

require_once 'req.php';
include_once 'View/VObject.php';

/**
 * La classe VFilm si occupa dell'input-output per quanto riguarda i dati riguardanti  
 * film. Ovvero:
 * - dai dati inseriti dall'utente costruisce un oggetto EFilm
 * - predispone e visualizza le varie pagine HTML per la creazione/modifica/rimozione/visualizzazione di una canzone.
 * 
 * @package View
 */
class VFilm extends VObject
{
    
    /**
     * Costruttore che inizializza il componente view e definisce l'array contenente gli errori
     * che possono essere commessi nella form di caricamento film
     */
    function __construct()
    {
        parent::__construct();
        // l'array è istanziato con indici i campi delle varie form, i cui valori sono di default a false (no errori)
        $this->check = array(
            'name' => true,
            'genre' => true,
            'author' => true,
        );
    }
   
    
    /**
     * Mostra il contenuto di un film.
     * @param EUser $user l'utente che sta visualizzando la pagina
     * @param EFilm $film il film da visualizzare
     * 
     */
    function showFilm(EUser &$user, EFilm &$film)
    {
        $this->smarty->registerObject('user', $user);
        $this->smarty->assign('film', $film);
        
        $this->smarty->assign('uType', lcfirst(substr(get_class($user), 1)));
        
        $this->smarty->display('film/film.tpl');
        
    }
    
}

