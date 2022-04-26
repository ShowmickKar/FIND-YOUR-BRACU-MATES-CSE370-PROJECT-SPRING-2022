<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>Alumni Registration Page</title>
</head>

<body>
    <?php require_once 'process.php'; ?>
    <h1><b><u>Alumni Registration</u></b></h1>

    <p>Fill up the form to complete your registration</p><br>
    <div>
        <form action="process.php" method="POST">
            <label for="">Name</label>
            <input type="text" name='name' placeholder="Your Name" value=""><br>
            <label for="">Company name</label>
            <input type="text" name='company' placeholder="Your Company" value=""><br>
            <label for="">Graduation Year</label>
            <input type="date" name='graduation_date' placeholder="Your Graduation Date" value=""><br>

            <label for="">Areas of Expertise</label><br>
            <input type="checkbox" name="expertise[]" value="Machine Learning">
            <label for="expertise1"> Machine Learning</label><br>
            <input type="checkbox" name="expertise[]" value="Frontend Engineering">
            <label for="expertise2"> Frontend Engineering</label><br>
            <input type="checkbox" name="expertise[]" value="Backend Engineering">
            <label for="expertise3"> Backend Engineering</label><br>
            <input type="checkbox" name="expertise[]" value="System Design and Analysis">
            <label for="expertise4"> System Design and Analysis</label><br>

            <label for="">Linkedin</label>
            <input type="text" placeholder="Linkedin Profile" name='linkedin' value=""><br>
            <label for="">Email</label>
            <input type="text" placeholder="Your Email" name='email' value=""><br>
            <label for="">University Department</label>
            <input type="text" placeholder="Your Department" name='department' value=""><br>
            <label for="">Set a Password</label>
            <input type="password" placeholder="Enter Password" name='password' value=""><br><br>

            <button type="submit" name="register_alumni" class="btn btn-primary">Submit</button>
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
