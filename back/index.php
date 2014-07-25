<html>

<?php

function calcolaMedia($pun) {



	$punteggio=$pun;
	$domande=10;
	$media=0;
	$risultato=0;

	$media= (($punteggio/$domande)*6);

	

	return $media;


}




if(isset($_POST['submit'])) {

	$risultato1= $_POST['domanda1'];
	$risultato2= $_POST['domanda2'];
	$risultato3= $_POST['domanda3'];
	$risultato4= $_POST['domanda4'];
	$risultato5= $_POST['domanda5'];
	$risultato6= $_POST['domanda6'];
	$risultato7= $_POST['domanda7'];
	$risultato8= $_POST['domanda8'];
	$risultato9= $_POST['domanda9'];
	$risultato10= $_POST['domanda10'];
	$risultato11= $_POST['domanda11'];
	$risultato12= $_POST['domanda12'];
	$risultato13= $_POST['domanda13'];
	$risultato14= $_POST['domanda14'];
	$risultato15= $_POST['domanda15'];


$punteggio=0;







}


?>

<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0" >
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="style2.css" />
<script type="text/javaScript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
<script src="js/modernizr.custom.js"></script>


</head>

<body>


<form id="questionario" class=" row col-md-7 ac-custom ac-radio ac-circle" action="<?php $_SERVER['PHP_SELF'];?>"  method="post" >



<section>


	
	
	<div class="domanda">1. Come si crea un nuovo documento in Dreamweaver?</div>
	<ul>
    	<li><input type="radio" name="domanda1" value="risposta1" /><label>Esci dal programma e riapri</label></li><br/>
		<li><input type="radio" name="domanda1" value="risposta2" /><label>Strumenti->Nuovo Documento</label></li><br/>
		<li><input type="radio" name="domanda1" value="risposta3" /><label>Dreamweaver->Nuovo</label></li><br/>
		<li><input type="radio" name="domanda1" value="risposta4" /><label>File->Nuovo Documento</label></li><br/>
</ul>

<?php

switch ($risultato1) {
		case 'risposta1':
			
			echo "<br/><p class='sbaglio'>Sbagliato: cos&igrave; non concludi nulla.</p><br/>";
			
			break;

			case 'risposta2':
			
			echo "<br/><p class='sbaglio'>Sbagliato: non esiste una tale combinazione di scelte.</p><br/>";
			
			break;

			case 'risposta3':
			
			echo "<br/><p class='sbaglio'>Sbagliato: non esiste una tale combinazione di scelte.</p><br/>";
			
			break;

			case 'risposta4':
			
			echo "<br/><p class='giusto'>Bravo, risposta esatta.<br/>";
			$punteggio++;
			break;
		
		
	}




?>


</section>
	
<section>
	<div class="domanda">2. Come si importa un foglio di stile CSS</div>
		<ul>
			<li><input type="radio" name="domanda2" value="risposta3" /><label>Quando si apre la finestra per il nuovo documento, c'&egrave;<br/>
	        l'apposita casella</label></li><br/>
			<li><input type="radio" name="domanda2" value="risposta2" /><label>Esci dal programma e riapri</label></li><br/>
			<li><input type="radio" name="domanda2" value="risposta1" /><label>File->importa CSS</label></li><br/>
			<li><input type="radio" name="domanda2" value="risposta4" /><label>Quando apri il collegamento per l'HTML, c'&egrave;<br/>
	        l'apposita finestra di importazione</label></li><br/>
		</ul>
	

<?php

switch ($risultato2) {
		case 'risposta1':
			
			echo "<br/><p class='sbaglio'>Sbagliato: non esiste questa combinazione di scelte.</p><br/>";
			break;

			case 'risposta2':
			
			echo "<br/><p class='sbaglio'>Sbagliato: non concludi nulla.</p><br/>";
			break;

			case 'risposta3':
			
			echo "<br/><p class='giusto'>Bravo, risposta esatta.</p><br/>";
			$punteggio++;
			break;

			case 'risposta4':
			
			echo "<br/><p class='sbaglio'>Sbagliato: la risposta <a href='https://www.youtube.com/watch?v=JU-QZ7yoyd4' target='_blank'>non ha senso.</a></p><br/>";
			break;
		
		
	}



?>

</section>
<section>
	<div class="domanda">3. A cosa serve il pannello Inserisci?</div>
		<ul>
			<li><input type="radio" name="domanda3" value="risposta1" /><label>Esci dal programma e riapri</label></li><br/>
			<li><input type="radio" name="domanda3" value="risposta2" /><label>Serve a inserire nuovi tag ed elementi multimediali</label></li><br/>
			<li><input type="radio" name="domanda3" value="risposta3" /><label>Serve per inserire nuove propriet&agrave; CSS</label></li><br/>
			<li><input type="radio" name="domanda3" value="risposta4" /><label>Serve per importare delle nuove immagini</label></li><br/>
		</ul>
	

<?php


	switch ($risultato3) {
		case 'risposta1':
			
			echo "<br/><p class='sbaglio'>Sbagliato: non concludi nulla.</p><br/>";
			break;

			case 'risposta2':
			
			echo "<br/><p class='giusto'>Bravo, risposta esatta.</p><br/>";
			$punteggio++;
			break;

			case 'risposta3':
			
			echo "<br/><p class='sbaglio'>Sbagliato: quelle si inseriscono con il pannello CSS Designer.</p><br/>";
			break;

			case 'risposta4':
			
			echo "<br/><p class='sbaglio'>Sbagliato: quelle si inseriscono con il pannello Risorse.</p><br/>";
			break;
		
		
	}



?>
	
</section>
<section>
	<div class="domanda">4. Come imposti una nuova transizione CSS?</div>
		<ul>
			<li><input type="radio" name="domanda4" value="risposta2" /><label>Ricorro all'apposito pannello CSS</label></li><br/>
			<li><input type="radio" name="domanda4" value="risposta1" /><label>Applico la sintassi prevista dalla propriet&agrave; CSS Transform</label></li><br/>
			<li><input type="radio" name="domanda4" value="risposta3" /><label>Lo scrivo da zero e lo importo nel mio CSS gi&agrave; esistente</label></li><br/>
			<li><input type="radio" name="domanda4" value="risposta4" /><label>Lo faccio con il CSS Designer, ma vi sono<br/>
	        grosse limitazioni.</label></li><br/>
		</ul>
	


<?php

switch ($risultato4) {
		case 'risposta1':
			echo "<br/><p class='sbaglio'>Sbagliato, la propriet&agrave; CSS Transform disciplina la trasformazione fisica dell'oggetto su cui &egrave; applicata.</p><br/>";
			
			break;

			case 'risposta2':
			echo "<br/><p class='giusto'>Complimenti, risposta esatta.</p><br/>";
			$punteggio++;
			
			
			break;

			case 'risposta3':
			
			echo "<br/><p class='sbaglio'>Lo puoi fare, ma in questo contesto ti complichi la vita.</p><br/>";
			break;

			case 'risposta4':
			
			echo "<br/><p class='sbaglio'>Sbagliato: il pannello CSS Designer non ha ancora i comandi necessari per gestire le transizioni.</p><br/>";
			break;
		
		
	}



?>
</section>

<section>
	<div class="domanda">5. Come inserisci una nuova immagine?</div>
		<ul>
			<li><input type="radio" name="domanda5" value="risposta1" /><label>Utilizzo il pannello CSS Designer</label></li><br/>
			<li><input type="radio" name="domanda5" value="risposta3" /><label>File->Importa immagini</label></li><br/>
			<li><input type="radio" name="domanda5" value="risposta4" /><label>La trascino sullo stage<br/>
			<li><input type="radio" name="domanda5" value="risposta2" /><label>Utilizzo il pannello Risorse</label></li><br/>
	        </label></li><br/>
		</ul>
	


<?php

switch ($risultato5) {
		case 'risposta1':
			echo "<br/><p class='sbaglio'>Sbagliato, il CSS Designer non &egrave; progettato per importare immagini</p><br/>";
			
			break;

			case 'risposta3':
			echo "<br/><p class='sbaglio'>Non esiste questa combinazione di comandi.</p><br/>";
			
			
			
			break;

			case 'risposta4':
			
			echo "<br/><p class='sbaglio'>Lo puoi fare, ma in questo contesto ti complichi la vita.</p><br/>";
			break;

			case 'risposta2':
			
			echo "<br/><p class='giusto'>Complimenti, risposta esatta.</p><br/>";
			$punteggio++;
			break;
		
		
	}



?>
</section>
<section>
	<div class="domanda">6. A cosa serve la barra degli strumenti?</div>
		<ul>
			<li><input type="radio" name="domanda6" value="risposta3" /><label>Serve per importare altri strumenti</label></li><br/>
			<li><input type="radio" name="domanda6" value="risposta4" /><label>Serve per aprire nuovi documenti<br/>
			<li><input type="radio" name="domanda6" value="risposta2" /><label>Serve per importare siti web gi&agrave; esistenti</label></li><br/>
			<li><input type="radio" name="domanda6" value="risposta1" /><label>Serve per gestire meglio l'area di lavoro</label></li><br/>
	        </label></li><br/>
		</ul>
	


<?php

switch ($risultato6) {
		case 'risposta1':
			echo "<br/><p class='giusto'>Complimenti, risposta esatta.</p><br/>";
			$punteggio++;
			break;

			case 'risposta3':
			echo "<br/><p class='sbaglio'>Sbagliato, puoi decidere diversi tipi di configurazione.</p><br/>";
			break;

			case 'risposta4':
			
			echo "<br/><p class='sbaglio'>Sbagliato, l'operazione in questione si fa in altri modi.</p><br/>";
			break;

			case 'risposta2':
			
			echo "<br/><p class='sbaglio'>Sbagliato, l'operazione in questione si fa in altri modi.</p><br/>";
			
			break;
		
		
	}



?>
</section>
<section>
	<div class="domanda">7. A cosa serve la "Modalit&agrave; Progettazione"?</div>
		<ul>
			<li><input type="radio" name="domanda7" value="risposta4" /><label>Serve per riconfigurare un sito.<br/>
			<li><input type="radio" name="domanda7" value="risposta3" /><label>Serve per creare e modificare graficamente il layout di un sito web.</label></li><br/>
			<li><input type="radio" name="domanda7" value="risposta2" /><label>Serve per bloccare graficamente il layout di un sito web.</label></li><br/>
			<li><input type="radio" name="domanda7" value="risposta1" /><label>E' una funzione del pannello File.</label></li><br/>
	        </label></li><br/>
		</ul>
	


<?php

switch ($risultato7) {
		case 'risposta4':
			echo "<br/><p class='sbaglio'>Sbagliato, la riconfigurazione di un sito si fa in altri modi.</p><br/>";
			break;

			case 'risposta3':
			
			echo "<br/><p class='giusto'>Complimenti, risposta esatta.</p><br/>";
			$punteggio++;
			break;

			case 'risposta2':
			
			echo "<br/><p class='sbaglio'>Sbagliato, non si può bloccare il layout di un sito.</p><br/>";
			break;

			case 'risposta1':
			
			echo "<br/><p class='sbaglio'>Sbagliato, il pannello file serve per tenere sotto controllo l'organizzazione del sito.</p><br/>";
			
			break;
		
		
	}



?>
</section>
<section>
	<div class="domanda">8. Indicare un esempio di link assoluto.</div>
		<ul>
			<li><input type="radio" name="domanda8" value="risposta3" /><label>#home</label></li><br/>
			<li><input type="radio" name="domanda8" value="risposta2" /><label>http://www.labnova.it/#home</label></li><br/>
			<li><input type="radio" name="domanda8" value="risposta1" /><label>mailto:progettofeb@gmail.com</label></li><br/>
			<li><input type="radio" name="domanda8" value="risposta4" /><label>http://www.labnova.it<br/>
	       </label></li><br/>
		</ul>
	


<?php

switch ($risultato8) {
		case 'risposta3':
			echo "<br/><p class='sbaglio'>Sbagliato, &egrave; un'ancora.</p><br/>";
			break;

			case 'risposta2':
			echo "<br/><p class='sbaglio'>Sbagliato, potrebbe essere un collegamento intratestuale.</p><br/>";
			
			break;

			case 'risposta1':
			
			echo "<br/><p class='sbaglio'>Sbagliato, &egrave; il collegamento a una precisa casella di posta elettronica.</p><br/>";
			break;

			case 'risposta4':
			
			
			echo "<br/><p class='giusto'>Complimenti, risposta esatta.</p><br/>";
			$punteggio++;
			
			break;
		
		
	}



?>
</section>
<section>
	<div class="domanda">9. A cosa serve il tag <<code>ul</code>> </div>
		<ul>
			<li><input type="radio" name="domanda9" value="risposta2" /><label>Apre un collegamento a un'immagine.</label></li><br/>
			<li><input type="radio" name="domanda9" value="risposta3" /><label>Apre una lista non ordinata.</label></li><br/>
			<li><input type="radio" name="domanda9" value="risposta1" /><label>Apre una lista ordinata</label></li><br/>
			<li><input type="radio" name="domanda9" value="risposta4" /><label>Apre una lista domanda/risposta<br/>
	        </label></li><br/>
		</ul>
	


<?php

switch ($risultato9) {
		case 'risposta2':
			echo "<br/><p class='sbaglio'>Sbagliato, quell'operazione &egrave; gestita da un altro tag.</p><br/>";
			break;

			case 'risposta3':
			echo "<br/><p class='giusto'>Complimenti, risposta esatta.</p><br/>";
			$punteggio++;
			break;

			case 'risposta1':
			echo "<br/><p class='sbaglio'>Sbagliato, quell'operazione &egrave; gestita da un altro tag.</p><br/>";
			break;

			case 'risposta4':
			echo "<br/><p class='sbaglio'>Sbagliato, quell'operazione &egrave; gestita da un altro tag.</p><br/>";
		
			break;
		
		
	}



?>
</section>
<section>
	<div class="domanda">10. Cosa gestisce la propriet&agrave; CSS "padding"?</div>
		<ul>
			<li><input type="radio" name="domanda10" value="risposta2" /><label>Gestisce lo spazio interno dell'elemento layout su cui &egrave; applicata.</label></li><br/>
			<li><input type="radio" name="domanda10" value="risposta3" /><label>Gestisce lo spazio esterno dell'elemento layout su cui &egrave; applicata.</label></li><br/>
			<li><input type="radio" name="domanda10" value="risposta1" /><label>Gestisce i bordi dell'elemento layout su cui &egrave; applicata.</label></li><br/>
			<li><input type="radio" name="domanda10" value="risposta4" /><label>Gestisce i margini dell'elemento layout su cui &egrave; applicata.<br/>
	        </label></li><br/>
		</ul>
	


<?php

switch ($risultato10) {
		case 'risposta2':
			echo "<br/><p class='giusto'>Complimenti, risposta esatta.</p><br/>";
			$punteggio++;
			break;

			case 'risposta3':
			echo "<br/><p class='sbaglio'>Sbagliato, quell'operazione &egrave; gestita da un'altra propriet&agrave;'.</p><br/>";
			break;

			case 'risposta1':
			echo "<br/><p class='giusto'>Sbagliato, quell'operazione &egrave; gestita da un'altra propriet&agrave;'.</p><br/>";
			break;

			case 'risposta4':
			echo "<br/><p class='sbaglio'>Sbagliato, quell'operazione &egrave; gestita da un'altra propriet&agrave;'.</p><br/>";
		
			break;
		
		
	}



?>
</section>

	<br/>
	<br/>
	<br/>

<?var_dump($punteggio); ?>


<!-- <script type="text/javascript">
	
$(function() {

	$("#questionario").bind("submit", function(){

	var value=$("#punteggio").val();
	$.post("risultato.php", {punteggio:value}, function(data){
		$(".punteggio").html(data);
		
	});

	return false;


	});

});

</script> -->






<input type="submit" class="btn btn-2 btn-2a" name="submit" value="verifica le tue risposte"  />









</div>'; 





	</form>
</div>

<?

switch ($punteggio) {

			
			case '0':
			echo "<div class='row col-md-4 punteggio'>";
			echo "<form  action='index.php' method='post'>";
			echo "<p>Purtroppo non hai risposto in maniera corretta a nessuna delle domande.</p><br/>";
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

 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script src="js/svgcheckbx.js"></script>
</div>
</body>


</html>
