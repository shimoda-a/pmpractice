<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$dbServer = '175.184.35.36';
    $dbUser = 'cqm7ubg_axv';
    $dbPass = 'AICSd6PQ';
    $dbName = 'cqm7ubg_axv';
    $dsn = sprintf('mysql:host=%s;dbname=%s;charset=utf8',

 $_SERVER["C4SA_MYSQL_HOST"],

 $_SERVER["C4SA_MYSQL_DB"]);


        $db = new PDO($dsn, $dbUser, $dbPass);
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
