<?php
function faktorial($number)
{
     $result = 1;
     for ($i= $number; $i >= 1 ; $i--) { 
        $result=$result * $i;

    }
    return $result;
}
    echo "Faktorial of 4 is ".faktorial(4);
?>

<?php
$person = [
    ["name" => "john cena", "height" => 1.8,"weight" => 100]
    ["name" => "Reynand","height" => 1.76,"weight" =>50]
    ["name" => "Kenzie","height" => 1.76,"weight" =>76]
]
?>
