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

            // Store the area of expertise in alumni_area_of_expertise table
            $sql = "SELECT id FROM `alumni` WHERE `email` LIKE '$email'";
            $result = $mysqli->query($sql);
            $row = mysqli_fetch_array($result);
            $alumni_id = $row[0];

            foreach ($areas_of_expertise as $expertise) {
                $mysqli->query("INSERT INTO `alumni_area_of_expertise` (`al_id`, `expertise`) VALUES ('$alumni_id','$expertise');");
            }
        }
    }
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
