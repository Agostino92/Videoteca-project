<?php
        
	require_once '../Foundation/FDatabaseCartaDiCredito.php';
		
    class ECartaDiCredito
       {
	    private $nomeTitolare;
		private $numero;
            private $cognomeTitolare;
            private $saldo;
            private $cvv;
            private $dataScadenza;
        
            public function getNomeTitolare() {
                return $this->nomeTitolare;
            }
            public function setNomeTitolare($x) {
                $this->nomeTitolare = $x;
            }
			public function getNumero() {
                return $this->numero;
            }
            public function setNumero($x) {
                $this->numero = $x;
            }
			public function getCognomeTitolare() {
				return $this->cognomeTitolare;
			}
			public function setCognomeTitolare($x) {
				$this->cognomeTitolare = $x;
			}
			public function getSaldo() {
				return $this->saldo;
            }
			public function setSaldo($x) {
				$this->saldo = $x;
			}
			public function getCvv() {
				return $this->cvv;
				}
			public function setCvv($x) {
				$this->cvv = $x;
			}
			public function getDataScandenza() {
				return $this->dataScadenza;
			}
			public function setDataScadenza($x) {
				$this->dataScadenza = $x;
			}
                
			function __construct()
			{
			}
               
			public function pagare(string $_numeroCartaDebitore,string $_numeroCartaCreditore,int $_costo,string $_cvv,string $_nome_titolare,string $_cognome_titolare,string $_scadenza)
			{
                        $database=new FDatabaseCartaDiCredito;
                        $success=$database->transazione($_numeroCartaDebitore,$_numeroCartaCreditore,$_costo,$_cvv,$_nome_titolare,$_cognome_titolare,$_scadenza);
                        return $success;
                        }
       }
?>
        