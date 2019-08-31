<?php
    setcookie("username", "John", time()+2000);//update existing cookie

    // To delete a cookie, set the time that has already passes
    setcookie("username", "John", time()-2000);

    // counting cookies and checking if cookies exist
    if(count($_COOKIE) > 0){
        echo "There are ".count($_COOKIE)." cookie saved<br>";
    }else{
        echo "There are no cookie saved<br>";
    }

    if(isset($_COOKIE["username"])){
        echo "User ".$_COOKIE["username"]." is set<br>";
    }else{
        echo "User not set";
    }
?>