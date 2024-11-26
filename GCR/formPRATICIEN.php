
<?php
require_once './Include/entete.inc.php';
require_once './Include/SourceDonnees.inc.php';
require_once './Include/Bibliotheque01.inc.php';
?>
<div id="bas" >
    <h1> Praticiens </h1>

<!--    <?php
    switch ($_REQUEST['action']) {
        case 30:
            $resultat = getListPraticien();
            ?>
            <form name="formListeRecherche" method="post" action="Index.php?action=35">
                <?php
                $num = 0;
                echo formSelectDepuisRecordset('Praticien : ', 'lstPrat', 'listPraticien', $resultat, $num, 10);
                ?>
                <input type="submit" name="btnSubmit" id="btnSubmit" value="OK" tabindex="30" />
            </form>
            <?php
            break;

        case 35:
            $resultat = getListPraticien();
            ?>
            <form name="formListeRecherche" method="post" action="Index.php?action=35">
                <?php
                $num = $_REQUEST['lstPrat'];
                echo formSelectDepuisRecordset('Praticien : ', 'lstPrat', 'listPraticien', $resultat, $num, 10);
                ?>
                <input type="submit" name="btnSubmit" id="btnSubmit" value="OK" tabindex="30" />
            </form>
            <form id = "formPraticien">
                <?php
                $resultat = getPraticienInformations($num);
                $ligne = $resultat->fetch(PDO::FETCH_ASSOC);
                echo formInputText('titre', 'txtNom', 'NOM :', 50, 'ZONE', $ligne['PRA_NOM'], TRUE, FALSE);
                echo formInputText('titre', 'txtPrenom', 'PRENOM :', 50, 'ZONE', $ligne['PRA_PRENOM'], TRUE, FALSE);
                echo formInputText('titre', 'txtADR', 'ADRESSE :', 50, 'ZONE', $ligne['PRA_ADRESSE'], TRUE, FALSE);
                echo formInputText('titre', 'txtVILLe', 'VILLE :', 50, 'ZONE', $ligne['Concat(PRA_CP,\' \',PRA_VILLE)'], TRUE, FALSE);
                echo formInputText('titre', 'txtCN', 'COEFF NOTORIETE :', 50, 'ZONE', $ligne['PRA_COEF'], TRUE, FALSE);
                echo formInputText('titre', 'txtLE', 'LIEU D\'EXERCICE :', 50, 'ZONE', $ligne['TYP_LIEU'], TRUE, FALSE);
                ?>
            </form>
            <?php
            break;

        default:
            break;
    }
    ?>	-->
<br></br>

</div>

<?php
require_once'./Include/pied.inc.php';
