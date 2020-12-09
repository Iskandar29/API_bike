<?php
    header('Content-Type: application/json');

    $mysqli = new mysqli('localhost', 'saveitmy_admin', 'save!@#69', 'saveitmy_dbrentsepeda');

    if ($mysqli->connect_errno) {
        header('Content-Type: application/json');
        die(json_encode([
            "status" => "error",
            "message" => $mysqli->connect_error
        ]));
    }
?>