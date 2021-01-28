<?php
//here we go to read the mail Open

//#################################
//OBTENEMOS Los DATOS
//#################################
$id= $_Get['id'];
$ip = get_ip_address();


//#################################
// FUNCIONES
//#################################


function get_ip_address() {

    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {

        $ip = $_SERVER['HTTP_CLIENT_IP'];

    } else {

        if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {

            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];

        } else {

            $ip = $_SERVER['REMOTE_ADDR'];
        }
    }
    return $ip;
}




?>