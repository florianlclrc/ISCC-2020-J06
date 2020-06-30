<html>
    <head>
        <title>PHP - EX_01</title>
    </head>

    <body>
        <?php
            $nom_produit ="T-shirt femme";
            $couleur = "Rouge";
            $prix = "15.50";
            $disponible ="true";
            $quantite = "10";
            include "affichage.php";
            afficher_produit($nom_produit, $couleur, $prix, $disponible);
            include "gestion-produits.php";
            $quantite= achat($quantite, 5);
            $disponible= update_dispo($quantite);
            afficher_produit($nom_produit, $couleur, $prix, $disponible);
            $quantite= achat($quantite, 5);
            $disponible= update_dispo($quantite);
            afficher_produit($nom_produit, $couleur, $prix, $disponible);
            $quantite= restockage($quantite, 5);
            $disponible= update_dispo($quantite);
            afficher_produit($nom_produit, $couleur, $prix, $disponible);
            
        ?>
    </body>
</html>