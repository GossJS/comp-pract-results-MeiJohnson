<?php
 $dbloc = 'kodaktor.ru' ;
 $dbuser = 'reader';
 $dbname = 'readusers';
 $dbpass = '123321';
 $dsn = "mysql:host={$dbloc};dbname={$dbname}";
 $conn = new PDO($dsn, $dbuser, $dbpass);
 $id = 4;
 $sql = "SELECT `logins`.`id`, `login`, `password` FROM `logins` RIGHT JOIN
`passwords` ON `logins`.`id` = `passwords`.`login_id` WHERE
`logins`.`id`='{$id}'";
 $result = $conn -> query($sql) -> fetch(PDO::FETCH_OBJ);
 echo $result -> id;
 echo $result -> login;
 echo $result -> password; 
