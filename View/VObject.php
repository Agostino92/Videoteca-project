<?php

/*La classe VObject contiene gli attributi e le funzioni base adoperati in tutto il package View.*/
class VObject
{
    /*L'oggetto smarty incaricato di visualizzare i template*/
    protected $smarty; 

    /*Un array avente come indice i campi delle form di cui controllare gli errori. Ogni classe lo definira' secondo le sue esigenze*/
    protected $check; 

    protected function __construct()
    {
        $this->smarty = SmartyConfig::configure();
    }
    
    /*Mostra la pagina di errore*/
    function showErrorPage(EUser &$user, string $error)
    {
        $this->smarty->registerObject('user', $user);
        $this->smarty->assign('uType', lcfirst(substr(get_class($user), 1)));
        $this->smarty->assign('error', $error);
        $this->smarty->display('errorPage.tpl');
    }
}

