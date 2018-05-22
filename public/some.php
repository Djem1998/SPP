<?php
/**
 * Created by PhpStorm.
 * User: samsung
 * Date: 22.05.2018
 * Time: 15:18
 */
$host = "localhost";
$user = "mysql";
$password = "mysql";
$database = "mydb";
$link = mysqli_connect($host, $user, $password, $database);
$query = "UPDATE `mydb`.`order` SET `status` = 'Done' WHERE `order`.`id_order` = " . $_POST['status'] . "";
$result = mysqli_query($link, $query);
mysqli_close($link);