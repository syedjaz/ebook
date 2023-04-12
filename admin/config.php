<?php
$con = mysqli_connect('localhost','root','','ebook_project');
if(!$con){
    echo "Connection Failed";
}
session_start();

?>