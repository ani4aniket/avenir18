<?php
include_once '../includes/app.php';

$error_msg = 0;

if (isset($_POST['name'],$_POST['email'], $_POST['username'], $_POST['password'], $_POST['confirm'])) {
    // Sanitize and validate the data passed in
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);

    //checking if any fields are empty
    if(empty($_POST['name'])||empty($_POST['email'])||empty($_POST['username'])||empty($_POST['password'])||empty($_POST['confirm'])){
       // header('Location:http://localhost/avenir18/avenir18/portal/login.php?signup=empty');
        header('Location: /login.php?signup=empty');
        exit();
    }
   
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Not a valid email
        $error_msg = 1;
    }


    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    $confirm = filter_input(INPUT_POST, 'confirm',FILTER_SANITIZE_STRING);
//    if (strlen($password) != 128) {
//        $error_msg = 2;
//    }

    $prep_stmt = "SELECT id FROM students WHERE email = ? LIMIT 1";
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

    //checking if there is no common username

     $prep_stmt1 = "SELECT id FROM students WHERE username = ? LIMIT 1";
    $stmt1 = $mysqli->prepare($prep_stmt1);

    if ($stmt1) {
        $stmt1->bind_param('s', $username);
        $stmt1->execute();
        $stmt1->store_result();

        if ($stmt1->num_rows == 1) {
            // A user with this username address already exists
            $error_msg = 5;

        }
    } else {
        $error_msg = 6;
    }




    if(empty($error_msg)) {
        if($password==$confirm){
            // Create a random salt
            $random_salt = hash('sha512', uniqid(openssl_random_pseudo_bytes(16), TRUE));

            // Create salted password
            $password = hash('sha512', $password . $random_salt);
            $confirm = hash('sha512', $confirm . $random_salt);

            // Insert the new user into the database
            if ($insert_stmt = $mysqli->prepare("INSERT INTO students (Name,email,username,password,confirm, salt) VALUES (?, ?, ?, ?, ?, ?)")) {
                $insert_stmt->bind_param('ssssss', $name, $email,$username, $password,$confirm, $random_salt);
                // Execute the prepared query.
                if (! $insert_stmt->execute()) {
                    echo $insert_stmt->error;
                    echo "<br />". $random_salt;
                  header('Location: register?err=5');
                   exit();
                }
            }
          
          //  header('Location: http://localhost/avenir18/avenir18/portal/dashboard.html');
            header('Location: dashboard.html');
            exit();
        }else{
            //password do not match
            $error_msg = 7;
        }
        
    }

  // header('Location: http://localhost/avenir18/avenir18/portal/login.php?err='.$error_msg);
   header('Location: login.php?err='.$error_msg);

}
else {
    
    //header("Location:http://localhost/avenir18/avenir18/portal/login.php");
    header("Location: login.php");
}

