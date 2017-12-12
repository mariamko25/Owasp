<?php

function getWallet() {
    global $DB_DB;

    if(isset($_COOKIE['username']))
        $username = $_COOKIE['username'];
    else
        return "Error";

    $sql = "SELECT wallet FROM Users WHERE username = '$username'";

    return $DB_DB->query($sql)->fetch()['wallet'];
}

function transfer($amount, $target) {
    global $DB_DB;

    if(!isset($_COOKIE['username']))
        return "Error"; // TODO : set real error.
    $me = $_COOKIE['username'];

    if(getWallet() < $amount)
        return "Error"; // TODO : set real error.
    else {
        $new_wallet = $DB_DB->query("SELECT wallet FROM Users WHERE username = '$target'")->fetch()['wallet'] + $amount;
        echo $new_wallet;
        $new_own_wallet = $DB_DB->query("SELECT wallet FROM Users WHERE username = '$me'")->fetch()['wallet'] - $amount;
        echo $new_own_wallet;
        echo "UPDATE Users(wallet) set Users('$new_wallet') WHERE username = '$target'";
        $DB_DB->query("UPDATE Users set wallet = '$new_wallet' WHERE username = '$target'");
        $DB_DB->query("UPDATE Users set wallet = '$new_own_wallet' WHERE username = '$me'");
    }
}

?>