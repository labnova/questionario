<html>

<?php

session_start();


if(isset($_POST['submit'])) {


	$risultato1= $_POST['domanda1'];
	$risultato2= $_POST['domanda2'];
	$risultato3= $_POST['domanda3'];
	$risultato4= $_POST['domanda4'];





$punteggio=0;






}

?>

<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0" >
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="style.css" />
	
<script src="js/modernizr.custom.js"></script>
</head>

<body>


<form class=" row col-md-7 ac-custom ac-radio ac-circle"  action="<?php $_SERVER['PHP_SELF']; ?>" method='post' autocomplete="off">

<section>

	
		
	<div class="domanda">Come si crea un nuovo documento in Dreamweaver?</div>
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
			
			echo "<br/><p class='giusto'>bravo, hai vinto l'ebook !<br/>";
			$punteggio++;
			break;
		
		
	}



?>
</section>
	
<section>
	<div class="domanda">Come si importa un foglio di stile CSS</div>
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
			
			echo "<br/><p class='giusto'>bravo, hai vinto l'ebook !</p><br/>";
			$punteggio++;
			break;

			case 'risposta4':
			
			echo "<br/><p class='sbaglio'>Sbagliato: la risposta <a href='https://www.youtube.com/watch?v=JU-QZ7yoyd4' target='_blank'>non ha senso.</a></p><br/>";
			break;
		
		
	}



?>

</section>
<section>
	<div class="domanda">A cosa serve il pannello Inserisci?</div>
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
			
			echo "<br/><p class='giusto'>bravo, hai vinto l'ebook !</p><br/>";
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
	<div class="domanda">Come imposti una nuova transizione CSS?</div>
	<ul>
		<li><input type="radio" name="domanda4" value="risposta2" /><label>Ricorro all'apposito pannello CSS</label></li><br/>
		<li><input type="radio" name="domanda4" value="risposta1" /><label>Non riesco a farlo perch&egrave; il 5Stelle non propone nulla.</label></li><br/>
		<li><input type="radio" name="domanda4" value="risposta3" /><label>Lo scrivo da zero e lo importo nel mio CSS gi&agrave; esistente</label></li><br/>
		<li><input type="radio" name="domanda4" value="risposta4" /><label>Lo faccio con il CSS Designer, ma vi sono<br/>
        grosse limitazioni.</label></li><br/>
	</ul>


<?php

switch ($risultato4) {
		case 'risposta1':
			
			echo "<br/><p class='giusto'>bravo, continua a votare Renzi che campi 100 anni! ;-)</p><br/>";
			$punteggio++;
			break;

			case 'risposta2':
			
			echo "<br/><p class='sbaglio'>Sbagliato: sei solo un disfattista e non lasci lavorare il premier!</p><br/>";
			break;

			case 'risposta3':
			
			echo "<br/><p class='sbaglio'>Sbagliato: sei solo un disfattista e non lasci lavorare il premier!</p><br/>";
			break;

			case 'risposta4':
			
			echo "<br/><p class='sbaglio'>Sbagliato: sei solo un disfattista e non lasci lavorare il premier!</p><br/>";
			break;
		
		
	}



?>
</section>
	<br/>
	<br/>
	<br/>


<input type="submit" class='btn btn-2 btn-2a' name="submit" value="verifica le tue risposte" />
	</form>
</div>


	<?php 


//$_SESSION['punteggio']=$punteggio;

$voto="";


	switch ($punteggio) {
			case '1':
			$voto="Disastro";?>
            <div class="row col-lg-12">
            <?
			echo "<div class=' punteggio'>";
			echo "<form  action='index.php' method='post'>";
			echo "<p>Il tuo punteggio &egrave; </p><div class='numero'> " .$voto."</div><br/>";
			echo "<p>non hai superato la prova. Studia di pi&ugrave;.</p><br/>";
			echo "<input type='submit' class='btn btn-2 btn-2a' name='ripeti' value='ripeti il quiz'> ";
			echo "</form>"; ?>
            
			</div>
			<?
			break;

			case '2':
			$voto="Insufficiente";
			echo "<div class='row col-lg-12 punteggio'>";
			echo "<form  action='index.php' method='post'>";
			echo "<p>Il tuo punteggio &egrave;</p><div class='numero'>  " .$voto."</div><br/>";
			echo "<p>non hai superato la prova, ma hai delle potenzialit&agrave;.</p><br/>";
			echo "<input type='submit' class='btn btn-2 btn-2a' name='ripeti' value='ripeti il quiz'> ";
			echo "</form>";
			echo "</div>";
			
			break;

			case '3':
			$voto="Buono";
			echo "<div class='row col-lg-12 punteggio'>";
			echo "<form action='index.php' method='post'>";
			echo "<p>Il tuo punteggio &egrave; </p><div class='numero'> " .$voto."</div><br/>";
			echo "<p>Hai superato la prova, bravo! Accedi alla parte media.</p>   ";
			echo "<input type='submit' class='btn btn-2 btn-2a' name='ripeti' value='ripeti il quiz'> ";
			echo "</form>";
			echo "</div>";
			
			break;

			case '4':
			$voto="Eccellente";
			echo "<div class='row col-lg-12 punteggio'>";
			echo "<form  action='index.php' method='post'>";
			echo "<p>Il tuo punteggio &egrave;</p><div class='numero'>  " .$voto."</div><br/>";
			echo "<p>Sei stato fantastico!<br/>accedi alla parte media.";
			echo "<input type='submit' class='btn btn-2 btn-2a' name='ripeti' value='ripeti il quiz'> ";
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
