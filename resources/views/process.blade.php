<?php

// FILTERING VARIABLES [CHECK IF VALUE EXISTS]

$name = $_POST["name"];
$payment = filter_input(INPUT_POST, "payment", FILTER_VALIDATE_INT);
$type = filter_input(INPUT_POST, "type", FILTER_VALIDATE_INT);
$additional = filter_input(INPUT_POST, "additional", FILTER_VALIDATE_INT);
$message = $_POST["message"];
$confirm = filter_input(INPUT_POST, "confirm", FILTER_VALIDATE_BOOL);

// CONFIRM ORDER [VALIDATION]

if ( ! $confirm) {
    die("Order must be confirmed");
}   

// DATABASE CONNECTION 

