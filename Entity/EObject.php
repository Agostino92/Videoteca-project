<?php
require_once 'req.php';

/*La classe EObject caratterizza un oggetto Entity a partire dal suo Id*/
class EObject
{
    /*l'id che identifica l'oggetto.*/
    protected $id; 
    
    /*Costruisce un oggetto vuoto.*/
    protected function __construct(int $id=null) {
        $this->id = $id;
    }
    
    /*Ritorna l'identifier dell'oggetto*/
    function getId() : int {
        if(!$this->id)
            return 0;
        else return $this->id;
    }
    
    /*Setta l'identificativo dell'oggetto Entity*/
    function setId(int $id) {
        $this->id = $id;
    }
    
}

