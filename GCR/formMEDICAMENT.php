<?php
require_once './Include/entete.inc.php';
?>

<?php
switch ($_REQUEST['action']) {
    case 20:
        require 'formChoixFamilleMedicaments.php';

        break;

    case 21 :
        $familleMedicament = isset($_REQUEST['']);
        require 'formChoixFamilleMedicaments.php';
        require 'formChoixMedicaments.php';
        break;

    case 22 :
        require 'formChoixFamilleMedicaments.php';
        require 'formChoixMedicaments.php';
        require 'formFicheMedicaments.php';

        break;
}
?>

<html>
    <head>
        <title>formulaire MEDICAMENT</title>

    </style>
</head>
<body>
    <div name="droite">
        <div name="bas" >
            <form name="formMEDICAMENT" method="post" action="recupMEDICAMENT.php">
                <h1> Pharmacopée </h1>
                <label class="titre">DEPOT LEGAL :</label><input type="text" size="10" name="MED_DEPOTLEGAL" class="zone" />
                <label class="titre">NOM COMMERCIAL :</label><input type="text" size="25" name="MED_NOMCOMMERCIAL" class="zone" />
                <label class="titre">FAMILLE :</label><input type="text" size="3" name="FAM_CODE" class="zone" />
                <label class="titre">COMPOSITION :</label><textarea rows="5" cols="50" name="MED_COMPOSITION" class="zone" ></textarea>
                <label class="titre">EFFETS :</label><textarea rows="5" cols="50" name="MED_EFFETS" class="zone" ></textarea>
                <label class="titre">CONTRE INDIC. :</label><textarea rows="5" cols="50" name="MED_CONTREINDIC" class="zone" ></textarea>
                <label class="titre">PRIX ECHANTILLON :</label><input type="text" size="7" name="MED_PRIXECHANTILLON" class="zone" />
                <label class="titre">&nbsp;</label><input class="zone" type="button" value="<"></input><input class="zone" type="button" value=">"></input>
            </form>
        </div>
    </div>
</body>
</html>





<?php
require_once'./Include/pied.inc.php';
