<?php

try {
    $dbh = new PDO('mysql:host=mysql', 'root', 'secret');
    echo "Connected!";
    $dbh = null;
}
catch (PDOException $e) {
    echo "Failure!" . $e->getMessage();
    die();
}