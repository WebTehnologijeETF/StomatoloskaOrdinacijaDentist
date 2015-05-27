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
        <a href="#"  >Estetska stomatologija</a>
        <a href="#"  >Izbjeljivanje zuba</a>
           <a href="#"  >Oralna hirurgija</a>
</div >
      <div id="dropmenu2" class="dropmenus" onmouseover="prikazi2Meni();prikaziMeni()"  onmouseout="sakrij2Meni();sakrijMeni() "  > 
     <a href="#"  >O zubu i korijenu zuba</a>
        <a href="#"  >Zubni implantant prije ugradnje</a>
           <a href="#"  >Ugradnja zubnog implatanta</a>
            <a href="#"  >Nakon ugradnje zubnog implatanta</a>
          </div >
              <div id="dropmenu3" class="dropmenus" onmouseover="prikazi3Meni();prikaziMeni()"  onmouseout="sakrij3Meni();sakrijMeni() "   > 
     <a href="#"  >O zubu i zubnoj kruni</a>
        <a href="#"  >Fiksna zubna protetika</a>
                  <a href="#"  >Polufiksna zubna protetika</a>
                     <a href="#"  >Mobilna zubna protetika</a>
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
    <?php include 'validacijaKontakt.php'?>
    <div id="sadrzajStranice">
               <?php 
				include $prikaziKontakt;
				?>
            </div>


    <div id="footer">
        Copyright 2015 Saudin d.o.o. Sva prava zadržana. Zabranjeno preuzimanje sadržaja bez dozvole izdavača
        </div>
    </div> <!--zatvoren div okvir-->
    </body>
</html>
