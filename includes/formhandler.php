<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = htmlspecialchars($_POST["firstname"]);
    $lastname = htmlspecialchars($_POST["lastname"]);
    $pets = htmlspecialchars($_POST["favouritepet"]);

    // Check for empty fields
    if (empty($firstname) || empty($lastname)) {
        header("Location: ../form.php");
        exit(); // exit should come after header, not before
    }

    // Display submitted data
    echo "These are the data that the user submitted:<br>";
    echo "First Name: $firstname<br>";
    echo "Last Name: $lastname<br>";
    echo "Favorite Pet: $pets<br>";

    // You usually shouldn't redirect after echoing data
    // header("Location: ../form.php"); // Remove or move this appropriately
} else {
    header("Location: ../form.php");
    exit();
}
?>
