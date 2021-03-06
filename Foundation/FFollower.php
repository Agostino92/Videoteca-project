<?php

/**
 * La classe FFollower fornisce le query sql rispetto alla classe EFollower.
 * 
 * @package Follower
 */
class FFollower {
    
    /**
     * Salva un EFollower nel db
     * @return string la stringa sql per la STORE
     */
    static function storeFollower() : string 
    {
        return "INSERT INTO followers(id, id_follower)
                VALUES (:id, :id_follower) ;";
    }
    
    
    
    /**
     * Carica i following di un utente in un array di EUser
     * @return string la stringa sql per la SELECT
     */
    static function loadFollowing() : string
    {
        return "SELECT film.*
                FROM followers, film
                WHERE followers.id_follower = :id AND followers.id_follower = film.id;";
    }
    
    /**
     * Rimuove un follower
     * @return string la stringa sql per la DELETE
     */
    static function removeFollower() : string
    {
        return "DELETE FROM followers
                WHERE id = :id AND id_follower = :id2 ; ";
    }
    
    /**
     * Controlla se un utente sta seguendo un film
     * @return string la stringa sql pe l'EXISTS
     */
    static function existsFollower() : string
    {
        return "SELECT *
                FROM followers
                WHERE id = :value AND id_follower = :value2 ; ";
    }
    
    /**
     * Associa ad uno statement PDO gli attributi di un oggetto EFollower
     * @param PDOStatement $stmt lo statement contenente i campi da associare
     * @param EFollower $follower l'oggetto da cui prelevare gli attributi
     */
    static function bindValues(PDOStatement &$stmt, EFollower &$follower)
    {
        $stmt->bindValue(':id', $follower->getFilm()->getId(), PDO::PARAM_INT);
        $stmt->bindValue(':id_follower', $follower->getFollower()->getId(), PDO::PARAM_INT);
        var_dump($stmt);
    }
    
}
