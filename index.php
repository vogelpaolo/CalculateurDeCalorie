<!Doctype html>
<html>
<head>
<meta charset="utf-8"/>
</head>
<body>
<h3>Calculer le métabolisme de base:</h3>
<form action="main_page.php" method="POST">
<input type="radio" name="gender" value="male" checked> Male <br>
<input type="radio" name="gender" value="female">Female<br>

<input type="radio" name="activity" value="sedentaire" checked>Sédentaire<br>
<input type="radio" name="activity" value="leger">Léger<br>
<input type="radio" name="activity" value="modere">Modéré<br>
<input type="radio" name="activity" value="intense">Intense<br>

<label for="age">Age : </label><input name="age" type="text"><br>
<label for="taille">Taille : </label><input name="taille" type="text"><br>
<label for="poids">Age : </label><input name="poids" type="text"><br>
<input type="submit">

</form>
</body>
</html>
