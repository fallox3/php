<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$nazwa = 'plik1.txt';
$plik = fopen($nazwa, 'r+');

if ($plik) {
    $currentText = fread($plik, filesize($nazwa));

    rewind($plik);
    fwrite($plik, "Nowy tekst dopisany na początku pliku. $currentText");

    fclose($plik);
}
?>

</body>
</html>