<?php
    session_start();
    include('conn.php');

    $error = array();

    if (isset($_POST['create_account'])) {
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $lname = mysqli_real_escape_string($conn, $_POST['lname']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        if (empty($name)) {
            array_push($error, "กรุณากรอกชื่อ");
        }

        if (empty($lname)) {
            array_push($error, "กรุณากรอกนามสกุล");
        }

        if (empty($email)) {
            array_push($error, "กรุณากรอกอีเมล");
        }

        if (empty($password)) {
            array_push($error, "กรุณากรอกรหัสผ่าน");
        }

        $check_user = "SELECT * FROM tb_user WHERE username = '$email'";

        $getQuery = mysqli_query($conn, $check_user);
        $result = mysqli_fetch_assoc($getQuery);

        if ($result) {
            if ($result['email'] == $email) {
                array_push($error, "อีเมลนี้ได้ถูกใช้งานแล้ว กรุณากรอกอีเมลใหม่");
            }
        }

        if (empty($error)) {
            $password_en = md5($password);

            $sql = "INSERT INTO tb_user (user_name, user_lname, username, password) VALUE ('$name', '$lname', '$email', '$password_en')";
            mysqli_query($conn, $sql);

            $_SESSION['name'] = $name;
            header('location: index.php');
        }
    }

?>