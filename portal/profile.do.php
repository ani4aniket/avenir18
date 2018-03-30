<?php
include_once '../includes/app.php';
 
$error_msg = 0;

if (isset($_POST['first'], $_POST['last'], $_POST['college'], $_POST['address'], $_POST['email'], $_POST['mobile1'], $_POST['mobile2'])) {
    // Sanitize and validate the data passed in
    $first = filter_input(INPUT_POST, 'first', FILTER_SANITIZE_STRING);
    $last = filter_input(INPUT_POST, 'last', FILTER_SANITIZE_STRING);
    $college = filter_input(INPUT_POST, 'college', FILTER_SANITIZE_STRING);
    $address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING);
    $mobile1 = filter_input(INPUT_POST, 'mobile1', FILTER_SANITIZE_STRING);
    $mobile2 = filter_input(INPUT_POST, 'mobile2', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Not a valid email
        $error_msg = 1;
    }

    $prep_stmt = "SELECT id FROM profile WHERE email = ? LIMIT 1";
    $stmt = $mysqli->prepare($prep_stmt);
    
    if ($stmt) {
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $stmt->store_result();
        
        if ($stmt->num_rows == 1) {
            // A user with this email address already exists
            $error_msg = 3;
        }
    } else {
        $error_msg = 4;
    }

    if (empty($error_msg)) {
        
        // Insert the new user into the database 
        if ($insert_stmt = $mysqli->prepare("INSERT INTO profile (first, last, college, address, email, mobile1, mobile2) VALUES (?, ?, ?, ?, ?, ?, ?)")) {
            $insert_stmt->bind_param('sssssii', $first, $last, $college, $address, $email, $mobile1, $mobile2);
            // Execute the prepared query.
            if (! $insert_stmt->execute()) {
                header('Location: register.php?err=5');
                exit();
            }
        }
        header('Location: login.php');
        exit();
    }

    header('location: profile.php?err='.$error_msg);
    
}