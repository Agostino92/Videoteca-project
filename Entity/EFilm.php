<?php

class Film {
    public $titolo;
    public $regista;
	public $attore;
    public $descrizione;
    public $categoria;
    public $copertina;
    
    public $_commento = array();

    /**
     * Aggiungi commento
    */
    public function addCommento(ECommento $commento) {
        array_push($this->_commento, $commento);
    }

    /**
     * Restituisce la media dei voti per il film
    */
    public function getMediaVoti() {
        $somma=0;
        $voti=count($this->_commento);
        if ($voti>1) {
            foreach ($this->_commento as $commento) {
                $somma+=$commento->voto;
            }
            return $somma/$voti;
        }
        elseif (isset($this->_commento[0]->voto))
            return $this->_commento[0]->voto;
        else
            return false;
    }
	
    /**
     * Restituisce un array di commenti relativi al film
    */
    public function getCommenti() {
        return ($this->_commento);
    }
}
?>