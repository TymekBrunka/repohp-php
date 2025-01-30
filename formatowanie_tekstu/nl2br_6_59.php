<!DOCTYPE HTML>
<html>
    <head>
    <title>Funkcja nl2br</title>
    <meta charset="UTF-8">
    <style>
        p {
         font-weight: bold;
        }
    </style>
</head>
    <body>
        <?php
        $tekst = <<<TX
         Na cóż czekamy, zebrani na rynku?
         Dziś mają tu przyjść barbarzyńcy.
         Dlaczego taka bezczynność w senacie?
         Senatorowie siedzą–czemuż praw nie uchwalą?
        TX;
        echo "<p>Tekst przed użyciem funkcji nl2br():</p>";
        echo $tekst."<br>";
        echo "<p>Tekst po użyciu funkcji nl2br():</p>";
        echo nl2br($tekst);
        ?>
    </body>
</html>
