<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kwiaty</title>
    <link rel="stylesheet" href="styl3.css">
</head>
<body>
    <section id="baner"><h1>Grupa Polsich Kwiaciarni</h1></section>
    <section id="lewy"><h2>Menu</h2>
    <ol>
        <li><a href="index.html">Strona główna</a></li>
        <li> <a href="https://www.kwiaty.pl" target="_blank">Rozpoznaj kwiaty</a></li>
        <li><a href="http://localhost/egzamin/znajdz.php"> Znajdź kwiaciarnie </a><ul>
            <li>w Warszawie</li>
            <li>w Malborku</li>
            <li>w Poznaniu</li>
        </ul></li>
    </ol>
    </section>
    <section id="prawy">    
        <h2>Znajdź kwiaciarnie</h2>
        <form action="" method="post">
            <label for="tekst">Podaj nazwę miasta:</label>
            <input type="text" name="tekst" id="tekst">
        </form>
    </section>
    <section id="stopka"><p>Stronę opracował: 3</p>
    </section>
    

</body>
</html>
    <?php 
    $connect = mysqli_connect(localhost, root, kwiaciarnia);
    if mysqli_error($connect)
        echo mysqli_error
    mysqli_select_db($connect, kwiaciarnia);
    
$zapytanie = mysqli_query($connect, SELECT miasto FROM kwiaciarnie WHERE miasto = [$_POST($tekst)]/^ ) 
mysqli_fetch_array($zapytanie)
?>
</body>
</html>