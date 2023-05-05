<!DOCTYPE html>
<html>
<head>
    <title>CRUD</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
        }
    </style>
</head>
<body>
    <h1>CRUD</h1>
    <a href="form.php">Add</a>
    <?php
    require_once 'functions.php';

    if(isset($_POST['delete'])) {
        $id = $_POST['id'];
        delete($id);
        header("Location: index.php");
    }

    $result = read();

    if ($result->num_rows > 0) {
        echo "<table><tr><th>ID</th><th>Name</th><th>Action</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td><form method='POST'><input type='hidden' name='id' value='" . $row['id'] . "'><button type='submit' name='delete'>Delete</button></form></td></tr>";
        }
        echo "</table>";
    } else {
        echo "<table><tr><th>ID</th><th>Name</th><th>Action</th></tr></table>";
    }
    ?>
</body>
</html>