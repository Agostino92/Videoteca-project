<?php

    class FDataBase
    {
        private $connection;
        
        public function __construct() 
        {
            global $config;
            $this->connect($config['mysql']['host'],$config['mysql']['user'],$config['mysql']['password'],$config['mysql']['database']) or die ('pooooo');
        }
		
	public function getConnection() {
            return $this->connection;
	}
        
        private function connect( $host, $user, $password, $database ) 
        {
            $this->connection = new mysqli($host,$user,$password,$database);
            
            if ($this->connection->connect_errno) 
          {
            echo "CONNESSIONE AL DB FALLITA: (" . $this->connection->connect_errno .") " . $this->connection->connect_error;
            return false;  
          }
		  $this->connection->set_charset('UTF8');
          return true;
        }
        
        public function invio_query_2 (string $query,$param1,$param2)
        {
            $prepared=$this->connection->prepare($query);
            if(!$prepared)
            {
                echo "Errore preparazione query";
                $this->close();
                return;
            }
            $prepared->bind_param('ss',$param1,$param2);
            $i=0;
            $prepared->execute();
            $result=$prepared->get_result();
            if($result)
            {   
                while($i<$result->num_rows)
                {
                $this->risultati[]=$result->fetch_array(MYSQLI_ASSOC);
                $i++;
                }
                $this->close();
                return $this->risultati;
            }
            else 
            {
                $this->close();
                return false;
            }           
        }       
        
        public function invio_raffinaRicerca_3 (string $query,int $param1, string $param2,string $param3)
        {
            $prepared=$this->connection->prepare($query);
            if(!$prepared)
            {
                echo "Errore preparazione query";
                $this->close();
                return;
            }
            $prepared->bind_param('sss',$param1,$param2,$param3);
            $i=0;
            $prepared->execute();
            $result=$prepared->get_result();
            if($result)
            {   
                while($i<$result->num_rows)
                {
                $this->risultati[]=$result->fetch_array(MYSQLI_ASSOC);
                $i++;
                }
                $this->close();
                return $this->risultati;
            }
            else 
            {
                $this->close();
                return false;
            }           
        }
        
        public function close() 
        {
            $this->connection->close();
        }
        
    }
?>