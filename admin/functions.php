<?php
function get_user_count(){
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"lms");
    $query = "SELECT * FROM `users`";
    $query_run = mysqli_query($connection,$query);
    $num = mysqli_num_rows($query_run);
    return($num);
}


function get_book_count(){
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"lms");
    $query = "SELECT * FROM `books`";
    $query_run = mysqli_query($connection,$query);
    $num = mysqli_num_rows($query_run);
    return($num);
}


function get_issued_book_count(){
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"lms");
    $query = "SELECT * FROM `issued_books`";
    $query_run = mysqli_query($connection,$query);
    $num = mysqli_num_rows($query_run);
    return($num);
}


?>