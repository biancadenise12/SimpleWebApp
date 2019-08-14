<?php
$servername = "localhost";
$user = "root";
$password = "Passw0rd!";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table
$sql = "CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>

?>

<html>
<title>Simple Web App</title>
<body>
    <center>
        <h2>Welcome to DXC Technology!</h2>
        <img src="dxc.jpg" alt="DXC Tech"><br>
        <!-- <form action="/action_page.php"> -->
        First name: <input type="text" name="FirstName"><br>
        Last name: <input type="text" name="LastName"><br><br>
        <input type="submit" value="Submit">
        <!-- </form> -->
        <p>Click the "Submit" button and the form-data will be sent to a page on the server called "/action_page.php".</p>
    </center>
</body>
</html>