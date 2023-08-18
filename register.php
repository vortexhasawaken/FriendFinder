<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve registration data from form
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];

    // Basic validation
    if ($password !== $confirmPassword) {
        $error = "Passwords do not match.";
    } else {
        // Perform registration process (you would usually save this data to a database)
        // Your registration logic goes here

        // Display success message
        $success = "Registration successful. You can now login.";
    }
}
?>

        <?php
        if (isset($error)) {
            echo '<p class="error">' . $error . '</p>';
        } elseif (isset($success)) {
            echo '<p class="success">' . $success . '</p>';
        }
        ?>
