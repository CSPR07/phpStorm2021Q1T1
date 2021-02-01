<?php?>

<<!doctype html>
<html>
<head>
    <title>Opdr2 H3</title>
    <style>
        body{
            text-align: center;
        }
    </style>
</head>
<body>
<?php
for ($i = 1; $i<=9; $i++){
    for ($j = 0; $j<$i; $j++){
        echo "*";
    }
    echo "*<br>";
}

?>
</body>
</html>
