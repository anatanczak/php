<?php

$a = array("19001" => array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "", "", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", "Validation"),
     "19002" => array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", ""),
     "19003" => array("", "", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "", "", "Validation")
   );


//var_dump($a);
//ex 2
foreach ($a["19002"] as $key => $value) {
  if ($value == "Validation") {
    echo $key;
  }
}

//ex 3
$lastInternship;
foreach ($a["19001"] as $key => $value) {
  if ($value == "Stage") {
    $lastInternship = $key;
  }
}
// TODO: CHECK IF IT IS NOT NULL BEFORE ECHOING IT OUT
echo "<br>" . $lastInternship . "<br>";

// Ex 3
$codes = array_keys($a);
print_r($codes);

// Ex4

$count = 0;
foreach ($a["19003"] as $key => $value) {
  if ($value == "Stage") {
    $count++;
  }
}
echo "<br>" . $count;

?>
