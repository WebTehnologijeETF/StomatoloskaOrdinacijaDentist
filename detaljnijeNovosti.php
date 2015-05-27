		<?php
		 
include("konekcija.php");
$id=$_GET['id'];

    $rezultat = $veza->query("select * from komentar where id='$id'");
  

       if (!$rezultat) {
          $greska = $veza->errorInfo();
          print "SQL greška: " . $greska[2];
          exit();
     }

      foreach ($rezultat as $vijest) {
          

 
echo "<h1 class=Autor>".$vijest['ime']."</h1>";
   
   }


			 ?>

