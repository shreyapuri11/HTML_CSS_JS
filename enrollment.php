<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from the submitted form
    $name = $_POST["name"];
    $rollNumber = $_POST["rollNumber"];
    $email = $_POST["email"];
    $mobileNumber = $_POST["mobileNumber"];

    // Display the submitted data
    echo "<h2>Enrollment Details</h2>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Roll Number:</strong> $rollNumber</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Mobile Number:</strong> $mobileNumber</p>";
} else {
    // If not a POST request, display an error message
    echo "Invalid request method!";
}
?>
