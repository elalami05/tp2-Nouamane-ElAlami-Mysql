<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Adresses</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nb_addresses = $_POST["nb_addresses"];
            
            echo "<h2>Entrez les adresses</h2>";
            echo "<form action='confirmation.php' method='post'>";
            
            for ($i = 1; $i <= $nb_addresses; $i++) {
                echo "<div class='address'>";
                echo "<h3>Adresse $i</h3>";
                echo "<label for='street_$i'>Rue :</label>";
                echo "<input type='text' name='street_$i' id='street_$i' maxlength='50' required>";

                echo "<label for='street_nb_$i'>Numéro :</label>";
                echo "<input type='number' name='street_nb_$i' id='street_nb_$i' required>";

                echo "<label for='type_$i'>Type :</label>";
                echo "<select name='type_$i' id='type_$i' maxlength='20' required>";
                echo "<option value='livraison'>Livraison</option>";
                echo "<option value='facturation'>Facturation</option>";
                echo "<option value='autre'>Autre</option>";
                echo "</select>";

                echo "<label for='city_$i'>Ville :</label>";
                echo "<select name='city_$i' id='city_$i' required>";
                echo "<option value='Montreal'>Montréal</option>";
                echo "<option value='Laval'>Laval</option>";
                echo "<option value='Toronto'>Toronto</option>";
                echo "<option value='Quebec'>Québec</option>";
           
                echo "</select>";

                echo "<label for='zipcode_$i'>Code postal :</label>";
                echo "<input type='text' name='zipcode_$i' id='zipcode_$i' pattern='\d{6}' required>";

                echo "</div>";
            }

            echo "<input type='submit' value='Valider'>";
            echo "</form>";
        } else {
   
            header("Location: index.php");
        }
        ?>
    </div>
</body>
</html>
