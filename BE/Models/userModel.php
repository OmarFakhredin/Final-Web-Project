<?php

/**
 * adds a user to array users
 * @param $user is a dictionary with user attributes
 * returns bool
 */
/*
This method inserts the admin info into the table
*/
function Signup($user, $db)
{
    $query = "INSERT INTO `tbl_users` (`USERNAME`,`EMAIL`,`FN`,`LN`,`PASSWORD`,`SEX`) VALUES ('$user->username','$user->email','$user->firstname','$user->lastname',PASSWORD('$user->password'),'$user->sex')";
    $stmt = $db->query($query);
    if ($stmt->rowCount() > 0)
        return true;
    else
        return false;
}
/*
This method is for checking the credentials
*/

function Login($un, $pass, $db)
{
    $query = "SELECT ID,FN,LN,PASSWORD FROM tbl_users WHERE USERNAME='$un' AND PASSWORD=PASSWORD('$pass')";
    $stmt = $db->prepare($query);
    $stmt->execute(['un' => $un, 'pass' => $pass]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($stmt->rowCount() > 0) {
        $name = $row["FN"] . " " . $row["LN"];
        return $name;
    } else {
        return false;
    }
}
