<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $dob = htmlspecialchars($_POST['dob']);
    $address = htmlspecialchars($_POST['address']);
    
    echo "<div class='container'>";
    echo "<h2>Registration Successful!</h2>";
    echo "<h3>Submitted Information</h3>";
    echo "<p><strong>Full Name:</strong> " . $name . "</p>";
    echo "<p><strong>Email Address:</strong> " . $email . "</p>";
    echo "<p><strong>Phone Number:</strong> " . $phone . "</p>";
    echo "<p><strong>Date of Birth:</strong> " . $dob . "</p>";
    echo "<p><strong>Address:</strong> " . nl2br($address) . "</p>";
    echo "</div>";
}
?>
