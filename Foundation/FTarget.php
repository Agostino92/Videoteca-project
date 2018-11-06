<?php
/**
 * 
 * @package Foundation
 * 
 * La classe FTarget contiene stringhe da utilizzare come parametro per FPersistantManager 
 * per specificare, in funzionalita come load o exists, i tipi di query che si vogliono
 * utilizzare per una data classe. In particolare per la classe EUser.
 * 
 * EUser supporta infatti:
 * 
 *  - EXISTS_NICKNAME
 *  - EXISTS_MAIL
 *  - EXISTS_USER
 *  - LOAD_FILMLIST
 *
 *  
 * 
 *
 */
class FTarget
{
   
    
    /** verifica che un nickname non sia utilizzato */
    const EXISTS_NICKNAME = 'NickName'; 
    /** verifica che una mail non sia utilizzata */
    const EXISTS_MAIL = 'Mail'; 
    /** verifica che un utente non esiste già */
    const EXISTS_USER = 'User';
    /** verifica che un utente che segue il film non esiste già */
	const EXISTS_FOLLOWER = 'Follower';
	/** caricamento dei film di un utente*/
	const LOAD_FOLLOWING = 'Following';

    
}

