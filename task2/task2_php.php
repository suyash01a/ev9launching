<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Process the data (you can customize this part based on your requirements)
    $message = "Name: $name\nEmail: $email\n";
    // For demonstration, let's just print the message
    echo "<p>Thank you, $name! Your reservation has been received. We will contact you shortly.</p>";
    echo "<p>Here is the information you provided:</p>";
    echo "<p>Name: $name</p>";
    echo "<p>Email: $email</p>";
}
?>