<?php
 $dbloc = 'kodaktor.ru' ;
 $dbuser = 'reader';
 $dbname = 'readusers';
 $dbpass = '123321';
 $dsn = "mysql:host={$dbloc};dbname={$dbname}";
 return new PDO($dsn, $dbuser, $dbpass);