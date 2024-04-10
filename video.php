<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video On Demand</title>
    <link rel="stylesheet" href="styl3.css">
</head>
<body>
    <header>
        <div id="left">
            <h1>Internetowa wypożyczalnia filmów</h1>
        </div>
        <div id="right">
            <table>
                <tr>
                    <th>Kryminał</th>
                    <th>Horror</th>
                    <th>Przygodowy</th>
                </tr>
                <tr>
                    <td>20</td>
                    <td>30</td>
                    <td>20</td>
                </tr>
            </table>
        </div>
    </header>
    <div id="recomended" class="list">
        <h3>Polecamy</h3>
        <div class="rodzic">
            <?php include_once 'skrypt1.php';?>
        </div>
    </div>
    <div id="fantastic" class="list">
        <h3>Filmy fantastyczne</h3>
        <div class="rodzic">
        <?php include_once 'skrypt2.php';?>
        </div>
    </div>
    <footer>
        <p>Stronę wykonał Paterek Bartosz</p>
    </footer>
</body>
</html>