<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<?php

$telefonos = [
    ["telefono" => "iPhone 13", "precio" => 900],
    ["telefono" => "Samsung Galaxy S21", "precio" => 850],
    ["telefono" => "Google Pixel 6", "precio" => 700],
    ["telefono" => "OnePlus 9", "precio" => 650],
    ["telefono" => "Xiaomi Mi 11", "precio" => 600]
];


array_push($telefonos, ["telefono" => "Huawei P50", "precio" => 800]);
array_push($telefonos, ["telefono" => "Sony Xperia 5", "precio" => 750]);


usort($telefonos, function($a, $b) {
    return $a['precio'] - $b['precio'];
});


foreach ($telefonos as $telefono) {
    echo "Teléfono: " . $telefono['telefono'] . " - Precio: $" . $telefono['precio'] . "\n";
}
?>




</body>
</html>