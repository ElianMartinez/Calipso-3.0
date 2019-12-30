<?php

header("HTTP/1.1 200 ");

if($_SERVER['REQUEST_METHOD'] == "POST"){
    echo "ES POST";
}elseif($_SERVER['REQUEST_METHOD'] == "GET"){
    echo "ES GET";
}

?>