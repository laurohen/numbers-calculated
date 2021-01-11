
<?php

$valueInput = 11;

ammountCalc($valueInput);

function ammountCalc($paramValue) {

  for ($i = 1; $i < $paramValue; $i++) {
  
    if($i % 3 == 0 || $i % 5 == 0){
       $ammount = $ammount + $i; 	     
    }
    
  }
  echo "Valor total : <br> $ammount" ;
}

?>
