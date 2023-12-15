<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    echo "<b>punkt a<br>";
    $p = file_get_contents('plik1.txt');
    echo substr($p, 0, 8);

    echo "<br><br>punkt b<br>";
    $p = file_get_contents('plik1.txt');
    echo $p;

    echo "<br><br>punkt c<br>";
    $file = fopen('plik1.txt','r');
    //$fread = fread($file, filesize($file));
    fclose($file);
    //echo $fread;


    echo "<br><br>punkt d<br>";
    $p = file_get_contents('plik1.txt') or die("Nie mogę otworzyć pliku!");
    echo $p;

    echo "<br><br>punkt e<br>";
    $p = file_get_contents('plik1.txt');
    echo $p;
    
    ?>
</body>
</html>