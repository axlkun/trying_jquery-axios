<?php
    //esto se hace por que desde el frontend se envia la informacion como cadena json, por lo que en el backend se debe acceder al flujo usando file_get_contents("php://input") la cual contiene el json, posteriormente la convertimos en arreglo asociativo y la volvemos a almacenar en la variable post.
    //con urlencoded no es necesario hacer estp
    $_POST = json_decode(file_get_contents("php://input"),true);
    echo json_encode($_POST);
    //echo json_encode($_GET);
?>