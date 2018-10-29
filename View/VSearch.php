<?php
require_once 'req.php';
include_once 'View/VObject.php';

/*La classe VSearch si occupa dell'input-output per quanto riguarda la funzionalità Ricerca*/

class VSearch extends VObject
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*Restituisce il valore inserito dall'utente nella barra da ricerca.*/
    function getSearchValue() : string 
    {
        $string = "";
        if(isset($_GET['str']))
        { // se l'utente ha inviato tramite GET un valore di ricerca, si ricava la stringa
            $string = $_GET['str'];
        }
        return $string;
    }
           
    /*Mostra i risultati della ricerca
	EUser $user utente della sessione, $array risultati della ricerca (NULL se nessun oggetto e' stato costruito),
    $key chiave di ricerca adoperata, $value valore di ricerca adoperato, $string dato ricercato dall'utente*/
	 
    function showSearchResult(EUser &$user, $array, string $key, string $value, string $string)
    {
        $this->smarty->assign('key', $key);
        $this->smarty->assign('value', $value);
        $this->smarty->assign('string', $string);
        
        $this->smarty->registerObject('user', $user);
        $this->smarty->assign('uType', lcfirst(substr(get_class($user), 1)));
  
        $this->smarty->assign('array', $array);
        
        //mostro il contenuto della pagine
        $this->smarty->display('search/search.tpl');
    }
}

