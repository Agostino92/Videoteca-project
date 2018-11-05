<?php

require_once 'req.php';
include_once 'View/VObject.php';

/**
 * La classe VSong si occupa dell'input-output per quanto riguarda i dati riguardanti le 
 * canzoni. Ovvero:
 * - dai dati inseriti dall'utente costruisce un oggetto ESong
 * - predispone e visualizza le varie pagine HTML per la creazione/modifica/rimozione/visualizzazione di una canzone.
 * @author gruppo2
 * @package View
 */
class VFilm extends VObject
{
    
    /**
     * Costruttore che inizializza il componente view e definisce l'array contenente gli errori
     * che possono essere commessi nella form di caricamento / modifica brani
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
     * Mostra il contenuto di una canzone.
     * @param EUser $user l'utente che sta visualizzando la pagina
     * @param ESong $song la canzone da visualizzare
     * @param bool $canSee true se l'utente puo' visualizzare la canzone, false altrimenti
     * @param bool $download true se l'utente puo' scaricare la canzone, false altrimenti
     */
    function showFilm(EUser &$user, EFilm &$film)
    {
        $this->smarty->registerObject('user', $user);
        $this->smarty->assign('film', $film);
        
        $this->smarty->assign('uType', lcfirst(substr(get_class($user), 1)));
        
        $this->smarty->display('film/film.tpl');
        
    }
    
}

