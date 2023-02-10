<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $polaczenie = mysqli_connect('localhost', 'root', '', 'wedkowanie');
        $imie = $_POST['imie'];
        $nazwisko = $_POST['nazwisko'];
        $adres = $_POST['adres'];

        $zapytanie = "INSERT INTO karty_wedkarskie VALUE (NULL, '$imie', '$nazwisko', '$adres', NULL, NULL)";
        $wynik = mysqli_query($polaczenie, $zapytanie);
        if ($wynik)
            echo 'Dodano rekord do bazy danych';
        mysqli_close($polaczenie);
    ?>
</body>
</html>