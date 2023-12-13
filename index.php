<?php
header("Location: ./views/actor");
die;

?>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sakila";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT * FROM `actor`";
$result = $conn->query($sql);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
while($row = $result->fetch_assoc()) {
    echo "<p>id: " . $row["actor_id"]. " - Name: " . $row["first_name"]. " " . $row["last_name"]. "</p>";
}
$conn->close();
?>
</body>
</html>