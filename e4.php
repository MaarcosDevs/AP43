<?php

$city = "Tokyo,Mexico,City New York City,Mumbai,Seoul,Shanghai,Lagos,Buenos Aires,Cairo,London";
$country = "Japan,Mexico,USA,India,Korea,China,Nigeria,Argentina,Egypt,England";
$cityes = explode(",", $city);
$countryes = explode(",", $country);
$array = [];

for($i=0;$i<count($cityes);$i++){
    $array [$i][0] = $cityes [$i];
    $array [$i][1] = $countryes [$i];
}

var_dump($array);
?>  


