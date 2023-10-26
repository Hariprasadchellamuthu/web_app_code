<?php
$host = "your_rds_hostname";
$dbname = "your_database_name";
$username = "your_db_username";
$password = "your_db_password";

try {
    $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $name = $_POST['name'];
    $email = $_POST['email'];

    // SQL query to insert data into the database
    $sql = "INSERT INTO user_data (name, email) VALUES (:name, :email)";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);

    if ($stmt->execute()) {
        echo "Data successfully stored in the database.";
    } else {
        echo "Error storing data in the database.";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
