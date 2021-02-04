<?php
$a[]='adivise';
$a[]='become';
$a[]='commit';
$a[]='dictionary';
$a[]='endeavour';
$a[]='feel';
$a[]='gear';
$a[]='home';
$a[]='intend';
$a[]='jump';
$a[]='know';
$a[]='liaise';
$a[]='mean';
$a[]='nepotism';
$a[]='omnipotent';
$a[]='persistent';
$a[]='set';
$a[]='sad';
$a[]='temper';
$a[]='undo';
$a[]='vandalise';
$a[]='wear';
$a[]='xylophone';
$a[]='tear';
$a[]='year';
$q = $_GET['q'];
if(strlen($q)>0) {
  $hint="";
  for($i=0; $i<count($a); $i++) {
    if(strtolower($q) == strtolower(substr($a[$i],0,strlen($q)))) {
      if($hint=="") {
        $hint=$a[$i];
      }
      else {
        $hint .=",".$a[$i];
      }
    }
  }
  if($hint=="")
    $response="no suggestions";
  else {
    $response = $hint;
  }
  echo $response;
}
?>
