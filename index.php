<?php
require_once 'req.php';

if(CSession::checkPopulateApplication())
{
    CSession::unsetCookie();
    header('Location: /Videoteca-project/index');
    //SampleUsers::generateUserPool(3, 3, 3);
    
}
elseif(file_exists('config.inc.php'))
{
    $controller = new FrontController();
    $controller->run();
}
elseif(Installation::makeInstallation()){
    CSession::populateApplication();
    header('Location: /Videoteca-project/index'); // redirect verso l'applicazione
}
?>
