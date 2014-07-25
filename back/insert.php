

<?php

error_reporting(E_ALL^ E_WARNING);  

/* include_once 'securimage/securimage.php';
$securimage= new Securimage();

if($securimage->check($_POST['captcha_code'])==false) {

?>
<p>sbagliato il codice CAPTCHA. Ti preghiamo di riprovare nuovamente, grazie. :-)<br/>
<a href="http://www.area51editore.com/MeetingRoom/newsletter/index.php">TORNA ALLA NEWSLETTER</a></p>

<?
} else  {  */




if(isset($_POST['submit'])) {





$valori_selezionati=0;

$titolo=$_POST['titolo'];
$cognome=$_POST['artista'];
$collegamento=$_POST['collegamento'];
$sentimento=$_POST['scelta'];




$conn= mysqli_connect('62.149.150.212', 'Sql749552', '88ik7syf56', 'Sql749552_2');

if (mysqli_connect_errno()) {
	echo 'Errore durante la connessione al server MySQL';
	exit();
}

$query= "INSERT INTO iframe (canzone, autore, collegamento, fattore_L, sentimento) 
					VALUES ('{$titolo}','{$artista}', '{$collegamento}', '{$fattore_L}', '{$sentimento}' )";
					
$risultato= mysqli_query($conn, $query);

if(!$risultato) {
	die("il database ha qualche problema... " .mysqli_error);
}

/*
$conn= mysqli_connect('localhost', 'root', '', 'sonora');

if (mysqli_connect_errno()) {
	echo 'Errore durante la connessione al server MySQL';
	exit();
}

$query= "INSERT INTO iscrizioni (Nome, Cognome, Mail) 
					VALUES ('{$nome}','{$cognome}', '{$mail}')";
					
$risultato= mysqli_query($conn, $query);

if(!$risultato) {
	die("il database ha qualche problema... " .mysqli_error);
}

   */
         
  
}





?> 

<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
<style type="text/css">



	





.contenitore {
	font-size:25px;
	text-align:center;
	width:100%;
	font-family: 'font', Calibri, Arial, sans-serif;
	padding: 20px;
 	background: #bfd9e6;
    border-radius: 4px;
    color: #7e7975;
    box-shadow:
        0 2px 2px rgba(0,0,0,0.2),        
        0 1px 5px rgba(0,0,0,0.2),        
        0 0 0 12px rgba(255,255,255,0.4); 

display:block;
margin-left:auto;
margin-right:auto;
text-align:center;

}

</style>
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
</head>
<body>
<div class="contenitore">

	<p>Grazie, il tuo parere &egrave; stato molto utile.</p><br/>
	<p> Torna alla <a href="http://www.labnova.it">pagina iniziale</p>
</div>
</body>
<?php  



	




 //  } codice captcha

?>

</html>