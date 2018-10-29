<?php

/*La classe CSearch implementa la funzionalità di 'Ricerca'. Al suo interno presenta inoltre delle 
 costanti che definiscono chiavi (risorse da ricercare) e valori (indici rispetto a cui cercare) di default e avanzati.*/
 
class CSearch
{
    /** Chiave di default: Ricerca di film */
    const KEY_DEFAULT = 'Film';
    /** Valore base: Ricerca per Nome */
    const VALUE_DEFAULT = 'Name';
        
    /*Questo metodo implementa il caso d'uso 'Ricerca' e fornisce una ricerca dei film rispetto al nome.*/
    static function SimpleSearch()
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
}

