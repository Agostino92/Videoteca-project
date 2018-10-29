<?php
/**
 * 
 * @package Foundation
 * 
 * La classe FTarget contiene stringhe da utilizzare come parametro per FPersistantManager 
 * per specificare, in funzionalita come load o exists, i tipi di query che si vogliono
 * utilizzare per una data classe. In particolare:
 * 
 * EUser supporta:
 * 
 *  - EXISTS_NICKNAME
 *  - EXISTS_MAIL
 *  - EXISTS_USER
 *  - LOAD_FILMLIST
 *
 *  
 * EFilm supporta:
 * 
 *  - EXISTS_FILM
 *   
 *  
 *
 */
class FTarget
{
   
    
    /** caricamento della lista film personale di un utente */
    const LOAD_FILMLIST = 'Filmlist'; 
    /** verifica che un nickname non sia utilizzato */
    const EXISTS_NICKNAME = 'NickName'; 
    /** verifica che una mail non sia utilizzata */
    const EXISTS_MAIL = 'Mail'; 
    /** verifica che un utente non esiste già */
    const EXISTS_USER = 'User';
    
}

