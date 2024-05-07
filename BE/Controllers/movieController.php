<?php

session_start();
require_once("../Common/dbconfig.php");
require_once("../Models/movieModel.php");
require_once("../Movie.php");

if (!isMissingArgs()) {
    $id = $_POST["id"];
    $isActive = $_POST["activate"];
    if (activateMovie($id, $isActive, $db)) {
        header("location:../../FE/pages/activateMovie.php");
    } else {
        header("location:../../FE/pages/activateMovie.php?errorCode=1&errorDesc=Database error!");
    }
} else {
    header("location:../../index.php?errorCode=2&errorDesc=Server Error!");
}

function isMissingArgs()
{
    return !isset($_POST["id"]) || !isset($_POST["activate"]);
}
