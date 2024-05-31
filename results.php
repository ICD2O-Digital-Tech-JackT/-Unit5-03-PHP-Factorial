<?php
  $Num = $_POST['num'];
  $Result = 0;
  $Valid = false;
  $Current = $Num;
if ($Num){
  //Checking if numbers are whole and positive
  if(floatval($Num)%1==0&&floatval($Num)>0){
    do {
      //incrimenting down
      $Current-=1;
      //checking if we can multiply
      if ($Current>0){
        $Num*=$Current; //multiplying num
      }
    } while($Current>0);
    $Valid = true;   
  }
}
?>
<?php
  if ($Valid == true){
    //Display result
   echo "Result: ".$Num;
  } else{
    //Display error
   echo "Please enter a whole, positive number.";
  }
?>