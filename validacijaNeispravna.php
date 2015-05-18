<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Stomatoloska ordinacija</title>
    <link rel="stylesheet" type="text/css" href="stil.css">
 </head>
    <body> 
         
 <div id="Neispravno"  > 
      <p class="onamaTekst">
   
  Želja nam je da naše aktivnosti potpuno prilagodimo vašim potrebama i zahtjevima. 
        <br> Zato vas molimo da, ukoliko imate prijedloge za poboljšanje <br>naših usluga 
          popunite ponuđeni formular i pošaljete.</p> <br>
    <h1 >Kontaktirajte nas: </h1>
      <br>
    <form id="forma" action="kontakt.php" method="get" >
     <div class="proba">  <label for="Ime">Ime:</label>
   <input type="text" name="Ime" id="Ime" placeholder="Ime"  value="<?php print $_REQUEST['Ime']; ?>" />   </div>   <div id="eror_ime"> <?php if($ime==0){print '<img src="slike_dentist/error.jpg" alt="error">'; print  $imeporuka;}  ?> </div> 
       <div  class="proba"> <label for="Prezime">Prezime:</label>
   <input type="text" name="Prezime" id="Prezime" placeholder="Prezime" value="<?php print $_REQUEST['Prezime']; ?>" /></div>  <div id="eror_prezime">  <?php if($prezime==0){print '<img src="slike_dentist/error.jpg" alt="error">';print  $prezimeporuka;}  ?></div> 
         <div class="proba"> <label for="Grad"  >Grad:</label>
   <input type="text" name="Grad" id="Grad" placeholder="Sarajevo" value="<?php print $_REQUEST['Grad']; ?>" /></div>
          <div class="proba"> <label for="PostanskiBroj">Poštanski broj:</label>
   <input type="text" name="PostanskiBroj" id="PostanskiBroj" placeholder="71000" value="<?php print $_REQUEST['PostanskiBroj']; ?>" /></div>  
          
        <div  class="proba">  
            <label> Spol:</label>  <div id="DivSpol"><label class="Spol">Muško</label> 
               <input class="Radio" type="radio" name="Spol" value="Musko" <?PHP print $m_status; ?> /> <br> 
       <label class="Spol">  Žensko</label> 
               <input class="Radio"  type="radio" name="Spol" value="Zensko" <?PHP print $z_status; ?> />  </div>   
              </div>  <div id="eror_email">  <?php if($spol==0){print '<img src="slike_dentist/error.jpg" alt="error">';print  $spolporuka;}  ?></div> 
         
        
        <div  class="proba"> <label for="Email">E-mail:</label> 
   <input type="text" name="Email" id="Email" placeholder="mail@primjer.com" value="<?php print $_REQUEST['Email']; ?>" /></div>   <div id="eror_email">  <?php if($email==0){print '<img src="slike_dentist/error.jpg" alt="error">';print  $emailporuka;}  ?></div> 

        <div  class="proba"> <label for="Email2">Potvrdi E-mail:</label> 
   <input type="text" name="Email2" id="Email2" placeholder="mail@primjer.com" value="<?php print $_REQUEST['Email2']; ?>" /></div>   <div id="eror_email">  <?php if($email2==0){print '<img src="slike_dentist/error.jpg" alt="error">';print  $emailporuka2;}  ?></div> 
        
  
        
      
        
           
      <div  class="proba">
         <label for="Poruka">Poruka:</label> <textarea name="Poruka" id="Poruka" placeholder="Poruka...."   ><?php print $_GET['Poruka']; ?></textarea> </div> <div id="eror_poruka">  <?php if($poruka==0){print '<img src="slike_dentist/error.jpg" alt="error">'; print  $porukaporuka;}  ?></div> 
         <div  class="proba">  
         <input class="Button" type="submit" value="Posalji">  
         <input class="Button" type="reset" value="Ponisti">  </div>
         </form>
         <p class="onamaTekst">
        
       <br> <br>
Hvala vam na vremenu koje ste odvojili za nas!</p>
  
  
         </div>

            </body>
</html>
