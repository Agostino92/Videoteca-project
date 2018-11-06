<?php
require_once 'req.php';

/**
 * La classe CFollower implementa la funzionalità 'Aggiungi film alla lista'. Le funzioni follow/unfollow
 * permettono ad un utente di aggiungere/rimuovere dalla lista un film.
 * @package Controller
 */
class CFollower
{
    /**
     * La funzione follow permette di aggiungere alla lista un film. L'utente, se effettivamente non ha già
	 * il film in lista, verrà associato ad esso attraverso un oggetto EFollower, 
     * che salverà tale associazione nel database.
     * @param int $id l'identificativo del film da aggiungere
     */
    static function follow($id)
    {
        $vUser = new VUser();
        $user = CSession::getUserFromSession();
        
        if (! is_a($user, EGuest::class)) 
        { // se l'utente non e' guest
            if (is_numeric($id)) 
            { // se l'url contiene un id
                $followFilm = FPersistantManager::getInstance()->load(EFilm::class, $id); // si carica il film
                if ($followFilm) // se il film esiste
                { // si costruisce l'oggetto follower
                    $follower = new EFollower();
                    $follower->setFilm($followFilm);
                    $follower->setFollower($user);

                        if (! $follower->exists()) // se l'utente non ha già il film
                        { // salva l'associazione nel database
                            FPersistantManager::getInstance()->store($follower);
                            header('Location: /videoteca-project/user/profile/' . $user->getId()); // redirect al profilo
                        } 
                        else
                            $vUser->showErrorPage($user, 'Hai già in lista il film' . $followFilm->getName() . '!');
                }
            }
            else 
                $vUser->showErrorPage($user, 'Indirizzo non valido');
        }
        else
            $vUser->showErrorPage($user, 'Devi essere un utente della videoteca per aggiungere un film alla lista!');
    }
    
    
    /**
     * La funzione unfollow permette di smettere di seguire un utente. Se l'associazione tra i due
     * utenti è effettivamente presente, verrà regolata attraverso un oggetto EFollower,
     * che rimuoverà tale associazione nel database.
     * @param int $id l'identificativo del musicista da non seguire
     */
    static function unfollow($id)
    {
        $vUser = new VUser();
        $user = CSession::getUserFromSession();
        
        if (! is_a($user, EGuest::class))
        { // se l'utente non e' un guest
            if (is_numeric($id))
            {
                $followFilm = FPersistantManager::getInstance()->load(EFilm::class, $id);
                if ($followFilm)
                { // se l'utente esiste, si costruisce l'oggetto follower
                    $follower = new EFollower();
                    $follower->setFilm($followFilm);
                    $follower->setFollower($user);

                        if ($follower->exists())  // se l'utente ha il film
                        { // se i due utenti si seguono, si rimuove la corrispondenza dal database
                            FPersistantManager::getInstance()->remove(EFollower::class, $follower->getUser()->getId(), $follower->getFollower()->getId());
                            header('Location: /deepmusic/user/profile/' . $user->getId());
                        } 
                        else
                            $vUser->showErrorPage($user, 'Non hai in lista il film ' . $followFilm->getName() . '!');

               }
            }
            else
                $vUser->showErrorPage($user, 'Indirizzo non valido!');
        }
        else
            $vUser->showErrorPage($user, 'Devi essere un utente della videoteca per rimuovere un film dalla lista!');
    }
}

