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
<?php echo 'bonjour '.$_SESSION['prenom']. ' ' .$_SESSION['nom']; ?> </br>
<?php echo 'tu as ' .$_SESSION['age'] .' ans';?>
</body>
</html>