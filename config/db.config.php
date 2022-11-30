<?php

// connect to database
$conn = mysqli_connect('localhost', 'Maurice', 'Reverend01$$$$', 'trustsql');

//check connection

if (!$conn) {
    echo 'Connection error:' . mysqli_connect_error();
}

?>
