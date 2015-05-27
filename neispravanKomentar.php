<?php
				include("konekcija.php");
           $id=$_GET['idNovosti'];
           
 
    echo    "<div id=DivKontakti>",

    "<h1> Forma za komentar:","<br>","<br>","</h1>", "<p class=onamaTekst> Polja oznacena sa * nisu obavezna",
        "<form id=formaKomentar action=dodajKomentar.php method=get >","
         <input type='hidden' name='idNovosti' value=".$id.">","
       <div class=proba>" ,"<label for=Ime>Ime:","</label>","
   <input type=text name=Ime id=Ime  placeholder=Ime  value='".$_GET['Ime']."'/>"," </div>","   <div id=eror_ime>";
   if($ime==0){
       echo "<img src=slike_dentist/error.jpg alt=error>";
       echo $imeporuka;}
       echo "</div>",
     "<div  class=proba>","<label for=Email>E-mail:","</label> ","
   <input type=text name=Email id=Email placeholder=mail@primjer.com   value='".$_GET['Email']."' />","</div> ","  <div id=eror_email>";
   if($email==0){
       echo "<img src=slike_dentist/error.jpg alt=error>";
       echo $emailporuka;}
       echo "</div>","
  
       <div  class=proba>","
         <label for=Poruka>Komentar:","</label>"," <textarea name=Poruka id=Poruka placeholder=Komentar....  >";
         print $_GET['Poruka'];
         echo "</textarea>"," </div>"," <div id=eror_email>";
   if($poruka==0){
       echo "<img src=slike_dentist/error.jpg alt=error>";
       echo $porukaporuka;}
       echo "</div>","
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


