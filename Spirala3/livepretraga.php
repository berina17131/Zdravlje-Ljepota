<?php

    $q=$_GET["q"];
    if(strlen($q)>0)
	{
		$odgovor = "";
		$ponavljanje = "";
		 if(file_exists('Xml/korisnici.xml'))
	  {
	         $xml = simplexml_load_file('Xml/korisnici.xml');
                
			 foreach($xml->children()->children() as $korisnik)
			   { 
			        if ($odgovor==""){
			        if(stripos($korisnik -> ime, $q) === false  && stripos($korisnik -> prezime,$q) === false)
					{
						$odgovor = "";
					}
					else
					{
						$odgovor = $odgovor . $korisnik -> ime . " " . $korisnik -> prezime;
				    }
										
					}
					else{
					if(stripos($korisnik -> ime, $q) === false  && stripos($korisnik -> prezime,$q) === false)
					{
						$odgovor = $odgovor;
					}
					else
					{
						$odgovor = $odgovor . "<br />" . $korisnik -> ime . " " . $korisnik -> prezime;
					}
					}
			   }
			   
         if ($odgovor=="") {
		 $odgovor="Nema prijedloga";
		 }
			 
 echo $odgovor;
	
	}
	}
?>