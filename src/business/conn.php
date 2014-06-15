<?php
/**
 * Created by PhpStorm.
 * User: lijianying
 * Date: 14-6-15
 * Time: 下午9:01
 */
include 'notorm/NotORM.php';
$pdo = new PDO("mysql:host=127.0.0.1;dbname=softwaredownloadsite;",'root','1');
$db = new NotORM($pdo);
?>