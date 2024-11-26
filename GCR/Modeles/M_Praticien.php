<?php

function getListPraticien() {

    $sql = ' SELECT PRA_NUM, concat(PRA_NOM," ",PRA_PRENOM) '
            . 'FROM praticien '
            . 'ORDER BY PRA_NOM, PRA_PRENOM ;';
    $resultat = SGBDConnect()->query($sql);
    return $resultat->fetchAll(PDO::FETCH_ASSOC);
}




function getPraticienInformations($numpraticien) {
    $connexion = SGBDConnect();
    $sql = 'SELECT PRA_NOM, PRA_PRENOM, PRA_ADRESSE, PRA_COEF, type_praticien.TYP_LIEU , Concat(PRA_CP,\' \',PRA_VILLE)
            FROM praticien
            INNER JOIN type_praticien 
            ON Praticien.PRA_TYPE = type_praticien.TYP_CODE
            WHERE praticien.PRA_NUM ="' . $numpraticien . '"';
    $info = $connexion->query($sql);
    return $info->fetchAll(PDO::FETCH_NUM);
}

function formInputText($css, $nom, $nomlabel, $size, $css2, $valeur, $lectureSeule, $required) {
    $codeHTML = '<label class="' . $css . '" for="' . $nom . '">' . $nomlabel . '</label>
<input type="text" value="' . $valeur . '" size="' . $size . '" name="' . $nom . '" class="' . $css2 . '"'
            . ($lectureSeule == TRUE ? ' readonly="readonly"' : '')
            . ($required == TRUE ? ' required="required"' : '') . '/>'
           . ' <br>';

    return $codeHTML;
}

