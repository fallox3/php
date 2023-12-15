<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="submit" value="Dodaj tekst" name="btn">
    </form>
    <?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nazwa = 'plik1.txt';
    $plik = fopen($nazwa, 'a+');

    if ($plik) {
        $currentText = fread($plik, filesize($nazwa));
        fclose($plik);

        $newText = " Nowy tekst dopisany na końcu pliku. ";

        $plik = fopen($nazwa, 'a+');
        fwrite($plik, $newText);
        fclose($plik);
    }
}

?>

    
    
    
</body>
</html>