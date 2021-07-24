<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
<body>
<h1>List of Blood Donor</h1>
</body>
</head>
<body>

<?php
$host="127.0.0.1";
$user="root";
$password="";
$database="hhbloodbank";

// Create connection
$conn = new mysqli($host, $user, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name, phonenumber, bloodgroup, email, dob, gender FROM people";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Name</th><th>Phone number</th><th>Blood group</th><th>Email address</th><th>Date of Birth</th><th>Gender</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["name"]. "</td><td>" . $row["phonenumber"]. "</td><td> " . $row["bloodgroup"]. "</td><td>" . $row["email"]. "</td><td>" . $row["dob"]. "</td><td>" . $row["gender"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>