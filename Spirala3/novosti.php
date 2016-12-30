<?php
 session_start();
 if(isset($_SESSION['username']) && isset($_SESSION['username']) == "admin") $prijava = "Admin postavke";
  elseif(isset($_SESSION['username'])) $prijava = "Odjavi se";
  else $prijava = "Hej, pridruži nam se!";
  $obavijest = "Nedavno dodane novosti";
  
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<HTML>
<HEAD>
<meta name="viewport" content="width=device-width">
<TITLE>Zdravlje&amp;Ljepota</TITLE>
<link rel="stylesheet" type="text/css" href="novosti.css">
</HEAD>
<BODY> 
<script src="ajax_validacija.js" type="text/javascript" charset="utf-8"></script>
<br>
<div class = "okvir" id = "Okvir" ><br>

<div class="Header"> <h1 id = "ljiz"> Zdravlje &amp; Ljepota </h1></div>


<br>
<div id ="iefix">
<ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="zdravlje.php">Zdravlje</a></li>
                <li><a href="#" >Ljepota</a>
				    <div id = "submenu1">
				     <ul>
					    <li><a href="ljepota.php" >Novosti</a></li>
						<li><a href="galerija.php">Fashion Week</a></li>
						<li><a href="kosa_lice.php">Kosa i Lice</a></li>
					 </ul>
					 </div>
					 </li>	 
				<li><a href="lifestyle.php">Lifestyle</a></li>
				<li><a href="#">Info</a>
				<div id = "submenu2">
				     <ul>
					    <li><a href="o_nama.php"> O nama </a></li>
						<li><a href="kontakt.php">Kontakt</a></li>
					 </ul>
					 </div>
					 </li>	
				<li id = "prijava"><a href="prijava.php"><?php echo $prijava; ?></a></li>
</ul>
</div>
<br>
<br>
<br>
<br>

<div class = "row">
<div class = "six" id = "news">
<h2 id = "vijesti"> <?php echo $obavijest; ?> </h2> <div class = "row"><br><a href = "download_csv.php" class = "dugme" id = "download_pdf" > Preuzmi sve novosti</a></div><br></div></div>



<div class= "row">
   <div class = "three">
      <ul id = "admin_opcije" >
	            <li><a  href="novosti.php">Novosti</a></li>
	            <li><a  href="dodaj_novost.php">Dodaj novosti</a></li>
	            <li><a href="uredi_novosti.php"> Uredi Novosti</a></li>
                <li><a href="korisnici.php">Korisnici</a></li>
				<li><a href="prijava.php?odjava=1">Log out</a></li>
      </ul>
	</div>

	
    <div class = "nine" id="lista_novosti">
	<div class = "row" id = "red_clanak">
	<?php
	   if(file_exists('Xml/novosti.xml'))
	  {
	           $xml = simplexml_load_file('Xml/novosti.xml');
                $listaNovosti_naslov = []; 
				$listaNovosti_tekst= [];
                $listaNovosti_slike= [];				
			 foreach($xml->children()->children() as $novost)
			   {  
			        array_push($listaNovosti_naslov,$novost->naziv);
					array_push($listaNovosti_tekst,$novost->sadrzaj);
					array_push($listaNovosti_slike,$novost->slika);
     
			   }
			   
			   $broj_elemenata = $xml->children()->children()->count();
			   for ($x = $broj_elemenata - 1; $x >= 0; $x--) {?>
				   
				   <div class = "clanak">
                    <h1 id="naslov"><?php echo $listaNovosti_naslov[$x];?></h1>

					<img id = "slika" src = "<?php echo $listaNovosti_slike[$x];?>" alt="Photo" width="300" height="100">

                    <p id="paragraf"> <?php echo $listaNovosti_tekst[$x]; ?></p>
                       </div> 
			     <?php
                } 	  
	  }
	?>
	</div>
 </div>
</div>
</div>
</BODY> 
</HTML>