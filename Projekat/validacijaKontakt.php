<?php
$prikaziKontakt='';
$emailRegex='/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/';
$ime=0;
$prezime=0;
$poruka=0;
$email=0;
$email2=0;
$spol=0;
$imeporuka="Unesite Ime !";
$prezimeporuka="Unesite Prezime !";
$porukaporuka="Unesite Poruku!";
$emailporuka="Unesite Email!";
$emailporuka2="Unesite Email!";
$spolporuka="Odaberite Spol!";

if (isset($_GET['Ime']) && preg_replace('/\s+/', '', $_GET['Ime'])!=='' ) {
    $ime=1;
    $imeporuka=''; } 

if (isset($_GET['Prezime']) && preg_replace('/\s+/', '', $_GET['Prezime'])!=='' ) {
    $prezime=1;
    $prezimeporuka='';} 

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

  if (isset($_GET['Email2']) && preg_replace('/\s+/', '', $_GET['Email2'])!=='' ) {
     $provjera2= htmlEntities($_GET['Email2'], ENT_QUOTES);
   if(preg_match($emailRegex, $provjera2)){
     $email2=1;
    if( $email2==1 && $email==1 &&  $provjera2== $provjera){
      $emailporuka2="";  
      $emailporuka2="";}
     else{  $email=0;
      $emailporuka="Mailovi nisu isti";
       $email2=0;
      $emailporuka2="Mailovi nisu isti";} }
        else{
            $email2=0;
        	$emailporuka2="Neispravan Email !"; } } 
            
            
$m_status = 'unchecked';
$z_status = 'unchecked';
$status=htmlEntities($_GET['Spol'], ENT_QUOTES);
if ($status == "Musko") {
$m_status = 'checked';
}
 if ($status == "Zensko") {
$z_status = 'checked';
}
if($status == "Zensko" || $status == "Musko"){
$spol=1;}
      
if($ime==1 && $prezime==1 && $poruka==1 && $email==1 && $email2==1 && $spol==1)
{ $prikaziKontakt='validacijaUredu.php'; }
		else{
			$prikaziKontakt='validacijaNeispravna.php';
		}




?>

