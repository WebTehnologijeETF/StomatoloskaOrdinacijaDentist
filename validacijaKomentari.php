<?php
$prikaziKomentar='';
$emailRegex='/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/';
$ime=0;
$email=0;
$poruka=0;
$imeporuka="Unesite Ime !";
$emailporuka="Unesite Email!";
$porukaporuka="Unesite Poruku!";

if (isset($_GET['Ime']) && preg_replace('/\s+/', '', $_GET['Ime'])!=='' ) {
    $ime=1;
    $imeporuka=''; } 

    if (isset($_GET['Poruka']) && preg_replace('/\s+/', '', $_GET['Poruka'])!=='' ) {
    $poruka=1;
    $porukaporuka='';} 

    if (isset($_GET['Email']) && preg_replace('/\s+/', '', $_GET['Email'])!=='' ) {
   $provjera= htmlEntities($_GET['Email'], ENT_QUOTES);
  if(preg_match($emailRegex, $provjera)){
      $email=1;
      $emailporuka="";}
   else{
       $email=0;
       $emailporuka="Neispravan Email !";
        } } 
        else{
            $email=1;
      $emailporuka="";
        } 

    if($ime==1  && $poruka==1 && $email==1 )
{ $prikaziKomentar='ispravanKomentar.php'; }
		else{
			$prikaziKomentar='neispravanKomentar.php';
		}

?>