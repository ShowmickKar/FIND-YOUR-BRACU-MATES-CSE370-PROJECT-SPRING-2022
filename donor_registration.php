<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>Donor Registration Page</title>
</head>

<body>
    <?php require_once 'process.php'; ?>
    <h1><b><u>Donor Registration</u></b></h1>
    <!-- <div class="alert alert-danger" role="alert">
        User already exists!
    </div> -->
    <p>Fill up the form to complete your registration</p><br>
    <div>
        <form action="process.php" method="POST">
            <label for="">Name</label>
            <input type="text" name='name' placeholder="Your Name" value=""><br>
            <label for="">Phone</label>
            <input type="text" name='phone' placeholder="Your Phone Number" value=""><br>
            <label for="">Date of Birth</label>
            <input type="date" name='dob' placeholder="Your Date of Birth" value=""><br>
            <label for="">Email</label>
            <input type="text" placeholder="Your Email" name='email' value=""><br>

            <label for="">Blood Group</label>
            <input type="text" placeholder="Blood Group" name='blood_group' value=""><br>
            <label for="">Weight</label>
            <input type="text" placeholder="Weight" name='weight' value=""><br>
            <label for="">Location</label><br>
            <input type="checkbox" name="available_location[]" value="Mohakhali">
            <label for="available_location1"> Mohakhali</label><br>
            <input type="checkbox" name="available_location[]" value="Dhanmondi">
            <label for="available_location2"> Dhanmondi</label><br>
            <input type="checkbox" name="available_location[]" value="Mohammadpur">
            <label for="available_location3"> Mohammadpur</label><br>

            <label for="">Last Donation</label>
            <input type="date" placeholder="Last Donation" name='last_donation' value=""><br>
            <label for="">Health Condition</label><br>
            <input type="checkbox" name="health_condition[]" value="Heart Diseases">
            <label for="health_condition1"> Heart Diseases</label><br>
            <input type="checkbox" name="health_condition[]" value="Kidney Diseases">
            <label for="health_condition2"> Kidney Diseases</label><br>
            <input type="checkbox" name="health_condition[]" value="Covid Vaccinated">
            <label for="health_condition3"> Covid Vaccinated</label><br>
            <label for="">Set a Password</label>
            <input type="password" placeholder="Enter Password" name='password' value=""><br><br>

            <button type="submit" name="register_donor" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <div>
        <form action="">

        </form>
    </div>

    <script src=" https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>
