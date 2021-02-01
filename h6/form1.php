<?php

$host = 'localhost';
$port = '3306';
$user = 'root';
$pass = 'R@ps@c2307';
$db = 'school';

$dbh = new PDO('mysql:host='.$host.';dbname='.$db.';port='.$port, $user, $pass);
