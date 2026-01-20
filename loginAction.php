<?php include 'includes/header.php'; ?>
<?php

/*
 * Storing Info
 * DO NOT ACTUALLY DO THIS ON A PRODUCTION SITE
 * usernaame: yeah
 * password: bro
 * hash: 0cfe0ef3a357503c4a4538414b870ca1
 */

$username = "yeah";
$passHash = "0cfe0ef3a357503c4a4538414b870ca1";

if($username === $_POST["user"]){
    echo "username authenticated <br>";
    if($passHash === md5($_POST["pass"])){
        echo "password authenticated <br>";
        session_start();
        $_SESSION['status'] = "loggedIn";
        $_SESSION['username'] = $_POST["user"];
    }
}

?>
<?php include 'includes/footer.php'; ?>
