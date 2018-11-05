<?php
/**
 * La classe FFilm fornisce query rispetto alla classe EFilm
 * @package Foundation
 */
 
class FFilm {
	
    
	
	/**
     * Ottieni un film dal database ricercato per nome
     * @return string la query sql per la SELECT
     */
    static function searchFilmByName() : string
    {
        return "SELECT * 
                FROM film
                where name= film.name"; //query sql
    }
	
	/**
     * Ottieni il/i film dal database ricercati per genre
     * @return string la query sql per la SELECT
     */
    static function searchFilmByGenre() : string
    {
        return "SELECT * 
                FROM film
                where genre= film.genre"; //query sql
    }
	
	
	/**
     * Ottieni il/i film dal database ricercati per author
     * @return string la query sql per la SELECT
     */
    static function searchFilmByAuthor() : string
    {
        return "SELECT * 
                FROM film
                where author= film.author"; //query sql
    }
	
     /**
     * Seleziona sul database i diversi generi esistenti per i film
     *
     * @return array
     */
    public function getGenre(){
        $query="SELECT DISTINCT `genre` 
                FROM `film` " ;
        $this->query($query);
        return $this->getResultAssoc();
    }
	
	/**
     * Elimina un film dal db . Funzione esclusivamente del moderatore (da testare e vedere bene in seguito)
     * @param PDO $db la connessione al dbms
     * @param int $id il film da eliminare
     */
    static function removeFilm() : string
    {
        return " DELETE
                 FROM film 
                 WHERE id= :id ;"; //query sql
    }
	
	/**
     * Cancella tutte le entry di una query. Usata a scopo di debug.
     * @param PDO $db
     */
    static function emptyTable (PDO &$db)
    {
        $db->beginTransaction();                         //inizio transazione
        
        $stmt = $db->prepare("TRUNCATE TABLE film;");    //prepara lo statement
        
        $stmt->execute();
        
        $db->commit();    
    }
	/**
     * Associa ai campi della query i corrispondenti attributi dell'oggetto EFilm.
     * @param PDOStatement $stmt da cui prelevare i campi
     * @param EFilm $obj da cui prelevare gli attributi
     */
    static function bindValues(PDOStatement &$stmt, EFilm &$obj) 
    {
        $stmt->bindValue(':codice', $obj->getCodice(), PDO::PARAM_INT);
        $stmt->bindValue(':name', $obj->getName(), PDO::PARAM_STR);
		$stmt->bindValue(':author', $obj->getAuthor(), PDO::PARAM_STR);
        $stmt->bindValue(':genre', $obj->getGenre(), PDO::PARAM_STR);
		$stmt->bindValue(':descrizione', $obj->getDescrizione(), PDO::PARAM_STR);
		$stmt->bindValue(':locandina', $obj->getLocandina(), PDO::PARAM_STR);
		
        
    }
	
	
	/**
     * Ottieni un oggett EFilm a partire dai valori di una tupla ricevuta dal dbms
     * @param array $row la tupla ricevuta dal dbms
     * @return EFilm l'oggetto EFilm risultato dell'operazione
     */
    static function createObjectFromRow($row) : Efilm
    {
         
        // creazione dell'oggetto Efilm
        $film = new EFIlm(); 
        $film->setCodice($row['codice']);
        $film->setName($row['name']);
        $film->setAuthor($row['author']);
        $film->setGenre($row['genre']);
		$film->setDescrizione($row['descrizione']);
		$film->setLocandina($row['locandina']);
        
        // restituisce il film
        return $film; 
    }      

}

?>
