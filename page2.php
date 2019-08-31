<?php
    $user = ["userName" => "Ram", "email" => "ram@gmail.com", "age" => 23];

    $user = serialize($user);

    setcookie("user", $user, time()+1000);

    $user = unserialize($_COOKIE["user"]);

    print_r($user);
?>