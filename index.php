<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Puzzle Css</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h4>Recomposer le sublime tableau du peintre Kees Van Dongen "Maria",<br> en plaçant les images à l'intérieur de la balise "main" et à l'aide des propriétés CSS ! ;)</h4>

        <main>
          <?php
          for ($i=1; $i <= 12; $i++) {
            echo "<img src='img/image$i.png' alt='piece de puzzle' id='img$i'>";
          }
           ?>
        </main>

    </body>
</html>
