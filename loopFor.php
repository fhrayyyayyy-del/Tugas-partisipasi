<?php 
//Pengulangan For
$counter = 0;


for($counter = 10 ; $counter < 20; $counter++){
    echo "angka ke - " . $counter . "<br>";
}

for ($fahira = 1; $fahira <= 50; $fahira++){
    if ($fahira % 3 == 0 && $fahira % 5 == 0 ){
        echo " upin dan ipin selamanya " . "<br>";
    }elseif ($fahira % 3 == 0){
        echo " ipin " . "<br>";
    }elseif ($fahira % 5 == 0){
        echo " upin " . "<br>";
    } else {
        echo $fahira . "<br>";
    }
}
?>

