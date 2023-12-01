<?php

    $_COOKIE["visitas"] = 1;
    setcookie("visitas", null, time() + 60 * 60 * 24 * 30);

    header("Location: contadorVisitas.php");
?>