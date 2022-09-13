<?php 
  $s = 10; 
// center piramid 
 
 
                                 
          for($i=0; $i<=$s; $i++){ 
 
              for($a=$i; $a<=$s; $a++){ 
                  echo "&nbsp"; 
 
              } 
               
            for($r=$i+$s; $r>=$s; $r--){ 
              echo "*"; 
            } 
 
          echo "<br>"; 
} 
echo "<br>"; 
 
// reverse left sided piramid 
 
  
                        
          for($i=0; $i<=$s; $i++){ 
   
              for($a=$i; $a<=$s; $a++){ 
                echo "*"; 
   
              } 
               
  echo "<br>"; 
          } 
 
// left sided piramid 
 
 
 
for($i=0; $i<=$s; $i++){ 
            
            
  for($a=0; $a<=$i; $a++){  
   echo "*"; 
  
  } echo "<br>"; 
 } 
 
// reverse right sided piramid      
  
                        
          for($i=0; $i<=$s; $i++){ 
   
            for($r=$i+$s; $r>=$s; $r--){ 
              echo "&nbsp"."&nbsp"; 
            } 
              for($a=$i; $a<=$s; $a++){ 
                echo "*"; 
   
              } 
             
  echo "<br>"; 
          } 
 
// right sided piramid 
   
                        
    for($i=0; $i<=$s; $i++){ 
 
        for($a=$i; $a<=$s; $a++){ 
            echo "&nbsp"."&nbsp"; 
 
        } 
         
      for($r=$i+$s; $r>=$s; $r--){ 
        echo "*"; 
      } 
 
echo "<br>"; 
    } 
?>
