<?php
include_once("connection.php");
$stmt = $conn->prepare("DROP TABLE IF EXISTS users2;
CREATE TABLE users 
(userid INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY, clientname VARCHAR(30) 
NOT NULL, firstname VARCHAR(30) NOT NULL, surname VARCHAR(30) NOT NULL, 
email VARCHAR(30) NOT NULL, emergencycontact VARCHAR(30) NOT NULL)");
$stmt->execute();
$stmt->closeCursor();

$stmt = $conn->prepare("DROP TABLE IF EXISTS users2;
CREATE TABLE sitters 
(sitterid INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY, clientname VARCHAR(30) 
NOT NULL, firstname VARCHAR(30) NOT NULL, surname VARCHAR(30) NOT NULL, 
email VARCHAR(30) NOT NULL, emergencycontact VARCHAR(30) NOT NULL)");

$stmt = $conn->prepare("DROP TABLE IF EXISTS booking;
CREATE TABLE booking(bookid INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY, sittername VARCHAR(30),startdate VARCHAR(10), enddate VARCHAR(10), confirm INT(4), userid INT(10));");

$stmt->execute();
$stmt->closeCursor();

