<?php

class Installation
{
    /**
     * Effettua l'installazione dell'applicazione
     */
    static function makeInstallation()
    {
        if($_SERVER['REQUEST_METHOD']=='GET'){
            Installation::showForm();
            return false;
        }
        else{
            $var = Installation::install();
            return $var;
        }
            
    }
    
    /**
     * Funzione che mostra la form per inserire i dati dell'installazione, ovvero i parametri di
     * configurazione del dbms locale per la creazione del database. Se la versione di PHP installata
     * sulla macchina e' minore della 7.0.0 , verrà visualizzato un messaggio di errore.
     */
    private function showForm()
    {
        $smarty = SmartyConfig::configure();
        $version = true; // variabile booleana che verifica se la versione di php installata sulla macchina e' sufficiente
        if(version_compare(PHP_VERSION, '7.0.0', '<'))
            $version = false;
        $smarty->assign('version', $version);
        $smarty->display('install.tpl');
    }
    
    /**
     * Funzione che installa l'applicazione con dati inseriti dall'utente.
     */
    private function install()
    {
        try 
        {
            $address = 'localhost'; // l'installazione e' in localhost di default
            
			// costruzione parametri di accesso
            
            $admin = $_POST['admin']; 
            $pass = $_POST['pwd'];
            $database = $_POST['database'];
            $db = new PDO("mysql:host=$address;", $admin, $pass); // tentativo di connessione al dbms (default: mysql)
            $db->beginTransaction(); // inizia la transazione
            
            $query = 'DROP DATABASE IF EXISTS ' . $database . ';
                      CREATE DATABASE ' . $database . ' ;
                      USE ' . $database . ';'; // costruisce il database
            
            $query = $query . file_get_contents('tables.sql'); // aggiunge tables alla query
            $db->exec($query);
            $db->commit();
            
            //costruisce il file config.inc.php
            $file = fopen('config.inc.php', 'w');
            $script = '<?php $address= \'localhost\'; $database= \'' . $database . '\'; $admin= \'' . $admin . '\';$pass= \'' . $pass . '\'; ?>';
            fwrite($file, $script);
            fclose($file);
            
            $db=null;
            
            return true;
        }
        catch (PDOException $e)
        {
            echo "Errore : " . $e->getMessage();
            $db->rollBack();
            die;
            return false;
        }
    }
}

