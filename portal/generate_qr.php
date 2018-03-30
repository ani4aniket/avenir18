<?php
require_once('../../includes/app.php');
if($logged) {
    if(isset($_POST['submit'])) {
        $username = $_SESSION['username'];
        if ($stmt = $mysqli->prepare("SELECT capatcha
                  FROM students WHERE username = ? LIMIT 1")) {
            $stmt->bind_param('s',$username);
            $stmt->execute();    // Execute the prepared query.
            $stmt->store_result();

            // get variables from result.
            $stmt->bind_result($code);
        }
        if(isset($code)) {
            header("Location: https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl={$code}&choe=UTF-8");
        }
        else {
            $noOfEvents = 0;
            $money = 0;
            foreach ($_POST as $item) {
                if(isset($item)) {
                    $noOfEvents += 1;
                }
            }
            $money = $noOfEvents * 100;
            $code = substr(md5(uniqid(mt_rand(), true)) , 0, 6);
            $code = $code . $username.$money;
            $insert_stmt = $mysqli->prepare("INSERT INTO students (capatcha) VALUES (?)");
            $insert_stmt->bind_param('s', $code);
            $insert_stmt->execute();
            header("Location: https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl={$code}&choe=UTF-8");
        }
    }
    header("Location: dashboard");
}
else {
    header("Location: login");
}
?>
