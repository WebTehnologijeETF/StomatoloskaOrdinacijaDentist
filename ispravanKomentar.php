   <?php 
				include("konekcija.php");
           $id=$_GET['idNovosti'];
            $rezultat=$veza->exec("INSERT INTO komentar SET novost='".$_GET['idNovosti']."', vrijeme=NOW(),  tekst='".$_GET['Poruka']."',email='".$_GET['Email']."', ime='".$_GET['Ime']."'");
                 if (!$rezultat) {
          $greska = $veza->errorInfo();
          print "SQL greška: " . $greska[2];
          exit();
     }
 
    echo    "<div id=DivKontakti>",

   "<p class=Komentar2> Uspješno ste komentarisali novost  !","</p>",
   
   "<h1> Forma za komentar:","<br>","<br>","</h1>", "<p class=onamaTekst> Polja oznacena sa * nisu obavezna",
        "<form id=formaKomentar action=dodajKomentar.php method=get >","
         <input type='hidden' name='idNovosti' value=".$id.">","
       <div class=proba>" ,"<label for=Ime>Ime:","</label>","
   <input type=text name=Ime id=Ime  placeholder=Ime />"," </div>","   <div id=eror_ime>"," </div>",
     "<div  class=proba>","<label for=Email>E-mail:","</label> ","
   <input type=text name=Email id=Email placeholder=mail@primjer.com  />","</div> ","  <div id=eror_email>","  </div> ",
             "<div  class=proba>","
         <label for=Poruka>Komentar:","</label>"," <textarea name=Poruka id=Poruka placeholder=Komentar....  >","</textarea>"," </div>","
             <div  class=proba>","
         <input class=Button type=submit value=Komentarisi> "," 
         <input class=Button type=reset value=Ponisti>"   ,"</div>","
     </form>",
 "<h1>Komentari:</h1>","</div>";
     
$novostKomentari = $veza->query("select id, novost, tekst, ime,UNIX_TIMESTAMP(vrijeme) vrijeme2,email from komentar where novost=".$id." order by vrijeme asc;");
		
           
            	 foreach ($novostKomentari as $vijest) {
				     

                    echo "<div class=post>","<h1 class=Autor>".$vijest['ime']." ".$vijest['email']. "</h1>","<h1 class=Datum>".date("d.m.Y. (h:i)", $vijest['vrijeme2'])."</h1>"," <p class=Sadrzaj>".$vijest['tekst']."</p>","</div>";
				 }

                


?>