<!DOCTYPE html>
<?php
header("Content-Type:text/html;charset=utf8");
include("pdolog.php");
$name = $_REQUEST["name"];
$id = $_REQUEST["number"];
$result = $link->prepare("select * from score where id =? and name =?");

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<center>
<table border=1>

<tr>
    <td width = 80 align = 'center'>學號</td>
    <td width = 80 align = 'center'><?php if ($result->execute(array($id,$name))) {
    while($row=$result->fetch()){echo$row['id'];}}?></td>
</tr>
<tr>
    <td width = 80 align = 'center'>姓名</td>
    <td width = 80 align = 'center'><?php if ($result->execute(array($id,$name))) {
    while($row=$result->fetch()){echo$row['name'];}}?></td>
</tr><tr>
    <td width = 80 align = 'center'>成績</td>
    <td width = 80 align = 'center'><?php if ($result->execute(array($id,$name))) {
    while($row=$result->fetch()){echo$row['score'];}}?></td>
</tr>

<tr>
    <td width = 80 align = 'center'>缺席次數</td>
    <td width = 80 align = 'center'><?php if ($result->execute(array($id,$name))) {
    while($row=$result->fetch()){echo$row['absent'];}}?></td>
</tr>



</table>
</center>
</body>
</html>
