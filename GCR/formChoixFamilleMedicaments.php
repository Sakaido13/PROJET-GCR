<?php

?>


<form id = "formChoixFamilleMedicament" method="post" >
    <?php
    echo formSelectDepuisRecordset('FamilleMedicament', 'ListFamilleMedicaments', 'iDFamilleMedicaments', getFamilleMedic(), $familleMedicament, );
    echo InputSubmit('btnSUBMITFamille','btnSUBMITFamille','ok', 5);
    ?>
    
</form>