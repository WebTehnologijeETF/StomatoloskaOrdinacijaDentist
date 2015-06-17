<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Stomatoloska ordinacija</title>
<link rel="stylesheet" type="text/css" href="stil.css">
<link href='http://fonts.googleapis.com/css?family=Orbitron:700' rel='stylesheet' type='text/css'>
     <script src="meni.js"></script>
    <script src="ucitajStranicu.js"></script>
</head>
<body>       
<div id="okvir"> <!--otvoren div okvir-->    
<div id="zaglavlje"><!--otvoren div zaglavlje-->   
<img class="header" src="slike_dentist/header.jpg" alt="Novi logo" />
<h1 id="naziv">D E N T I S T</h1>
<h3 id="ordinacija">Stomatološka ordinacija</h3>
</div><!--zatvoren div zaglavlje--> 
 <div id="meni"><!--otvoren div meni--> 
         <div id="cont1"> 
    <a href="index.php"   >Pocetna</a></div >
<div id="cont2"> 
    <a href="#" onmouseover="prikaziMeni()"   onmouseout="sakrijMeni()">Usluge </a>
    <div id="dropmenu1" class="dropmenus" onmouseover="prikaziMeni()" onmouseout="sakrijMeni()"> 
<a href="#"  onmouseover="prikazi2Meni()" onmouseout="sakrij2Meni()"  >Implantologija >></a>
     <a href="#" onmouseover="prikazi3Meni()" onmouseout="sakrij3Meni()"  >Protetika >></a>
        <a href="#" onclick="return ucitajSadrzajStranice('estetskastomatologija.html')" >Estetska stomatologija</a>
        <a href="#" onclick="return ucitajSadrzajStranice('izbjeljivanjezuba.html')" >Izbjeljivanje zuba</a>
           <a href="#" onclick="return ucitajSadrzajStranice('hirurgija.html')" >Oralna hirurgija</a>
</div >
      <div id="dropmenu2" class="dropmenus" onmouseover="prikazi2Meni();prikaziMeni()"  onmouseout="sakrij2Meni();sakrijMeni() "  > 
     <a href="#"  onclick="return ucitajSadrzajStranice('zubikorijenzuba.html')"  >O zubu i korijenu zuba</a>
        <a href="#" onclick="return ucitajSadrzajStranice('prijeugradnje.html')" >Zubni implantant prije ugradnje</a>
           <a href="#" onclick="return ucitajSadrzajStranice('ugradnjaimplantata.html')" >Ugradnja zubnog implatanta</a>
            <a href="#" onclick="return ucitajSadrzajStranice('nakonugradnje.html')"  >Nakon ugradnje zubnog implatanta</a>
          </div >
              <div id="dropmenu3" class="dropmenus" onmouseover="prikazi3Meni();prikaziMeni()"  onmouseout="sakrij3Meni();sakrijMeni() "   > 
     <a href="#" onclick="return ucitajSadrzajStranice('zubnakruna.html')"  >O zubu i zubnoj kruni</a>
        <a href="#" onclick="return ucitajSadrzajStranice('fiksnaprotetika.html')" >Fiksna zubna protetika</a>
                  <a href="#" onclick="return ucitajSadrzajStranice('polufiksnaprotetika.html')" >Polufiksna zubna protetika</a>
                     <a href="#" onclick="return ucitajSadrzajStranice('mobilnaprotetika.html')" >Mobilna zubna protetika</a>
          </div ></div >
     <div id="cont3"> 
    <a href="#" onclick="return ucitajSadrzajStranice('cjenovnik.html')" >Cijene </a>
        
  </div >
     <div id="cont4"> 
    <a href="#"  onclick="return ucitajSadrzajStranice('onama.html')" >O nama</a></div >
 
          <div id="cont5"> 
    <a href="#" onclick="return ucitajSadrzajStranice('partneri.html')" >Partneri</a></div >

                  <div id="cont6"> 
    <a href="#" onclick="return ucitajSadrzajStranice('kontakt.html')"  >Kontakt</a></div >
</div >
      
    <div id="saStrane">
      <p id="Informacije">Adresa: <br> 
        Titova 5, 71000 
           Sarajevo  <br>  <br> 
          Telefon: <br> 
          +387 33 472 262 <br>
           +387 33 376 652 <br> <br> 
          Radno vrijeme:
<br>  Pon – Pet 09 – 17h<br>
Sub 09 – 14h <br>  </p>                 
    <img class="slikaReklama" src="slike_dentist/garancija.jpg" alt="slika"/>
      <p class="Reklama">SVIM POTENCIJALNIM PACIJENTIMA NUDIMO BESPLATAN PREGLED I KONSULTACIJE UZ BEZBOLNU TERAPIJU PRI ZAHVATU.
BUDITE SLOBODNI DA NAS KONTAKTIRATE <br> <br> MOGUĆNOST PLAĆANJA NA 12 RATA!</p>
                 </div>
    
    <div id="sadrzajStranice">
     
               <?php 
				include("konekcija.php");

              $id=$_GET['id'];

    echo    "<div id=DivKontakti>",

   "<h1> Forma za komentar:","<br>","<br>","</h1>", "<p class=onamaTekst> Polja oznacena sa * nisu obavezna",
        "<form id=formaKomentar action=dodajKomentar.php method=get >","
         <input type='hidden' name='idNovosti' value=".$id.">","
       <div class=proba>" ,"<label for=Ime>Ime:","</label>","
   <input type=text name=Ime id=Ime  placeholder=Ime />"," </div>","   <div id=eror_ime>"," </div>",
     "<div  class=proba>","<label for=Email>*E-mail:","</label> ","
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
           
         </div>

   


    <div id="footer">
        Copyright 2015 Saudin d.o.o. Sva prava zadržana. Zabranjeno preuzimanje sadržaja bez dozvole izdavača
        </div>
    </div> <!--zatvoren div okvir-->
    </body>
</html>
