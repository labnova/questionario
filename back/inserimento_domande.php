<?php

if(isset($_POST['submit'])) {

	

	
	$conn= mysqli_connect('localhost', 'root', 'root', 'questionario');
	
	if(!$conn) { die("errore nello stabilire la connessione al database: " . mysqli_error($conn)); }
	
	$domanda= $_POST['domanda'];
	$rispostaEsatta=$_POST['rispostaEsatta'];
	
	$rispostaSbagliata1= $_POST['rispostaSbagliata1'];
	$rispostaSbagliata2= $_POST['rispostaSbagliata2'];
	$rispostaSbagliata3= $_POST['rispostaSbagliata3'];
	
	$spiegazioneSbagliata1= $_POST['spiegazioneSbagliata1'];
	$spiegazioneSbagliata2= $_POST['spiegazioneSbagliata2'];
	$spiegazioneSbagliata3= $_POST['spiegazioneSbagliata3'];
	
	
	$query="INSERT INTO domanda (domanda, rispostaEsatta) 
					VALUES ('{$domanda}','{$rispostaEsatta}') ";



	$query2= "INSERT INTO risposta (risposta1, spiegazione1, risposta2, spiegazione2, risposta3, spiegazione3 ) 

			VALUES ('{$rispostaSbagliata1}', '{$spiegazioneSbagliata1}', '{$rispostaSbagliata2}', '{$spiegazioneSbagliata2}', '{$rispostaSbagliata3}', '{$spiegazioneSbagliata3}')";
	
	
	
	$risultato= mysqli_query($conn, $query);
	$risultato2= mysqli_query($conn, $query2);


if(!$risultato) {
	die("il database ha qualche problema... " .mysqli_error($risultato));
}

if(!$risultato2) {
	die("il database ha qualche problema2... " .mysqli_error($risultato2));
}

}

?>

<!doctype html>
<html>
<head>
<style type="text/css">

input[type="text"] {
	width	:400px;
}
</style>
<meta charset="UTF-8">
<title>Inserimento Domande & Risposte</title>
</head>
<form action=" <? $_SERVER['PHP_SELF']; ?>" method="post">
<label>Inserisci la domanda</label>
<input type="text" name="domanda" placeholder="inserisci la domanda da effettuare" /> <br/>
<label>Inserisci la risposta esatta</label>
<input type="text" name="rispostaEsatta" placeholder="inserisci la risposta corretta alla domanda" /> <br/>
<!-- <label>Inserisci spiegazione</label>
<textarea name="spiegazione" placeholder="inserisci la spiegazione della risposta corretta" ></textarea> <br/> -->

<label>Inserisci la risposta sbagliata n.1</label>
<input type="text" name="rispostaSbagliata1" placeholder="inserisci una risposta sbagliata" /> 
<label>Inserisci spiegazione</label>
<textarea name="spiegazioneSbagliata1" placeholder="inserisci la spiegazione della risposta sbagliata 1" ></textarea> <br/>

<label>Inserisci la risposta sbagliata n.2</label>
<input type="text" name="rispostaSbagliata2" placeholder="inserisci una risposta sbagliata" /> 
<label>Inserisci spiegazione</label>
<textarea name="spiegazioneSbagliata2" placeholder="inserisci la spiegazione della risposta sbagliata 2" ></textarea> <br/>

<label>Inserisci la risposta sbagliata n.3</label>
<input type="text" name="rispostaSbagliata3" placeholder="inserisci una risposta sbagliata" /> 
<label>Inserisci spiegazione</label>
<textarea name="spiegazioneSbagliata3" placeholder="inserisci la spiegazione della risposta sbagliata 3" ></textarea><br/>

<input type="submit" name="submit" value="invia" />

</form>
<body>
</body>
</html>