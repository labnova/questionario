<?php

echo '<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="style2.css" />';

function calcolaPunteggio($pun) {

		if ($pun=0) $pun=0; 


		if ($pun>0 && $pun<=3) $pun=1;
		
		if ($pun>3 && $pun>=6) $pun=2;
	
		if ($pun>6 && $pun>=8) $pun=3;
		
		if ($pun>8 && $pun>=10) $pun=4;
	
		
	

	return $pun;

 
}  

echo "<pre>";
print_r($punteggio=$_POST['punteggio']);
echo "</pre>";



$testing=$_POST['test'];


//$punteggio=calcolaPunteggio($punteggio);


var_dump($punteggio);


var_dump($testing);




$voto="";

switch ($punteggio) {

			
			case '0':
			echo "<div class='row col-md-4 punteggio'>";
			echo "<form  action='index.php' method='post'>";
			echo "<p>Purtroppo non hai risposta in maniera corretta a nessuna delle domande.</p><br/>";
			echo "<input type='submit' class='btn btn-2 btn-2a' name='ripeti' value='ripeti il test'> ";
			echo "</form>";
			echo "</div>";
			
			break;


			 case '1'; case '2'; case '3':
			$media=calcolaMedia($punteggio);
			$voto="Disastro";
			echo "<div class='row col-md-4 punteggio'>";
			echo "<form  action='index.php' method='post'>";
			echo "<p>$voto</p>";
			echo "<p>Il tuo punteggio &egrave; </p><div class='numero'> " .$media."/60</div><br/>";
			echo "<p>non hai superato la prova. Studia di pi&ugrave;.</p><br/>";
			echo "<input type='submit' class='btn btn-2 btn-2a' name='ripeti' value='ripeti il test'> ";
			echo "</form>";
			echo "</div>";
			
			break;

			case '4'; case '5'; case '6':
			$voto="Insufficiente";
			$media=calcolaMedia($punteggio);
			echo "<div class='punteggio'>";
			echo "<form  action='index.php' method='post'>";
			echo "<p>$voto</p>";
			echo "<p>Il tuo punteggio &egrave;</p><div class='numero'>  " .$media."/60</div><br/>";
			echo "<p>non hai superato la prova, ma hai delle potenzialit&agrave;.</p><br/>";
			echo "<input type='submit' class='btn btn-2 btn-2a' name='ripeti' value='ripeti il test'> ";
			echo "</form>";
			echo "</div>"; 
			
			break; 

			case '7'; case '8':
			$voto="Buono";
			$media=calcolaMedia($punteggio);
			echo "<div class='punteggio'>";
			echo "<form action='completato.php' method='post'>";
			echo "<p>$voto</p>";
			echo "<p>Il tuo punteggio &egrave; </p><div class='numero'> " .$media."/60</div><br/>";
			echo "<p>Complimenti!<br/>Inserisci il tuo nome, cognome e la mail per ricevere l'attestato.  ";
			echo "<br/><br/>";
			echo "<input type='text' required='true' name='nome' placeholder='inserisci il nome' /><br/>";
			echo "<input type='text' required='true' name='cognome' placeholder='inserisci il cognome' /><br/>";
			echo "<input type='email' required='true' name='mail' placeholder='inserisci la mail' /><br/>";
			echo "<input type='hidden'  name='voto' value='$media'  /><br/>";
			echo "<input type='submit' class='btn btn-2 btn-2a' name='completato' value='Invia'> ";
			echo "</form>";
			echo "</div>";
			
			break;

			case '9'; case '10':
			$voto="Eccellente";
			$media=calcolaMedia($punteggio);
			echo "<div class='punteggio'>";
			echo "<form  action='completato.php' method='post'>";
			echo "<p>$voto</p>";
			echo "<p>Il tuo punteggio &egrave;</p><div class='numero'>  " .$media."/60</div><br/>";
			echo "<p>Complimenti!<br/>Inserisci il tuo nome, cognome e la mail per ricevere l'attestato.";
			echo "<br/><br/>";
			echo "<input type='text' required='true' name='nome' placeholder='inserisci il nome' /><br/>";
			echo "<input type='text' required='true' name='cognome' placeholder='inserisci il cognome' /><br/>";
			echo "<input type='email' required='true' name='mail' placeholder='inserisci la mail' /><br/>";
			echo "<input type='hidden'  name='voto' value='$media'  /><br/>";
			echo "<input type='submit' class='btn btn-2 btn-2a' name='ripeti' value='Invia'> ";
			echo "</form>";
			echo "</div>";
			
			break;
		
	
	}  


	?>
