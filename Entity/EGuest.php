<?php
require_once 'inc.php';
include_once 'Entity/EObject.php';

/**
 * La classe EGuest estende la classe padre EUser e implementa la tipologia di utente Guest.
 * @author gruppo13
 * @package Entity
 *
 */
class EGuest extends EUser
{
    /**
     * Costruisce un utente Guest. L'id viene posto a 0 e il suo nickname e' semplicemente 'Visitor' .
     */
    function __construct()
    {
        parent::__construct();
        $this->id = 0;
        $this->nickname = 'Visitor';
    }
}

