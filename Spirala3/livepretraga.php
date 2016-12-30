<?php

    $q=$_GET["q"];
    if(strlen($q)>0)
	{
		$odgovor = "";
		$ponavljanje = "";
		 if(file_exists('Xml/korisnici.xml'))
	  {
	         $xml = simplexml_load_file('Xml/korisnici.xml');
                
			$broj = 0;
			 foreach($xml->children()->children() as $korisnik)
			   { 
			        $broj = $broj + 1;
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
					
					if($broj == 10) {break;}
			   }
			   
         if ($odgovor=="") {
		 $odgovor="Nema prijedloga";
		 }
			 
 echo $odgovor;
	
	}
	}
?>