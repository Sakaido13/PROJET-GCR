<?php ?>

<<form id='formficheMedicament' method="post">
    <?php
    $ligne= getFicheMedic($familleMedicament)->fetch(PDO::FETCH_ASSOC);
    echo formInputText('Titre', 'NOM COMMERCIALE', 'NOM COMMERCIALE', 25, 'Zone', $ligne['MED_NOM'], True, false);
    
    ?>

</form>