<?php

function formSelectDepuisRecordset($unLabel, $unName ,$id, $jeuEnregistrement, $valeuroptionnel, $unTabindex) {
    $codeHTML = '<label for="' . $unName . '">' . $unLabel . '</label>'
            . '<select name="'.$unName.'" id="' . $id . '" tabindex="' . $unTabindex . '">';
    
    foreach ($jeuEnregistrement as $unEnregistrement){
        
    }
//          while ($ligne == true) {
//            $codeHTML .='<option';
//            if ($ligne[0] == $valeuroptionnel) {
//                $codeHTML .= ' selected ="selected"';
//            }
//            $codeHTML .=' value="' . $ligne[0] . '">' . $ligne[1] . '</option>' . "\n";
//            $ligne = $jeuEnregistrement->fetch();
//        }
//    $codeHTML .='</select>';
    return $codeHTML;
}


//function formInputText($css, $nom, $nomlabel, $size, $css2, $valeur, $lectureSeule, $required) {
//    $codeHTML = '<label class="' . $css . '" for="' . $nom . '">' . $nomlabel . '</label>
//<input type="text" value="' . $valeur . '" size="' . $size . '" name="' . $nom . '" class="' . $css2 . '"'
//            . ($lectureSeule == TRUE ? ' readonly="readonly"' : '')
//            . ($required == TRUE ? ' required="required"' : '') . '/>'
//           . ' <br>';
//
//    return $codeHTML;
//}


function InputSubmit ($NameBouton, $IdBouton, $ValueBouton, $IndexBouton) {
    $codeHTML = 'input type = "submit" name="'
            .$NameBouton 
            . '" id= "'
            . $IdBouton 
            .'" value="' 
            . $ValueBouton 
            . '" tabindex="'
            . $IndexBouton .'"';

    return $codeHTML;
}

function InputHidden ($NameCtrlSaisie, $IdBouton, $ValueBouton) {
    $codeHTML = 'input type = "hidden" name="' 
            .$NameCtrlSaisie 
            .'" id ="' 
            . $IdBouton
            . '" value ="' 
            . $ValueBouton.'"';
            
    return $codeHTML;
}