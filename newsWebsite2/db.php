<?php

$host = "localhost:3307";
$user = "root";
$pass = "";
$db = "newsWebsite2";

if( !$con = mysqli_connect($host, $user, $pass, $db)){
    die("failed to connect!");
}


function formatDay($date){
    return date('l', strtotime($date));
}

function formatDate($date){
    return date('y-m-d', strtotime($date));

}

function formatTime($date){
    return date('g:i a', strtotime($date));
}


