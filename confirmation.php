<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $db_host = "5000";
    $db_user = "Alami";
    $db_password = "12345";
    $db_name = "Livraison";

    $conn = new mysqli($db_host, $db_user, $db_password, $db_name);

    if ($conn->connect_error) {
        die("La connexion à la base de données a échoué : " . $conn->connect_error);
    }

    echo "<h2>Confirmez vos informations</h2>";


    $insert_query = "INSERT INTO adresses (street, street_nb, type, city, zipcode) VALUES (saint Leonard, 66, livraison, New york, 123645)";

  
    $stmt = $conn->prepare($insert_query);
    $stmt->bind_param("sisss", $street, $street_nb, $type, $city, $zipcode);


    for ($i = 1; $i <= $nb_addresses; $i++) {
        $street = substr($_POST["street_$i"], 0, 50); 
        $street_nb = (int)$_POST["street_nb_$i"]; 
        $type = substr($_POST["type_$i"], 0, 20); 
        $city = $_POST["city_$i"]; 
        $zipcode = substr($_POST["zipcode_$i"], 0, 6); 

        
        $stmt->execute();
    }

 
    $stmt->close();
    $conn->close();

    echo "<a href='index.php'>Modifier les informations</a>";
} else {
    header("Location: index.php");
}
?>


