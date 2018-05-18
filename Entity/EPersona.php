<?php

 /**
 *@access public
 * @package Entity
 */
         
class EPersona
{
     /**
     * @AttributeType string
     */
    public $nome;
    /**
     * @AttributeType string
     */
    public $cognome;
    /**
     * @AttributeType string
     */
    public $email;
    /**
     * Restituisce il valore della variabile Nome dell'entità EPersona
     *
     * @return string
     */
    public function getNome ()
    {
        return $this->nome;
    }
    /**
     * Restituisce il valore della variabile Cognome dell'entità EPersona
     *
     * @return string
     */
    public function getCognome ()
    {
        return $this->cognome;
    }
    /**
     * Restituisce il valore della variabile Email dell'entità EPersona
     *
     * @return string
     */
    public function getEmail ()
    {
        return $this->email;
    }
}
