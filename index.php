<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire d'adresses</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Combien d'adresses souhaitez-vous ajouter ?</h2>
        <form action="process.php" method="post">
            <label for="nb_addresses">Nombre d'adresses :</label>
            <input type="number" name="nb_addresses" id="nb_addresses" required>
            <input type="submit" value="Valider">
        </form>
    </div>
</body>
</html>
