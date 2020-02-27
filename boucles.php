<?php
// // ex 1
// for ($i = 1; $i < 150; $i +=2) {
//     echo ($i . "<br>");
// }

// // ex 2
// $j = 1;
//  while ($j<=150) {
// echo($j . " Je dois faire des sauvegardes régulières de mes fichiers <br> ");
// $j++;
//  }
 

 ?>



<?php
// ex 3
$thead = [];
for ($i = 0; $i <= 12; $i++) {    
   array_push($thead, $i);
}

$tabMult = [];

for ($i = 0; $i <= 12; $i++) {
    $temp = [];
    for($j = 0; $j <= 12; $j++) {
       array_push($temp, $i*$j);
    }
array_push($tabMult, $temp);
}


 ?>

<table style="border: 1px solid black;">
  <thead>
    <tr>
    <th style="border: 1px solid black;"></th>
   <?php for ($i = 0; $i <= 12; $i++) { ?>
      <th style="border: 1px solid black;"><?php print_r($thead[$i]); ?></th>
     <?php } ?>
    </tr>
  </thead>
  <tbody>


<?php for ($i = 0; $i < count($tabMult); $i++) { 
     ?>
    <tr>
      <td style="border: 1px solid black;"><b><?php echo $i; 
      for($j = 0; $j < count($tabMult[$i]); $j++) {?></b> </td>
      <td style="border: 1px solid black;"><?php print_r($tabMult[$i][$j]); ?></td>
    
<?php }} ?>
</tr>

  </tbody>
</table>











