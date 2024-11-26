<?php
include './Include/Constantes.inc.php' ;
require './Include/SourceDonnees.inc.php';


if (!isset($_REQUEST['gestion'])){
    $_REQUEST['gestion'] = GEST_AFFICHAGE_MENU ;
}

switch ($_REQUEST['gestion']) {
    case GEST_AFFICHAGE_MENU : 
        require './Include/entete.inc.php';
        require './Include/pied.inc.php';
        break;
    
    case 10 : 
        require 'formRAPPORT_VISITE.html' ;
        break;
    
    case 20 :
        require 'formMEDICAMENT.php';
        break;
    
    case 21:
        require 'formMEDICAMENT.php';
        break;
    
    case 22:
        require 'formMEDICAMENT.php';
        break;

    
    case GEST_PRATICIEN :
        require 'Controleurs\C_Praticien.php' ;
        break;

    case 35 :
        require 'formPRATICIEN.php' ;
        break;
    
    case 40 : 
        require 'formVISITEUR.html';
        break;
    
    
    
}

