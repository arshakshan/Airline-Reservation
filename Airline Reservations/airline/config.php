<?php

$server='localhost';
$user='root';
$pass='';
$db='airline2';

$db= new mysqli('localhost',$user,$pass,$db) or die("unable to connect");

if(!conn)
echo "Connection error <br>";
else
echo "Connection success <br>";



?>