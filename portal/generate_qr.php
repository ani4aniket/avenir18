<?php
include_once '../includes/app.php';
if($logged) {
    if(isset($_POST['submit'])) {
        $username = $_SESSION['username'];
        if ($stmt = $mysqli->prepare("SELECT captcha
                  FROM students WHERE username = ? LIMIT 1")) {
            $stmt->bind_param('s',$username);
            $stmt->execute();    // Execute the prepared query.
            $stmt->store_result();

            // get variables from result.
            $stmt->bind_result($code);
            $stmt->fetch();
        }
        if(isset($code)) {
            header("Location: https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl={$code}&choe=UTF-8");
            exit();
        }
        else {
            $noOfEvents = 0;
            $money = 0;
            $events = "";
            foreach ($_POST['events'] as $item) {
                if(isset($item)) {
                    $noOfEvents += 1;
                    if($noOfEvents == 1)
                        $events .= $item;
                    else
                        $events .= "_".$item;
                }
            }
            $money = $noOfEvents * 100;
            $code = substr(md5(uniqid(mt_rand(), true)) , 0, 6);
            $code = $code."-". $username."-events=".$events."-".$money;
            $insert_stmt = $mysqli->prepare("UPDATE students SET captcha = ? WHERE username = ?");
            $insert_stmt->bind_param('ss', $code,$username);
            $insert_stmt->execute();
            echo $mysqli->error;
            header("Location: https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl={$code}&choe=UTF-8");
            exit();
        }
    }
    header("Location: dashboard");
}
else {
    header("Location: login");
}
?>
