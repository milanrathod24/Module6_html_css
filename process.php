<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    echo "<h2>Registration Successful!</h2>";
    echo "<p>Username: $username</p>";
    echo "<p>Email: $email</p>";
}
?>
