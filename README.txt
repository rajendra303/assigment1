README - Car Options Form

==============================

This is a simple HTML form for selecting car options and collecting customer information. Below, you'll find an overview of the files and the purpose of this code.

Files Included:
----------------

1. index.html: This is the main HTML file containing the car options form and customer information fields.

2. style.css: The custom CSS file that styles the form and adds visual enhancements.

3. bootstrap.min.css: The Bootstrap CSS file used for styling some form elements. It's included from a CDN (Content Delivery Network).

4. bootstrap.bundle.min.js: The Bootstrap JavaScript file used for optional functionality. Also included from a CDN.

Purpose:
--------

This HTML form is designed to allow users to select car options (Hatchback, Sedan, SUV) and provide their personal information. It includes the following sections:

1. Car Options:
   - Three checkboxes for selecting car types.
   - Users can select one or more options.

2. Customer Information:
   - Name: Text input for the user's name (required).
   - Phone Number: Telephone input for the user's phone number (required).
   - Email ID: Email input for the user's email address (required).
   - Address: Textarea for the user's address (required).

3. Submit Button:
   - A "Submit" button to send the form data to a server-side script (action="connection.php").

Styling:
--------

The form and its elements have been styled using custom CSS to provide a clean and visually appealing user interface. Bootstrap is used for some styling and optional JavaScript functionality.

Usage:
------

1. You can deploy this form on a web server and configure the form action (action="connection.php") to handle the form submissions on the server side.

2. Customize the form as needed, and you can modify the CSS styles in the `<style>` section to match your design preferences.

3. Ensure you have an external server-side script (e.g., PHP) to handle form submissions and process the data submitted by users.

4. You can further enhance this form by adding server-side validation and data processing as per your project requirements.



README - Database Connection for Car Options Form

===============================================

This README file provides instructions on how to create a database and establish a connection for the PHP code used in the Car Options Form. You'll need to set up a database to store the form submissions.

Database Setup:
----------------

1. **Database Server:** Make sure you have a MySQL or MariaDB database server set up. You can install one locally using software like XAMPP, WAMP, or use a remote server.

2. **Create a Database:** Using a MySQL client (such as phpMyAdmin or MySQL Workbench), create a new database named `car_options` (or choose a suitable name).

3. **Create a Table:** Inside the `car_options` database, create a table named `customer_data`. You can use the following SQL command as an example:

   ```sql

CREATE DATABASE car_options;

   CREATE TABLE customer_data (
       id INT AUTO_INCREMENT PRIMARY KEY,
       car_options VARCHAR(255),
       name VARCHAR(255) NOT NULL,
       phone VARCHAR(20) NOT NULL,
       email VARCHAR(255) NOT NULL,
       address TEXT NOT NULL
   );


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection code (replace with your database details)
    $servername = "localhost"; // Replace with your database server address
    $username = "root"; // Replace with your database username
    $password = "9528176114"; // Replace with your database password
    $dbname = "car_options"; // Replace with the name of your database

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


