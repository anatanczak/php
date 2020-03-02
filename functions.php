<?php declare(strict_types=1); // strict requirement

function addNumbers(int $a, int $b, string $c) {

  switch ($c) {
    case "+":
    return $a + $b;
    break;
    case "-":
    return $a - $b;
    break;
    case "*":
    return $a * $b;
    break;
    case "/":
    return $a / $b;
    break;
    default:
    return "Operator is not valid";
  }
}

echo addNumbers(5, 6, "+");
// since strict is enabled and "5 days" is not an integer, an error will be thrown
?>
