<?php


function sec_session_start() {
    $session_name = 'sec_session_id';   // Set a custom session name
    $secure = SECURE;

    // This stops JavaScript being able to access the session id.
    $httponly = true;

    // Forces sessions to only use cookies.
    if (ini_set('session.use_only_cookies', 1) === FALSE) {
        header("Location: ../error.php?err=Could not initiate a safe session (ini_set)");
        exit();
    }

    // Gets current cookies params.
    $cookieParams = session_get_cookie_params();
    session_set_cookie_params($cookieParams["lifetime"], $cookieParams["path"], $cookieParams["domain"], $secure, $httponly);

    // Sets the session name to the one set above.
    session_name($session_name);

    session_start();            // Start the PHP session
    session_regenerate_id();    // regenerated the session, delete the old one.
}

function login($username, $password1, $mysqli) {

    $table = "students";

    #if($type==1){
     #   $table="admins";
    #}


    // Using prepared statements means that SQL injection is not possible.
    if ($stmt = $mysqli->prepare("SELECT id, username, password, salt
                  FROM ".$table." WHERE username = ?  LIMIT 1")) {
        $stmt->bind_param('s', $username);  // Bind "$username" to parameter.
        $stmt->execute();    // Execute the prepared query.
        $stmt->store_result();

        // get variables from result.
        $stmt->bind_result($id, $username, $password, $salt);
        $stmt->fetch();

      //  echo $db_password;

        // hash the password with the unique salt.
        $password1 = hash('sha512', $password1 . $salt);
        if ($stmt->num_rows == 1) {
            // Check if the password in the database matches
            // the password the user submitted.
            if ($password == $password1) {
                // Password is correct!
                // Get the user-agent string of the user.
                $user_browser = $_SERVER['HTTP_USER_AGENT'];

                // XSS protection as we might print this value
                $id = preg_replace("/[^0-9]+/", "", $id);
                $_SESSION['id'] = $id;

                // XSS protection as we might print this value
                $username = preg_replace("/[^a-zA-Z0-9_\-]+/", "", $username);

                $_SESSION['username'] = $username;
                $_SESSION['login_string'] = hash('sha512', $password1 . $user_browser);
               // $_SESSION['login_type'] = $type;

                // Login successful.
                return true;
            } else {
                echo $password." != ".$password1;
                return false;
            }
        } else {
            // No user exists.
            return false;
        }
    } else {
        // Could not create a prepared statement
        header("Location: ../error.php?err=Database error: cannot prepare statement");
        exit();
    }
}

//function checkbrute($user_id, $mysqli) {
//    // Get timestamp of current time
//    $now = time();
//
//    // All login attempts are counted from the past 2 hours.
//    $valid_attempts = $now - (2 * 60 * 60);
//
//    if ($stmt = $mysqli->prepare("SELECT time
//                                  FROM login_attempts
//                                  WHERE user_id = ? AND time > '$valid_attempts'")) {
//        $stmt->bind_param('i', $user_id);
//
//        // Execute the prepared query.
//        $stmt->execute();
//        $stmt->store_result();
//
//        // If there have been more than 5 failed logins
//        if ($stmt->num_rows > 5) {
//            return true;
//        } else {
//            return false;
//        }
//    } else {
//        // Could not create a prepared statement
//        header("Location: ../error.php?err=Database error: cannot prepare statement");
//        exit();
//    }
//}

function login_check($mysqli) {

    // Check if all session variables are set
    if (isset($_SESSION['id'], $_SESSION['username'], $_SESSION['login_string'])) {
        $id = $_SESSION['id'];
        $login_string = $_SESSION['login_string'];
        $username = $_SESSION['username'];
        //$type = $_SESSION['login_type'];

        $table = "students";


        // Get the user-agent string of the user.
        $user_browser = $_SERVER['HTTP_USER_AGENT'];

        if ($stmt = $mysqli->prepare("SELECT password FROM students WHERE username = ? LIMIT 1")) {
            // Bind "$user_id" to parameter.
            $stmt->bind_param('s', $username);
            $stmt->execute();   // Execute the prepared query.
            echo $stmt->error;
            $stmt->store_result();

            if ($stmt->num_rows == 1) {
                // If the user exists get variables from result.
                $stmt->bind_result($password);
                $stmt->fetch();
                $login_check = hash('sha512', $password . $user_browser);

                if ($login_check == $login_string) {
                    // Logged In!!!!
                    return true;
                } else {
                    // Not logged in
                    return false;
                }
            } else {
                // Not logged in
                return false;
            }
        } else {
            // Could not prepare statement
            header("Location: ../error.php?err=Database error: cannot prepare statement");
            exit();
        }
    } else {
        // Not logged in
        return false;
    }
}

function esc_url($url) {

    if ('' == $url) {
        return $url;
    }

    $url = preg_replace('|[^a-z0-9-~+_.?#=!&;,/:%@$\|*\'()\\x80-\\xff]|i', '', $url);

    $strip = array('%0d', '%0a', '%0D', '%0A');
    $url = (string) $url;

    $count = 1;
    while ($count) {
        $url = str_replace($strip, '', $url, $count);
    }

    $url = str_replace(';//', '://', $url);

    $url = htmlentities($url);

    $url = str_replace('&amp;', '&#038;', $url);
    $url = str_replace("'", '&#039;', $url);

    if ($url[0] !== '/') {
        // We're only interested in relative links from $_SERVER['PHP_SELF']
        return '';
    } else {
        return $url;
    }
}




