<?php 

require_once "config.php";

$name = $dob = $email = $password = "";
$name_err = $dob_err = $email_err = $passwrod_err = "";

if(isset($_POST["id"]) && !empty($_POST["id"])) {
    $id = $_POST["id"];

    $input_name = trim($_POST["name"]);
    if (empty($input_name)){
        $name_err= "Please enter a name.";
    } else {
        $name = $input_name;
    }

    $input_dob = trim($_POST["dateOfBirth"]);
    if (empty($input_dob)){
        $dob_err= "Please enter a name.";
    } else {
        $dob = $input_dob;
    }



