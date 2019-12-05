<?php
// Déclaration de la fonction identity avec des paramètres entre parenthèse
function identity($name, $firstname, $age){
  // return pour envoyer à l'ordi avec une concaténation
  return 'Bonjour ' . $firstname . ' ' .$name . ', tu as ' . $age . ' ans';
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8"/>
  <title>PHP4Ex4</title>
</head>
<body>
  <!-- Affichage de la fonction identity et les paramètres entre parenthèse -->
  <p><?php echo identity('Gernigon', 'Pauline', 21); ?></p>
</body>
</html>
