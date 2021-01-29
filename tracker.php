<?php
//here we go to read the mail Open

//#################################
//GET DATA
//#################################
$id= $_Get['id'];
$ip = get_ip_address();


//#################################
// FUNCTIONS
//#################################

//#################################
// Get IP adress
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
//#################################
// Capture browser
//#################################

//#################################
// Send Mail whit the information tracker using phpmailer
//#################################
function SendMail()
{
//your mail
}
//#################################
// Insert in Mysql Database
//#################################
function SaveTracker()
{
    
}

//here you can Insert the information in a Mysql database (for example)
//send other mail to your acount whit the information
//we now configure this
$sendmail=true;
$insertMysql=false;
if($sendmail)



?>