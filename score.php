<?php
header("Content-Type:text/html;charset=utf8");
include("pdolog.php");
$name = $_REQUEST["name"];
// $id = $_REQUEST["number"];

$result = $link->prepare("select * from score where name =?");
$array = array();
if ($result->execute(array($name))) {
    while($row=$result->fetch()){array_push($array,$row["name"]);}}
if (!in_array($name,$array)) {return header('Location:score.html');;}    



if ($result->execute(array($name))) {
    while($row=$result->fetch()){

        $score = 83 - $row["absent"]*3 +$row["miss"]*5;
        echo "成績： ".$score;
       
        // echo"ID: {$row['id']}<br> Name: {$row['name']}<br> Score : {$row['score']}";
    
    }
}
?>

