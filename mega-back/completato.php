<?php


$nome= $_POST['nome'];
$cognome= $_POST['cognome'];
$mail= $_POST['mail'];
$voto= $_POST['voto'];



$destinatario="simone.bedetti@gmail.com";
$oggetto= "Nuovo attestato del questionario su Dreamweaver";
$messaggio="Ciao Simone,
un nuovo utente ha appena completato il questionario su Dreamweaver con successo. 
Ecco i nominativi:

Nome: ".$nome." 
Cognome: ".$cognome." 
Mail: ".$mail." 
Voto: ".$voto."/60


";

strip_tags(trim(stripslashes($messaggio)));

if(!@mail($destinatario, $oggetto, $messaggio)) {


echo"<p>qualcosa &egrave; andato storto. Riprova l'iscrizione. 
<a href='index.php'>torna indietro</a>";

} else {

?>

<!DOCTYPE html>
<html>



<html>

	<head>
	  <meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0" >
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="style.css" />
	
<script src="js/modernizr.custom.js"></script>
</head>

<body>
	<div class="container">
	<p>la mail è stata inviata. Nelle prossime settimane riceverai il tuo attestato.</p><br/>
	<p>Grazie Mille</p>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

</div>
</body>

<html>
<?php

} ?>



