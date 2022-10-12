<?php
    $destino="simon@gmail.com";
    $asunto="Su amigo le esta recomendando un sitio";
    $desde='From:' .$_POST['email'];
    $cuerpo= "
    \n
    Hola $_POST[nombre] !\n
    
    $_POST[mensaje]\n

    Gracias por recomendar nuestro sitio *****.com.ar
    \n
    ";
    mail($destino,$asunto,$cuerpo,$desde);
    echo "Recomendación enviada con éxito.";
?>