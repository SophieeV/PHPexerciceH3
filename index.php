<?php 
session_start();
 ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExerciceH3</title>
</head>
<body>
<?php
$_SESSION['prenom'] = 'Jane';
$_SESSION['nom'] = 'Doe';
$_SESSION['age'] = '30';
?>


<a href="index2.php">vérifier l'âge</a>
</body>
</html>