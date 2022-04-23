<?php

$mysqli = new mysqli('localhost', 'root', '', 'bracu_mates') or die(mysqli_error($mysqli));





// Alumni Registration
if (isset($_POST['register_alumni'])) {
    $name = $_POST['name'];
    $type = "alumni";
    $company = $_POST['company'];
    $graduation_date = $_POST['graduation_date'];
    $department = $_POST['department'];
    $email = $_POST['email'];
    $linkedin = $_POST['linkedin'];
    $password = $_POST['password'];
    $areas_of_expertise = $_POST['expertise'];


    // Prevent multiple registration
    $sql = "SELECT * FROM alumni WHERE  email='$email'";
    $result = $mysqli->query($sql);
    $row = $result->fetch_assoc();
    if ($result) {

        if (mysqli_num_rows($result) >= 1) {
        } else {
            $mysqli->query("INSERT INTO alumni(name, company, graduation_date, department, email, linkedin, password) VALUES('$name','$company','$graduation_date', '$department', '$email', '$linkedin', '$password')") or die($mysqli->error);
            $sql = "SELECT * FROM alumni WHERE  email='$email'";
            $result = $mysqli->query($sql)->fetch_assoc();

            foreach ($areas_of_expertise as $item) {
                echo "It's happening";
                $mysqli->query("INSERT INTO alumni_area_of_expertise(id, area_of_expertise) VALUES($result[0], $item)");
            }
        }
    }
    // Add area of expertise in a separate table
    // $sql = "SELECT * FROM alumni WHERE  email='$email' AND password='$password'";
    // $result = $mysqli->query($sql);

    // $row = $result->fetch_assoc();
    // if ($result) {

    //     if (mysqli_num_rows($result) >= 1) {
    //         header("Location: alumni_profile.php");
    //         exit();
    //     } else {
    //         echo "FAIL";
    //         // $_SESSION['message'] = "Username and Password combiation incorrect";
    //     }
    // }




    // echo "$name\r\n";
    // echo "$company\r\n";
    // echo "$graduation_date\r\n";
    // echo "$department\r\n";
    // echo "$linkedin\r\n";
    // echo "$password\r\n";
    // foreach ($area_of_expertise as $item) {
    //     echo $item;
    // }
}

// Alumni Login

if (isset($_POST['login_alumni'])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM alumni WHERE  email='$email' AND password='$password'";
    $result = $mysqli->query($sql);

    $row = $result->fetch_assoc();
    if ($result) {

        if (mysqli_num_rows($result) >= 1) {
            header("Location: alumni_profile.php");
            exit();
        } else {
            echo "FAIL";
        }
    }
}
