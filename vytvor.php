<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="stylopis.css">
<title>hamacekm-blog.cz - Výtvor č. <?php echo $_GET['id'];?></title>
<meta charset="UTF-8">
<meta name="viewport" content="widht=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
<div class="grid-kontejner">

<div class="hlavicka">

</div>
<div class="hlavicka">
<a href="index.html"><div class="hlavicnazev"><h1><br>hamacekm-blog.cz<br>osobní www stránka Martina Hamacka</h1></div></a>
</div>
<div class="hlavicka">

</div>
<div class="cara">

</div>
<div class="menu nezobrazit">

</div>
<div class="menu">

<div class="odkazy">
<a href="krtkzprav.html"><div class="odkaz">krátké zprávy</div></a><a href="mnazory.html"><div class="odkaz">moje názory</div></a><a href="denicek.html"><div class="odkaz">deníček</div></a><a href="tvorba.html"><div class="odkaz">moje tvorba</div></a><a href="kontakt.html"><div class="odkaz">kontakt</div></a>
</div>

</div>
<div class="menu nezobrazit">

</div>
<div class="okraj">

</div>
<div class="obsah">
<h1>Výtvor č. <?php echo $_GET['id']?></h1>
Jednoduchá kalkulačka
<form method="post">
Číslo 1:<input type="number" id = "cisloI" name = "jedna"><br>
Číslo 2:<input type="number" id = "cisloII" name = "dva"><br>
<input type="submit" value="Zobrazit" name="nacist">

</form>

<?php 
/*autor: Hamacek Martin, C3c, 2023/2024*/
try{
	include("fce.php"); //načtení funkcí z externího souboru
	/*metoda isset (kromě isset lze na danou věc použit i metodu array_key_exists()) určuje zda parametr exituje, pokud ano vratí TRUE jinak FALSE*/
	
	/*pokud post jehož parametr je nacist (tento název odkazuje na name tlačítka Zobrazit ve formuláři) existuje */
	if(isset($_POST['nacist'])){
		echo $_POST['jedna'] .' + '. $_POST['dva'] . ' = '.soucet($_POST['jedna'],$_POST['dva']); //výpis +?><br>

<?php 	/*vždy když píšu v PHP tak si nejsem jistý zda je v pohodě psat do echo (obdoba sys.out.print) html tagy protože MVC desing pattern 🤔*/echo $_POST['jedna'] .' - '. $_POST['dva'] . ' = '.rozdil($_POST['jedna'],$_POST['dva']);//výpis -?><br>

<?php 	echo $_POST['jedna'] .' * '. $_POST['dva'] . ' = '.soucin($_POST['jedna'],$_POST['dva']);//výpis *?><br>

<?php 	echo $_POST['jedna'] .' / '. $_POST['dva'] . ' = '.podil($_POST['jedna'],$_POST['dva']);//výpis /?><br>

<?php 	echo $_POST['jedna'] . '² = '.mocninadruhou($_POST['jedna']);//výpis ²?><br>
<?php 	echo $_POST['jedna'] . '³ = '.mocninatreti($_POST['jedna']);//výpis ³?><br>
<?php 	echo $_POST['jedna'] . '^4 = '.mocninactvrtou($_POST['jedna']);//výpis ^4?><br>
<?php 	echo $_POST['jedna'] . '^5 = '.mocninapatou($_POST['jedna']);}//výpis ^5?><br>

<?php
}catch(Exception $e){
	echo $e; //výpis výjimky
}
?>
<br>


<div class="paticka">Stránku provozuje: Hamacek Martin; Práce do předmětu WA-T</div>
</div>
</div>

<div class="okraj">

</div>
</div>

</body>
</html>
