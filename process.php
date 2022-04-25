<?php

$mysqli = new mysqli('localhost', 'root', '', 'bracu_mates') or die(mysqli_error($mysqli));


/* REGISTRATION AND LOGIN SECTION */

// Student Registration

if (isset($_POST['register_student'])) {
    $name = $_POST['name'];
    $school = $_POST['school'];
    $college = $_POST['college'];
    $hometown = $_POST['hometown'];
    $blood_group = $_POST['blood_group'];
    $linkedin = $_POST['linkedin'];
    $department = $_POST['department'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $current_location = $_POST['current_location'];
    $credits_completed = $_POST['credits_completed'];
    $password = $_POST['password'];

    $clubs = $_POST['club'];
    $fields_of_interest = $_POST['field_of_interest'];
    $hobbies = $_POST['hobby'];


    $sql = "SELECT * FROM `student` WHERE email='$email'" or die($mysqli->error);
    $result = $mysqli->query($sql);
    $row = $result->fetch_assoc();

    if ($result) {

        if (mysqli_num_rows($result) >= 1) {
        } else {
            $mysqli->query("INSERT INTO student(name, school, college, email, hometown, blood_group, linkedin, department, dob, current_location, credits_completed, password) VALUES('$name','$school','$college', '$email', '$hometown', '$blood_group', '$linkedin', '$department', '$dob', '$current_location', '$credits_completed', '$password')") or die($mysqli->error);

            $sql = "SELECT id FROM `student` WHERE `email` LIKE '$email'";
            $result = $mysqli->query($sql);
            $row = mysqli_fetch_array($result);
            $student_id = $row[0];

            foreach ($clubs as $club) {
                $mysqli->query("INSERT INTO `student_club` (`s_id`, `club`) VALUES ('$student_id','$club');");
            }

            foreach ($fields_of_interest as $field_of_interest) {
                $mysqli->query("INSERT INTO `student_field_of_interest` (`s_id`, `field_of_interest`) VALUES ('$student_id','$field_of_interest');");
            }

            foreach ($hobbies as $hobby) {
                $mysqli->query("INSERT INTO `student_hobby` (`s_id`, `hobby`) VALUES ('$student_id','$hobby');");
            }
        }
    }
}

// Student Login

if (isset($_POST['login_student'])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM student WHERE email='$email' AND password='$password'";
    $result = $mysqli->query($sql);

    $row = $result->fetch_assoc();
    if ($result) {

        if (mysqli_num_rows($result) >= 1) {
            header("Location: student_profile.php");
            exit();
        } else {
            echo '<h1>$email</h1>';
            echo "FAIL";
        }
    }
}



// Donor Registration
if (isset($_POST['register_donor'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $blood_group = $_POST['blood_group'];
    $last_donation = $_POST['last_donation'];
    $weight = $_POST['weight'];
    $password = $_POST['password'];
    $available_locations = $_POST['available_location'];
    $health_conditions = $_POST['health_condition'];


    $sql = "SELECT * FROM donor WHERE  email='$email'";
    $result = $mysqli->query($sql);
    $row = $result->fetch_assoc();
    if ($result) {

        if (mysqli_num_rows($result) >= 1) {
        } else {
            $mysqli->query("INSERT INTO donor(name, phone, email, dob, blood_group, last_donation, weight, password) VALUES('$name','$phone','$email', '$dob', '$blood_group', '$last_donation', '$weight', '$password')") or die($mysqli->error);

            // Store the area of expertise in alumni_area_of_expertise table
            $sql = "SELECT id FROM `donor` WHERE `email` LIKE '$email'";
            $result = $mysqli->query($sql);
            $row = mysqli_fetch_array($result);
            $donor_id = $row[0];

            foreach ($available_locations as $location) {
                $mysqli->query("INSERT INTO `donor_available_location` (`d_id`, `location`) VALUES ('$donor_id','$location');");
            }

            foreach ($health_conditions as $health_condition) {
                $mysqli->query("INSERT INTO `donor_health_condition` (`d_id`, `health_condition`) VALUES ('$donor_id','$health_condition');");
            }
        }
    }
}

// Donor Login

if (isset($_POST['login_donor'])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM donor WHERE  email='$email' AND password='$password'";
    $result = $mysqli->query($sql);

    $row = $result->fetch_assoc();
    if ($result) {

        if (mysqli_num_rows($result) >= 1) {
            header("Location: donor_profile.php");
            exit();
        } else {
            echo "FAIL";
        }
    }
}


// Alumni Registration
if (isset($_POST['register_alumni'])) {
    $name = $_POST['name'];
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

/* FAQ SECTION*/

// handle posting questions
if (isset($_POST['post_student_question'])) {
    $question = $_POST['question'];
    if ($question != "") {
        $mysqli->query("INSERT INTO faq(question, answer) VALUES('$question', '-')");
    }
}
