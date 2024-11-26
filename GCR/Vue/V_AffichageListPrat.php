
<form name="formListeRecherche" method="post" action="Index.php?gestion=<?php echo GEST_PRATICIEN; ?>&action=<?php echo ACT_PRAT_VOIR_LIST;?>">
                <?php
                $num = 0;
                echo formSelectDepuisRecordset('Praticien : ', 'lstPrat', 'listPraticien', $resultat, $num, 10);
                ?>
                <input type="submit" name="btnSubmit" id="btnSubmit" value="OK" tabindex="30" />
            </form>?>