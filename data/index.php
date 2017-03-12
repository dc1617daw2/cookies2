<html>
    <head>
        <meta charset="UTF-8">
        <title>Creant Cookies amb PHP</title>
    </head>
    <body>
        <?php
            echo "Afegint Cookies<br>";
            echo "Sóc el desenvolupador dc1617daw2";
            setcookie("nom", "Jaume Pons", time()+3600, "/", "", 0);
            setcookie("age", "20", time()+3600, "/", "", 0);
        ?>  
    </body>    
</html>

