<?php
$servername = "your_server_name";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

// Step 3: Establish Database Connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Step 4: Retrieve Hospital Names
$sql = "SELECT name FROM hospitals";
$result = $conn->query($sql);

$hospital_names = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $hospital_names[] = $row['name'];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        <label for="hospital">Select a Hospital:</label>
        <select id="hospital" name="hospital">
            <?php
            foreach ($hospital_names as $hospital) {
                echo "<option value=\"$hospital\">$hospital</option>";
            }
            ?>
        </select>
        <button type="submit">Submit</button>
    </form>
    
</body>
</html>
<?php
// Step 6: Close Database Connection
$conn->close();
?>