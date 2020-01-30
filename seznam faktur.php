<!DOCTYPE html>
<html lang="en">
<head>
    <title>Faktury</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
<br>
<div class="container">
    <h1>Seznam faktúr</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Číslo faktúry</th>
                <th>IČO klient - odberatel</th>
                <th>IČO partner - dodavatel</th>
                <th>Cena</th>
            </tr>
        </thead>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>


<?php
$handle = fopen('Andulka.csv', 'r');

if ($handle) {
    while (($line = fgets($handle, 4096)) !== false) {
        $hodnoty = explode(';', $line);
        echo '<tr><td>';
        echo($hodnoty[0]);
        echo '</td><td>';
        echo($hodnoty[1]);
        echo '</td><td>';
        echo($hodnoty[2]);
        echo '</td><td>';
        echo($hodnoty[3]);
        echo '</td></tr>';
    }
}

    ?>

    </table>
</div>
</body>
</html>

