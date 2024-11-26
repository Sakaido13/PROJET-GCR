

            <form id = "formPraticien">
                <?php
                $resultat = getPraticienInformations($num);
                echo formInputText('titre', 'txtNom', 'NOM :', 50, 'ZONE', $resultat['PRA_NOM'], TRUE, FALSE);
                echo formInputText('titre', 'txtPrenom', 'PRENOM :', 50, 'ZONE', $resultat['PRA_PRENOM'], TRUE, FALSE);
                echo formInputText('titre', 'txtADR', 'ADRESSE :', 50, 'ZONE', $resultat['PRA_ADRESSE'], TRUE, FALSE);
                echo formInputText('titre', 'txtVILLe', 'VILLE :', 50, 'ZONE', $resultat['Concat(PRA_CP,\' \',PRA_VILLE)'], TRUE, FALSE);
                echo formInputText('titre', 'txtCN', 'COEFF NOTORIETE :', 50, 'ZONE', $resultat['PRA_COEF'], TRUE, FALSE);
                echo formInputText('titre', 'txtLE', 'LIEU D\'EXERCICE :', 50, 'ZONE', $resultat['TYP_LIEU'], TRUE, FALSE);
                ?>
            </form>