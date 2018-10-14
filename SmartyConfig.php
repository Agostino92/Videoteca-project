<?php
class SmartyConfig
{
    
    static function configure() : Smarty
    {
        require('lib/Smarty/Smarty.class.php');
        
        $smarty = new Smarty();
        
        $smarty->setTemplateDir('smarty/templates');
        $smarty->setCompileDir('smarty/templates_c');
        $smarty->setCacheDir('smarty/cache');
        $smarty->setConfigDir('smarty/configs');
        
		
		$smarty->assign('name', 'Ned');
		$dipendenti = array('Rossi Mario', 'Bianchi Roberto', 'Russo Angelo','Lodi Alberto','Cassio Michela');
        $stipendi = array('1.250', '1.370', '1.650','980','1.150');
		//assegno l'array ad una variabile smarty da utilizzare nel file di //template
		$smarty->assign("dipendenti",$dipendenti);
		$smarty->assign("stipendi",$stipendi);
		//inizializzo una variabile di iterazione per un ciclo
		$smarty->assign("i",-1);
 
		//richiamo il template
		//$smarty->display("template.tpl");

        
		return $smarty;
		
    }
}

