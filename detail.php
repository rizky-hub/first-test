<?php
    $host ="localhost";
    $user ="root";
    $password ="";
    $db ="penerbangan";

    $conn = mysqli_connect($host, $user, $password);
    $hasil = mysqli_select_db($conn, $db);
    $query = mysqli_query($conn, 'select * from jadwal');
    $row = mysqli_fetch_assoc($query);
    echo '<pre>'; 
    print_r($row); 
    echo '</pre>';
?>