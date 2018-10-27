<?php

/** La classe EGuest estende la classe padre EUser e implementa la tipologia di utente Guest */
class EGuest extends EUser
{
    /** Costruisce un utente Guest. L'id viene posto a 0 e il suo username e' semplicemente 'Visitor' */
    function __construct($id, $username)
    {
        $this->id = 0;
        $this->username = 'Visitor';
    }
}

