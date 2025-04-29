<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and collect form data
    $firstName = htmlspecialchars($_POST['firstName']);
    $lastName = htmlspecialchars($_POST['lastName']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    // Basic validation (you can expand this as needed)
    if (empty($firstName) || empty($lastName) || empty($email) || empty($password)) {
        echo "All fields are required!";
    } else {
        // Display the submitted data
        echo "<h2>Successfully Registered:</h2>";
        echo "<p>First Name: " . $firstName . "</p>";
        echo "<p>Last Name: " . $lastName . "</p>";
        echo "<p>Email: " . $email . "</p>";
        
    }
}
?>
