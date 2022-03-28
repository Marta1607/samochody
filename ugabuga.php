
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Wynajmujemy samochody</title>
</head>
<body>
    <div class="baner">
        <h1>Wynajem Samochodów</h1>
    </div>
    <div class="lewy">
        <h2>DZIŚ POLECAMY TOYOTĘ ROCZNIK 2014</h2>
<?php
    $pobieranie = mysqli_connect("localhost","root","","auta");
    $q = mysqli_query($pobieranie,"SELECT id, marka, model, kolor FROM samochody WHERE marka= 'Toyota' AND rocznik= 2014");
    while($t=mysqli_fetch_assoc($q))
         echo $t['id']." Toyota ".$t['model']." Kolor: ".$t['kolor'];
?>
        <form action="ugabuga.php" method="POST">
        </form>

        <h2>WSZYSTKIE DOSTĘPNE SAMOCHODY</h2>
        <?php
        
        $q = mysqli_query($pobieranie,"SELECT id, marka, model, rocznik FROM samochody");
        while($t=mysqli_fetch_assoc($q))
        echo $t['id']."  ".$t['model']."  ".$t['marka']."  ".$t['rocznik'].'<br>';


        ?>
    </div>
    <div class="srodek">
        <h2>ZAMÓWIONE AUTA Z NUMERAMI TELEFONÓW KLIENTÓW</h2>
        <?php
            $q = mysqli_query($pobieranie,"SELECT samochody.id, samochody.model, zamowienia.telefon FROM samochody, zamowienia WHERE samochody.id=zamowienia.Samochody_id");
            while($t=mysqli_fetch_assoc($q))
            echo $t['id']."  ".$t['model']."  ".$t['telefon'].'<br>';
    
        
        ?>
    </div>
    <div class="prawy">
        <h2>NASZA OFERTA</h2>
        <ul>
            <li>Fiat</li>
            <li>Toyota</li>
            <li>Opel</li>
            <li>Mercedes</li>
        </ul>
        <p>Tu pobierzesz naszą</p> <a>bazę danych</a>
        <br>
        <p>Autor strony: 2137</p>
    </div>
</body>
</html>