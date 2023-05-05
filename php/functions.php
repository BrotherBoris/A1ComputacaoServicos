<?php

function read() {
    $servername = "mysql";
    $username = "admin";
    $password = "123456789";
    $dbname = "gamedb";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT id, name FROM game";
    $result = $conn->query($sql);

    $conn->close();

    return $result;
}

function delete($id) {
    $servername = "mysql";
    $username = "admin";
    $password = "123456789";
    $dbname = "gamedb";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "DELETE FROM game WHERE id = $id";
    $conn->query($sql);

    $conn->close();
}
function create($name) {
    $servername = "mysql";
    $username = "admin";
    $password = "123456789";
    $dbname = "gamedb";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $name = mysqli_real_escape_string($conn, $name);

    $sql = "INSERT INTO game (name) VALUES ('$name')";
    $conn->query($sql);

    $conn->close();
}

if(isset($_POST['add'])) {
    $name = $_POST['name'];
    create($name);
    header("Location: index.php");
}
?>
