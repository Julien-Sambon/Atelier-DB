<?php

define('DSN', 'mysql:host=localhost;dbname=Blog');
define('USER', 'julien');
define('PASS', '');

$pdo = new PDO(DSN, USER, PASS);