<?php

header("Content-Type:text/html;charset=utf8");
include("pdolog.php");

$id = 123;
$result = $link->prepare("select * from hsuan where cid <=?");

if ($result->execute(array($id))) {
    while($row=$result->fetch()){
        echo"ID: {$row['cid']}<br> Name: {$row['cname']}<br>Email: {$row['cemail']}<br>Phone: {$row['cphone']}<hr>";
    }
}



// header("Content-Type:text/html;charset=utf8");
// include("log.php");

// $sex="m"; $id = 126;
// $sob = $link->prepare("select * from hsuan where csex=? and cid<=?");

// if ($sob -> execute(array($sex,$id))) {
    
    
//     while ($row =$sob->fetch()) {
//         echo"ID: {$row['cid']}<br> Name: {$row['cname']}<br>Email: {$row['cemail']}<br>Phone: {$row['cphone']}<hr>";
//         echo'yeah';
//     }
// }


?>