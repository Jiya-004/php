<?php
$servername = "localhost";
$username = "username";
$password = "";
$dbname = "KIST_BIM";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname, 3307);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// $sql = "INSERT INTO students (id, name, email, program)
// VALUES (1, 'John', 'john@example.com', 'java'),
//        (2, 'Johny', 'johny@example.com', 'c'),
//        (3, 'Jean', 'jean@example.com', 'python'),
//        (4, 'Johe', 'johe@example.com', 'java'),
//        (5, 'Jihn', 'jihn@example.com', 'c++')";

// if (mysqli_query($conn, $sql)) {
//     echo "New records created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }
$sq2 = "SELECT id, name, email,program FROM students";
$result = mysqli_query($conn, $sq2);
if (mysqli_num_rows($result) > 0) {
// output data of each row
while($row = mysqli_fetch_assoc($result)) {
echo "id: " . $row["id"]. " - Name: " . $row["name"]. " -email:". $row["email"]." -program:".$row["program"]."<br>";
 
}
} else {
echo "0 results";
}
// Close connection
mysqli_close($conn);
?>