<?php
    if(isset($_POST["submit"])){
        $username=$_POST['username'];
        $password=$_POST['password'];
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h2>Bienvenue <?=$username?> a mon projet gits<br>Votre inscription est bien enregistrée</h2>
</body>
</html>