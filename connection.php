<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection code (replace with your database details)
$servername = "localhost";
$username = "root";
$password = "9528176114";
$dbname = "car_options";

$conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Process form data
    $carOptions = isset($_POST["carOptions"]) ? implode(", ", $_POST["carOptions"]) : "None";
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $address = $_POST["address"];

  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    //
  }

     if (strlen($phone) !== 10 || !ctype_digit($phone)) {
        echo "Invalid Phone number . Please enter the 10  digit phone number.";
    } else {
        // Proceed with database insertion
        // ... (your database insertion code)
    }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    //
  }


    // Insert data into the database (replace with your table and column names)
    $sql = "INSERT INTO customer_data (car_options, name, phone, email, address) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $carOptions, $name, $phone, $email, $address);
    $stmt->execute();

    // Close the database connection
    $stmt->close();
    $conn->close();

    // Redirect to a thank-you page
    header("Location: thank-you.php");
    exit();
}
?>