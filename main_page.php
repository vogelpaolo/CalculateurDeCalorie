<?php
echo "<pre>";
print_r($GLOBALS);
echo "</pre>";

echo $_POST["gender"];
?>
<h3>RESULTAT DU CALCUL DU METABOLISME DE BASE</h3>
<?php
$gender = $_POST["gender"];
$age = (int)$_POST["age"];
$poids = (int)$_POST["poids"];
$taille = (int)$_POST["taille"];

//if ($gender == "male"){
// $homme = 13.7516 * $poids+ 50.33 * $taille-6.7550 * $age + 66.473;
// echo "Vous êtes un homme vous avez ";
// echo $homme;
//}
//else{
// $femme=9.5634*$poids+184.96*$taille-4.6756*$age+655.0955;
// echo "vous êtes une femme et voici votre indice de base corporel";
// echo $femme;
//}
?>

