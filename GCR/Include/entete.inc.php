<!DOCTYPE html>
<html lang = "fr">
    <head> <title>GSB : Suivi de la Visite médicale </title>
        <meta charset= UTF-8 />
        <link rel=stylesheet href= ./Styles/gcr.css> 
    </head>

    <body >
        <div id="haut" ><h1>
                <img id="img" src="Images/logo.jpg" alt = "logo gsb"/>GCR Gestion des comptes rendus des visites</h1></div>
        <div id="gauche" >
            <h2>Outils</h2>

            <ul>
                <li>Comptes-Rendus
                    <ul>
                        <li><a href="Index.php?action=10" >Nouveaux</a></li>
                        <li>Consulter</li>
                    </ul>
                </li>
                <li>Consulter
                    <ul>    
                        <li><a href="Index.php?action=20" >Médicaments</a></li>
                        <li><a href="Index.php?gestion=<?php echo GEST_PRATICIEN; ?>" >Praticiens</a></li>
                        <li><a href="Index.php?action=40" >Autres visiteurs</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div id="droite" > 
          
                