<?php

define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "chatbox");

$link = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if(mysqli_connect_errno()) {
    die("Failed to connect: " . mysqli_connect_error());
}