<?php

include("konekcija.php");

  $rezultat = $veza->query("select id, naslov, tekst, UNIX_TIMESTAMP(vrijeme) vrijeme2, autor, slika from novost order by vrijeme desc");
       if (!$rezultat) {
          $greska = $veza->errorInfo();
          print "SQL greška: " . $greska[2];
          exit();}

foreach ($rezultat as $vijest) {
  $slikaprovjera=$vijest['slika'];
  $detaljnijeprovjera=$vijest['tekst'];
  $detaljnijeNovost1='<a class="Detaljnije" href="index.php" title="Detaljnije"> Detaljnije...</a>';

  $brKomentara = $veza->query("select count(*) from komentar where novost=".$vijest['id'].";");		
		if (!$brKomentara) {
	      $greska = $veza->errorInfo();
          print "SQL greška: " . $greska[2];
          exit();
		}	
		$brojKomentara = $brKomentara->fetchColumn();
		
		if($brojKomentara == 0) {
        echo "<div class=post>","<img class=slika src=".$vijest['slika']." alt=slika>","<div class=Tekst>","<a class=Naslov href=detaljnijeNovosti.php?id=".$vijest['id']." title=Detaljnije>" .$vijest['naslov']."</a>","<h1 class=Autor>".$vijest['autor']."</h1>","<h1 class=Datum>".date("d.m.Y. (h:i)", $vijest['vrijeme2'])."</h1>"," <p class=Sadrzaj>".$vijest['tekst']."</p>","<p class=Komentar2>","Nema komentara","</p>","</div>","</div>";
        }
        else{
            if($brojKomentara == 1)
            echo "<div class=post>","<img class=slika src=".$vijest['slika']." width=150 alt=slika>","<div class=Tekst>","<a class=Naslov href=detaljnijeNovosti.php?id=".$vijest['id']." title=Detaljnije>" .$vijest['naslov']."</a>","<h1 class=Autor>".$vijest['autor']."</h1>","<h1 class=Datum>".date("d.m.Y. (h:i)", $vijest['vrijeme2'])."</h1>"," <p class=Sadrzaj>".$vijest['tekst']."</p>","<a class=Komentar1 href=Komentari.php?id=".$vijest['id']." title=Komentari>".$brojKomentara." Komentar","</a>","</div>","</div>";
            else
              echo "<div class=post>","<img class=slika src=".$vijest['slika']." width=150 alt=slika>","<div class=Tekst>","<a class=Naslov href=detaljnijeNovosti.php?id=".$vijest['id']." title=Detaljnije>" .$vijest['naslov']."</a>","<h1 class=Autor>".$vijest['autor']."</h1>","<h1 class=Datum>".date("d.m.Y. (h:i)", $vijest['vrijeme2'])."</h1>"," <p class=Sadrzaj>".$vijest['tekst']."</p>","<a class=Komentar1 href=Komentari.php?id=".$vijest['id']." title=Komentari>".$brojKomentara." Komentara","</a>","</div>","</div>";
        }
    
  } ?>


