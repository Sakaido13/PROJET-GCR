<?php

?>

<form id=" formChoixMedicament" method="post" >
    <?php
    echo InputHidden('hiddenFamilleMedicament', 'hiddenFamilleMedicament', $familleMedicament);
    echo formSelectDepuisRecordset('MedicamentDelaFamille', 'listMedicamentFamille', 'listMedicamentFamille', getListMedic($familleMedicament), 0, 0);
    echo InputSubmit('butonMedicaments', 'butonMedicaments', 'ok', 5);
    ?>
</form>