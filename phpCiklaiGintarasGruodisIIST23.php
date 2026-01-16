<?php
// Pradinė reikšmė
$x = 9; // gali pakeisti į bet kokį skaičių
$iteracijos = 0;
echo "Pradžia: $x\n";
// Kartojame, kol reikšmė taps 1
while ($x != 1) {
    if ($x % 2 == 0) {
        // Lyginis skaičius – daliname iš 2
        $x = $x / 2;
    } else {
        // Nelyginis skaičius – skaičiuojame 3x + 1
        $x = 3 * $x + 1;
    }
    $iteracijos++;
    echo "Reikšmė: $x\n";
}
echo "Iteracijų skaičius: $iteracijos\n";
?>

