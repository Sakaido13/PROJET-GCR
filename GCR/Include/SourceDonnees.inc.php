<?php

function SGBDConnect() {
    try {
        $connexion = new PDO('mysql:host=SVRSLAM02;dbname=gsb', 'PPEgsb', 'PPEgsb');
        $connexion->query('SET NAMES UTF8');
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo 'Erreur !: ' . $e->getMessage() . '<br />';
        exit();
    }
    return $connexion;
}

//function getListPraticien() {
//
//    $sql = ' SELECT PRA_NUM, concat(PRA_NOM," ",PRA_PRENOM) '
//            . 'FROM praticien '
//            . 'ORDER BY PRA_NOM, PRA_PRENOM ;';
//    $resultat = SGBDConnect()->query($sql);
//    return $resultat->fetch(PDO::FETCH_ASSOC);
//}
//
//
//
//
//function getPraticienInformations($numpraticien) {
//    $connexion = SGBDConnect();
//    $sql = 'SELECT PRA_NOM, PRA_PRENOM, PRA_ADRESSE, PRA_COEF, type_praticien.TYP_LIEU , Concat(PRA_CP,\' \',PRA_VILLE)
//            FROM praticien
//            INNER JOIN type_praticien 
//            ON Praticien.PRA_TYPE = type_praticien.TYP_CODE
//            WHERE praticien.PRA_NUM ="' . $numpraticien . '"';
//    $info = $connexion->query($sql);
//    return $info->fetch(PDO::FETCH_ASSOC);
//}
//
//    $connexion = SGBDConnect();
//    $sql= 'SELECT FAM_CODE, FAM_LIBELLE '
//            . 'FROM FAMILLE '
//            . 'ORDER BY FAM_LIBELLE';
//    $info = $connexion->query($sql);
//    return $info;
//}


function getListMedic ($familleMedicament){
    $connexion = SGBDConnect();
    $sql= 'SELECT MED_CODE, MED_NOM '
            . 'FROM MEDICAMENT '
            . 'WHERE MED_FAMILLE =' . $familleMedicament ;
    $info = $connexion->query($sql);
    return $info;
}


function getFicheMedic ($numeroMedicament){
    $connexion = SGBDConnect();
    $sql= 'SELECT MED_NOM, MED_COMPO, MED_EFFETS, MED_CONTREINDIC, LAB_NOM '
            . 'FROM MEDICAMENT'
            . 'INNER JOIN LABORATOIRE'
            . 'ON MEDICAMENT.MED_LABO = LABORATOIRE.LAB_CODE'
            . 'WHERE MED_CODE ='.$numeroMedicament;
    $info = $connexion->query($sql);
    return $info;
}