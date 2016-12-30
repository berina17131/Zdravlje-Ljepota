<?php
  session_start();
  if(isset($_SESSION['username']) && $_SESSION['username'] == "admin") $prijava = "Admin postavke";
  elseif(isset($_SESSION['username'])) $prijava = "Odjavi se";
  else $prijava = "Hej, pridruži nam se!";
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<HTML>
<HEAD>
<meta name="viewport" content="width=device-width">
<TITLE>Zdravlje&amp;Ljepota</TITLE>
<link rel="stylesheet" type="text/css" href="home.css">
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
				<li id = "prijava"><a href="prijava.php"> <?php echo $prijava; ?></a></li>
</ul>
</div>
<br>
<br>
<br>
<br>

<div class = "row">
<div class = "three" id = "news">
<h2 id = "vijesti">  Najnovije vijesti  </h2></div></div>

<br>
<div class = "eleven" id = "lista_novosti" >
	<?php
	   if(file_exists('Xml/novosti.xml'))
	  {
	           $xml = simplexml_load_file('Xml/novosti.xml');
                $listaNovosti_naslov = []; 
				$listaNovosti_tekst= [];
                $listaNovosti_slike= [];		
                $lista_Kategorija = [];		
			 foreach($xml->children()->children() as $novost)
			   {  
			        array_push($listaNovosti_naslov,$novost->naziv);
					array_push($listaNovosti_tekst,$novost->sadrzaj);
					array_push($listaNovosti_slike,$novost->slika);
					array_push($lista_Kategorija,$novost->kategorija);
     
			   }
			   
			   $broj_elemenata = $xml->children()->children()->count();
			   for ($x = $broj_elemenata - 1; $x >= 0; $x--) {
				   
				    if($lista_Kategorija[$x] == "Home"){?>
				   
				   <div class = "row" id = "red_clanak_home">
				   <div class = "eleven" id = "clanakhome">
                    <h1 id = "naslov_home"><?php echo $listaNovosti_naslov[$x];?></h1>

					<img id = "slika_home" src = "<?php echo $listaNovosti_slike[$x];?>" alt="Photo" width="400" height="200">

                    <p id = "paragraf_home" > <?php echo $listaNovosti_tekst[$x]; ?></p>	
                   </div>
                 </div>				 
			     <?php
                } 
			   }				
	  }
	?>
</div>	

<div class = "row">
<div class = "six" id = "kolona1">
<div class = "clanak_1">
             <h1>Manje poznate činjenice o “običnoj” prehladi</h1>
              <p id = "paragraf1" > Obična prehlada je najčešća bolest uopšte, vrlo je blaga jer nije praćena povišenom temperaturom, a simptomi su hunjavica i kihanje,
                                     začepljen nos i rijeđe bol u grlu.Običnu prehladu uzrokuju različiti respiratorni virusi, u pravilu oni slabije patogenosti, odnosno s manjom agresivnošću.
									 <br><br>

                                     * Učestalo je vjerovanje se da su umor, hladnoća, propuh i nedovoljno sna povezani s nastankom i težinom prehlade, ali za to nema sigurnih dokaza.<br>
                                     * Iako se javlja tokom cijele godine, češća je zimi jer su ljudi u bliskijem fizičkom kontaktu u zatvorenim prostorijama koje se nedovoljno provjetravaju.<br>
                                     * Prehlada je posebno česta među malom djecom, učenicima, studentima.<br>
                                     * Uopšte, broj prehlada u jednoj godini smanjuje se tokom čovjekova života.<br>
                                     * Zbog lakog prenosa virusa, prehladu načelno nije moguće spriječiti.<br>
                                     * Nije dokazana efikasnost vitamina C u sprečavanju i liječenju prehlade. 
			 </p>
<img id = "slika_jedan" src = "slike/prehlada.jpg" alt="Prehlada" width="500" height="300">
</div> 
</div>

<div class = "six" id = "kolona2">
<div class = "clanak_2">
              <h1>Moda s Beyonce potpisom: Novi komadi iz kolekcije Ivy Park</h1>
			  <img id = "slika_dva" src = "slike/ivy2.jpg" alt="Beyonce" width="300" height="300">
              <p id = "paragraf2"> Beyonce je još prije nekoliki mjeseci debitovala svojom novom kolekcijom odjeće koja nosi ime Ivy Park za jesen/zimu 2016/17.
                                   Boje su prave jesenje i zimske – dominira siva sa crnim i roza detaljima, koji će se sigurno svidjeti svakoj savremenoj dami koja voli da vježba i brine o svom zdravlju i figuri.
                                   Novi komadi su pufer jakna, helanke i sportski grudnjak.
                                   Nas je posebno zaintrigirala jakna koja je u srebrnoj boji i sa velikom kapuljačom, u kojoj ćete biti primijećeni gdje god da se pojavite. Topla je, pa je idealna i za hladnije dane
                                   tokom zime, kao i za kišu i snijeg. 
								   Novi komadi su pufer jakna, helanke i sportski grudnjak.
                                   Nas je posebno zaintrigirala jakna koja je u srebrnoj boji i sa velikom kapuljačom, u kojoj ćete biti primijećeni gdje god da se pojavite. Topla je, pa je idealna i za hladnije dane
                                   tokom zime, kao i za kišu i snijeg. 
								   Novi komadi su pufer jakna, helanke i sportski grudnjak.
                                   Nas je posebno zaintrigirala jakna koja je u srebrnoj boji i sa velikom kapuljačom, u kojoj ćete biti primijećeni gdje god da se pojavite. Topla je, pa je idealna i za hladnije dane
                                   tokom zime, kao i za kišu i snijeg. 
              </p>
</div>
</div>
</div>
</div>
</BODY>
</HTML>