<?php
require_once 'req.php';

/**
 * Controller CFilm
 * @package Controller
 */
class CFilm
{



    
    /**
     * La funzione show permette la visualizzazione del film da parte di un utente. 
     * 
     * @param int $id l'identificativo del film da visualizzare.
     */
    static function show($id)
    {
        if(is_numeric($id)) // se nell'url è effettivamente presente un id.
        {
            $vFilm = new VFilm(); // crea la view
            $user = CSession::getUserFromSession(); // ottiene l'utente dalla sessione
            $film = FPersistantManager::getInstance()->load(EFilm::class, $id); // carica il film dell'id
            if($film) // se il film esiste, esegue il controllo di visibilità
            {                            
               $vFilm->showFilm($user, $film); // mostra la pagina del film
            }
            else
                $vFilm->showErrorPage($user, "Non esiste alcun film con quell'id");
        }
        else
            header('Location: HTTP/1.1 405 URL non valido');
    }
    
 
}

