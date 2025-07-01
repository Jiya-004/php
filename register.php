<?php
 
 
    // Get values from form
    $username = $_POST['username'];
    $email = $_POST['email'];

    // Database connection (procedural style)
    $conn = mysqli_connect("localhost", "root", "", "test", 3307);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Prepare SQL statement
    $stmt = mysqli_prepare($conn, "INSERT INTO tables (name, email) VALUES (?, ?)");

    // Bind parameters
    mysqli_stmt_bind_param($stmt, "ss", $username, $email);

    // Execute
    if (mysqli_stmt_execute($stmt)) {
        echo "Registration successful!";
    } else {
        echo "Error: " . mysqli_stmt_error($stmt);
    }

    // Close
    mysqli_stmt_close($stmt);
    mysqli_close($conn);

?>
