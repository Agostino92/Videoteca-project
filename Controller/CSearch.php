<?php

/*La classe CSearch implementa la funzionalità di 'Ricerca'. Al suo interno presenta inoltre delle 
 costanti che definiscono chiavi (risorse da ricercare) e valori (indici rispetto a cui cercare) di default e avanzati.*/
 
class CSearch
{
    /** Chiave di default: Ricerca di film */
    const KEY_DEFAULT = 'Film';
    /** Chiave avanzata: Ricerca di utenti */
    const KEY_ADVANCED = 'User';	
    /** Valore di base: Ricerca per Genere */
    const VALUE_DEFAULT = 'Genre';
	/** Valore avanzato: Ricerca per Nome */
    const VALUE_ADVANCED = 'Name';
	/** Valore up-avanzato: Ricerca per Autore */
    const VALUE_UPPER_ADVANCED = 'Author';
        
    /*Questo metodo implementa il caso d'uso 'Ricerca' e fornisce una ricerca dei film rispetto al nome.*/
    static function simple()
    {
        $vSearch = new VSearch();
        $user = CSession::getUserFromSession();
        
        
        $string = $vSearch->getSearchValue();
        
        if($string)
        { // se l'utente ha inviato tramite GET un valore, si cerca nel DB
            $objects = FPersistantManager::getInstance()->search(CSearch::KEY_DEFAULT, CSearch::VALUE_DEFAULT, $string);
            $vSearch->showSearchResult($user, $objects, CSearch::KEY_DEFAULT, CSearch::VALUE_DEFAULT, $string);
        }
        else
            header('Location: /Videoteca-project/index');
        
    } 
	
	/**
     * Questo metodo implementa il caso d'uso 'Ricerca Avanzata'. Un utente puo' infatti ricercare
     * film o utenti in base al nome, al genere o all'autore. Questo tipo di ricerca e' possibile
     * solo per gli utenti che sono registrati.
    */
    static function advanced()
    {
        $vSearch = new VSearch();
        $user = CSession::getUserFromSession();
        
        if (get_class($user) != EGuest::class) // se l'utente non e' guest...
        { // si ricava la stringa inserita dall'utente per la ricerca
            $string = $vSearch->getSearchValue();
            
            if ($string) // se la stringa e' stata inserita
            { // si ricavano chiave e valore di ricerca scelti dall'utente
                list($key, $value)=$vSearch->getKeyAndValue();
                // se le chiavi corrispondono alle costanti...
                if(($key == CSearch::KEY_DEFAULT || $key == CSearch::KEY_ADVANCED) && ($value == CSearch::VALUE_DEFAULT || $value == CSearch::VALUE_ADVANCED || $value == CSearch::VALUE_UPPER_ADVANCED))
                { // si prelevano gli oggetti
                    $objects = FPersistantManager::getInstance()->search($key, $value, $string);
                    $vSearch->showSearchResult($user, $objects, $key, $value, $string);
                }
                else //...altrimenti si mostra un errore
                    $vSearch->showErrorPage($user, 'Chiave e valore non sono corretti');
            } 
            else // se una stringa non e' inserita, l'utente viene reindirizzato alla pagina della ricerca avanzata
            {
                $vSearch->showAdvancedSearch($user);
            }
        }
        else // se l'utente e' guest, viene reindirizzato ad una pagina di errore
            $vSearch->showErrorPage($user, "Devi aver effettuato l'accesso per effettuare la ricerca avanzata");
    }
	
}

