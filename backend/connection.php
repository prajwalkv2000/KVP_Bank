<?php

    $sn = "127.0.0.1:3308";
    $un = "root";
    $ps = "";
    $db = "bank";

    $conn = mysqli_connect($sn,$un,$ps,$db);

    if (!$conn) {
        die("Connection Error!");
    }

?>