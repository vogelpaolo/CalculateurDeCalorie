<?php
echo "<pre>";
print_r($GLOBALS);
echo "</pre>";
?>
<h3>RESULTAT DU CALCUL DU METABOLISME DE BASE</h3>
<?php
$gender = $_POST["gender"];
$age = (int)$_POST["age"];
$poids = (int)$_POST["poids"];
$taille = (int)$_POST["taille"];
$activity=["sedentaire"=>1.375,"leger"=>1.56,"moderer"=>1.64,"intense"=>1.82];

foreach ($activity as $act=>$a){
echo $act."<br>";
if( $act== $_POST["activity"]){
$monActivity=$act;
$monActivityValue=$a;
}
}
echo $monActivityValue."et mon activité".$monActivity;
print_r($activity);

if ($gender == "male"){
  $homme = 13.7516 * $poids+ 500.33 * $taille-6.7550 * $age + 66.473;
  echo "Vous êtes un homme vous avez ";
  echo $homme;
}
else{
 $femme=9.5634*$poids+184.96*$taille-4.6756*$age+655.0955;
 echo "vous êtes une femme et voici votre indice de base corporel";
 echo $femme;
}
?>
<H3>VOTRE BESOIN CALORIFIQUE JOURNALIER EST DE :</H3>
<?php 
if ($gender=="male"){
$BesoinDay = $homme * $monActivityValue;
echo "Voici votre besoin journalier en kilocalorie : ".$BesoinDay;
}
?>



