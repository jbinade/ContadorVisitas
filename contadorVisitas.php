<?php
    if (isset($_COOKIE['visitas'])) {
        //Incrementa el contador de visitas, crea la cookie con el valor incrementado y muestra el número de visitas
        $_COOKIE["visitas"]++;
        setcookie("visitas", $_COOKIE["visitas"], time() + 60 * 60 * 24 * 30);
        echo "Este usuario lleva " . $_COOKIE["visitas"] . " visitas.";
    } else {
        //Crea la cookie con el valor en 1 y muestra el mensaje de primera visita
        setcookie("visitas", 1, time() + 60 * 60 * 24 * 30);
        echo "¡Bienvenido! Es tu primera visita.";
    }

    echo "<br>";
    echo "<a href='reiniciar.php'>Reinicia el contador</a>";
    
?>