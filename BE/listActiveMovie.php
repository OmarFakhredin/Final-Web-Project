<?php
class Movie{
    public $id;
    public $movie;
    public $description;
    public $isActive;
    public $img;
}

session_start();
require_once("Common/dbconfig.php");

function GetMovies(){
    global $db;
    $Movies=array();
    $query="SELECT ID, MOVIE, DESCRIPTION, IS_ACTIVE FROM tbl_movies WHERE IS_ACTIVE=1";
    $stmt=$db->query($query);
    if ($stmt->rowCount()>0){
        while ($row=$stmt->fetch(PDO::FETCH_ASSOC))
        {
            $Movie=new Movie();
            $Movie->id=$row['ID'];
            $Movie->movie=$row['MOVIE'];
            $Movie->description=$row['DESCRIPTION'];
            $Movie->isActive=$row['IS_ACTIVE'];
            $Movies[]=$Movie;
        }
        return $Movies;
    }else{
        return 0;
    }
}
?>
