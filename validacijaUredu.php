<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Stomatoloska ordinacija</title>
    <link rel="stylesheet" type="text/css" href="stil.css">
 </head>
    <body> 
         
 <div id="DivKontakti" > 


  
   <h2>Provjerite da li ste ispravno popunili kontakt formu</h2>
		
     <table>
          <tr class="red2" > <td class="celijaZaglavlje" colspan="3" > PODACI SA FORME </td >  </tr> 
         <tr class="red" >
        <td class="celija" >
           Ime
        </td >
            <td class="celija">
         <?php print "".$_GET['Ime'];?>  
            </td>
            </tr>

            <tr class="red2" >
        <td class="celija">
           Prezime
        </td >
            <td class="celija">
            <?php print "" .$_GET['Prezime'];?>
            </td>
                </tr>

         <tr class="red" >
        <td class="celija" >
           Spol
        </td >
            <td class="celija">
      <?php print "" .$_GET['Spol']; ?>
            </td>
            </tr>

          <tr class="red2" >
        <td class="celija">
          Grad
        </td >
            <td class="celija">
            <?php print "" .$_GET['Grad'];?>
            </td>
                </tr>

           <tr class="red" >
        <td class="celija" >
          Postanski broj
        </td >
            <td class="celija">
      <?php print "" .$_GET['PostanskiBroj']; ?>
            </td>
            </tr>

          <tr class="red2" >
        <td class="celija">
         E-mail
        </td >
            <td class="celija">
            <?php print "" .$_GET['Email'];?>
            </td>
                </tr>

          <tr class="red" >
        <td class="celija" >
          Poruka
        </td >
            <td class="celija">
      <?php print "" .$_GET['Poruka']; ?>
            </td>
            </tr>

     
     </table>
	
		

     <h2>Da li ste sigurni da želite poslati ove podatke?</h2>
     <form id="forma2" action="#" method="get" ><!--onsubmit="Validacija_forme(); return false;"--> 
		 <input class="Siguran" type="submit" value="Sigurna sam" /><br>
		</form>

     <h2>Ako ste pogrešno popunili formu, možete ispod prepraviti unesene podatke</h2>
      <form id="forma" action="kontakt.php" method="get" >
     <div class="proba">  <label for="Ime">Ime:</label>
   <input type="text" name="Ime" id="Ime" placeholder="Ime"  value="<?php print $_REQUEST['Ime']; ?>" />   </div>   <div id="eror_ime"> <?php if($ime==0){print '<img src="slike_dentist/error.jpg" alt="nesto">'; print  $imeporuka;}  ?> </div> 
       <div  class="proba"> <label for="Prezime">Prezime:</label>
   <input type="text" name="Prezime" id="Prezime" placeholder="Prezime" value="<?php print $_REQUEST['Prezime']; ?>" /></div>  <div id="eror_prezime">  <?php if($prezime==0){print '<img src="slike_dentist/error.jpg" alt="nesto">';print  $prezimeporuka;}  ?></div> 
         <div class="proba"> <label for="Grad"  >Grad:</label>
   <input type="text" name="Grad" id="Grad" placeholder="Sarajevo" value="<?php print $_REQUEST['Grad']; ?>" /></div>
          <div class="proba"> <label for="PostanskiBroj">Poštanski broj:</label>
   <input type="text" name="PostanskiBroj" id="PostanskiBroj" placeholder="71000" value="<?php print $_REQUEST['PostanskiBroj']; ?>" /></div>  
          
        <div  class="proba">  
            <label> Spol:</label>  <div id="DivSpol"><label class="Spol">Muško</label> 
               <input class="Radio" type="radio" name="Spol" value="Musko" <?PHP print $m_status; ?> /> <br> 
       <label class="Spol">  Žensko</label> 
               <input class="Radio"  type="radio" name="Spol" value="Zensko" <?PHP print $z_status; ?> />  </div>   
              </div>  <div id="eror_email">  <?php if($spol==0){print '<img src="slike_dentist/error.jpg" alt="nesto">';print  $spolporuka;}  ?></div> 
         
        
        <div  class="proba"> <label for="Email">E-mail:</label> 
   <input type="text" name="Email" id="Email" placeholder="mail@primjer.com" value="<?php print $_REQUEST['Email']; ?>" /></div>   <div id="eror_email">  <?php if($email==0){print '<img src="slike_dentist/error.jpg" alt="nesto">';print  $emailporuka;}  ?></div> 

        <div  class="proba"> <label for="Email2">Potvrdi E-mail:</label> 
   <input type="text" name="Email2" id="Email2" placeholder="mail@primjer.com" value="<?php print $_REQUEST['Email2']; ?>" /></div>   <div id="eror_email">  <?php if($email2==0){print '<img src="slike_dentist/error.jpg" alt="nesto">';print  $emailporuka2;}  ?></div> 
        
  
        
      
        
           
      <div  class="proba">
         <label for="Poruka">Poruka:</label> <textarea name="Poruka" id="Poruka" placeholder="Poruka...."   ><?php print $_GET['Poruka']; ?></textarea> </div> <div id="eror_poruka">  <?php if($poruka==0){print '<img src="slike_dentist/error.jpg" alt="nesto">'; print  $porukaporuka;}  ?></div> 
         <div  class="proba">  
         <input class="Button" type="submit" value="Posalji">  
         <input class="Button" type="reset" value="Ponisti">  </div>
         </form>
         </div>
    </body>
</html>
