

<?php
// An associative array
$marks[] = array("asha"=>'index 0 init', "disa"=>158, "casa"=>708, "puni"=>'index 0 exit');
$marks[] = array("kushi"=>'index 1 init', "pakhi"=>$marks, "jayu"=>$marks, "piu"=>'index 1 exit');
$marks[] = array("manchu"=>'index 2 init', "suni"=>830, "soniya"=>78, "sonila"=>'index 2 exit');
$marks[] = array("sharmista"=>'index 3 init', "mousumi"=>$marks, "tumpa"=>728, "shilpa"=>'index 3 exit');
$marks[] = array("sayani"=>'index 4 init', "madhu"=>$marks, "priya"=>768, "sraboni"=>'index 4 exit');
$marks[] = $marks;
$marks[] = (object) ["arpita"=> $marks];
$marks[] = array($marks, $marks, $marks, $marks, $marks);
$marks[] = array("devi"=> $marks);
echo "<pre>";
 print_r($marks);
 echo "<br> <br> JSON:<hr><br>";
echo json_encode($marks);
?>
