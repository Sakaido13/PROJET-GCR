<?php
include_once 'Include\Constantes.inc.php';

if (!isset($_REQUEST['action'])){
    $_REQUEST['action'] = ACT_PRAT_VOIR_LIST ;
}

switch ($_REQUEST['action']) {
    case ACT_PRAT_VOIR_LIST:
        require './Include/Bibliotheque01.inc.php';
        require '.\Modeles\M_Praticien.php';
        $num=0;
        $resultat = getListPraticien();
        require 'Vue\V_AffichageListPrat.php';
        break;

    case ACT_PRAT_VOIR_INFO:
        require '.\Modeles\M_Praticien.php';
        $resultat = getListPraticien();
        $num = $_REQUEST['lstPrat'];
        require 'Vue\V_AffichageListPrat.php';
        require 'Vue\V_AffichageInfosPrat.php';
        break;
}
?>