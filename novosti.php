<?php
$novost='';
foreach (glob("Novosti/*.txt") as $file) 
{
$handle = fopen($file, "r");
if ($handle) 
{$red=0;
$tekstNovost="";
while (($buffer = fgets($handle, 1024)) !== false) 
{
	if($red==0)
{
$datum=$buffer;
}
    if($red==1)
    {
	$autor=$buffer;
	}

    if($red==2)
{$naslov=$buffer;}

if($red==3)
{
$slika='';
	if(trim($buffer)=='')$slika="";
else $slika ='<img class="slika"   src='.$buffer.' alt="slika">';}

if($red>3 and trim($buffer) != "--")
{
$tekstNovost=$tekstNovost.$buffer;
}
if (trim($buffer) == "--")
					{
						$detaljnijeNovost='';
						while (($buffer = fgets($handle, 1024)) !== false) 
						{
							$detaljnijeNovost=$detaljnijeNovost.$buffer;
						}
						$detaljnijeNovost1='';
						if($detaljnijeNovost=='')$detaljnijeNovost1='';
						else $detaljnijeNovost1='<a class="Detaljnije" href="index.php" title="Detaljnije"> Detaljnije...</a>';
						break;
					}

				$red=$red+ 1;
				}
				 $novost=$novost.'
				 				<div class="post">
                                '.$slika.'
                                 <div class="Tekst">  
								<a class="Naslov"   href="#" title="Detaljnije"> '.ucfirst( strtolower($naslov)).'</a>
                                <h1 class="Autor">'.$autor.' </h1>
								<h1 class="Datum">'.$datum.'</h1>
                               <p class="Sadrzaj"> '.$tekstNovost.'  </p>
                                '.$detaljnijeNovost1.'
								</div>
								</div>
						 ';
                         $slika="";
                         $autor="";
                         $datum="";
                         $naslov="";
                         $detaljnijeNovost1="";
				
			}fclose($handle);
}
?>