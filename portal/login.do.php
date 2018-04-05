
<?php
include_once '../includes/app.php';

$error = 0;

if (isset($_POST['username'], $_POST['password'])) {
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_EMAIL);
    $password = $_POST['password']; // The hashed password.

    if (login($username, $password, $mysqli) == true) {

        //echo "login";
        // Login success
        $logged = 1;
        header("Location: dashboard");
        exit();
    } else {
        // Login failed
       $error = 2;
    }
} else {
    // The correct POST variables were not sent to this page.
    $error = 1;

}

header('Location: login?err='.$error);

exit();
?>