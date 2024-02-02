<?php

$host = "localhost";

$username = "store_admin";

$password = "password1#";

$database = "projectoutro";

$conn = mysqli_connect($host, $username, $password, $database);

if (mysqli_connect_error()) {

    die("Connection failed: " . mysqli_connect_error());
}

$panel_request = mysqli_real_escape_string($conn, $_POST['panel_request']);




$query = "INSERT INTO proj1panel (panel_request) 
          VALUES ('$panel_request')";

$result = mysqli_query($conn, $query);

if (!$result) {

    echo "Query execution failed: " . mysqli_error($conn);

    die();

} else {

    header("Location: dashboard.php");
    exit();
}

mysqli_close($conn);

?>