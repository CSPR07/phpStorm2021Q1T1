<?php?>

<!doctype html>
<html>
<head>
    <title>Opdr5 H3</title>
    <style>

    </style>
</head>
<body>
<?php
$i = "<img src=img/zwemmer.png><img src=img/zwemmer.png><img src=img/zwemmer.png><img src=img/zwemmer.png><img src=img/zwemmer.png> De spartelkuikens 25 zwemmers";
$j = "<img src=img/zwemmer.png><img src=img/zwemmer.png><img src=img/zwemmer.png><img src=img/zwemmer.png><img src=img/zwemmer.png><img src=img/zwemmer.png> De waterbuffels 32 zwemmers";
$k = "<img src=img/zwemmer.png><img src=img/zwemmer.png> Plonsmderin 11 zwemmers";
$l = "<img src=img/zwemmer.png><img src=img/zwemmer.png><img src=img/zwemmer.png><img src=img/zwemmer.png> Bommetje 23 zwemmers";

$zwemmer = array($i, $j, $k, $l);

echo "<ul>";
foreach ($zwemmer as $zwemmer){
    echo "<li>".$zwemmer."</li>";
}
echo "</ul>";
?>
</body>
</html>