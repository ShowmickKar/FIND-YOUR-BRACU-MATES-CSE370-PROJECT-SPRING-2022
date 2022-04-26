<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>Student Registration Page</title>
</head>

<body>

    <h1><b><u>Student Registration</u></b></h1>

    <p>Fill up the form to complete your registration</p><br>

    <div>
        <form action="process.php" method="POST">
            <label for="">Name</label>
            <input type="text" name='name' placeholder="Your Name" value=""><br>
            <label for="">Student ID</label>
            <input type="number" name='id' placeholder="Your Student ID" value=""><br>
            <label for="">School</label>
            <input type="text" name='school' placeholder="Your School" value=""><br>
            <label for="">College</label>
            <input type="text" S name='college' placeholder="Your College" value=""><br>
            <label for="">Hometown</label>
            <input type="text" S name='hometown' placeholder="Your Hometown" value=""><br>
            <label for="">Current Location</label>
            <input type="text" S name='current_location' placeholder="Your Location" value=""><br>

            <label for=""><b><u>Hobbies</u></b></label><br>
            <input type="checkbox" name="hobby[]" value="Music">
            <label for="expertise1"> Music</label><br>
            <input type="checkbox" name="hobby[]" value="Gardening">
            <label for="expertise2"> Gardening</label><br>
            <input type="checkbox" name="hobby[]" value="Coin Collection">
            <label for="expertise3"> Coin Collection</label><br>
            <input type="checkbox" name="hobby[]" value="Dancing">
            <label for="expertise4"> Dancing</label><br>
            <input type="checkbox" name="hobby[]" value="Post-card Collection">
            <label for="expertise1"> Post-card Collection</label><br>
            <input type="checkbox" name="hobby[]" value="Photography">
            <label for="expertise2"> Photography</label><br>
            <input type="checkbox" name="hobby[]" value="Journalizing">
            <label for="expertise3"> Journalizing</label><br>
            <input type="checkbox" name="hobby[]" value="Others">
            <label for="expertise4"> Others</label><br>

            <label for="">Blood Group</label>
            <input type="text" S name='blood_group' placeholder="Your Blood Group" value=""><br>
            <label for=""><b><u>Clubs You're in(Select All That Applies)</u></b></label><br>
            <input type="checkbox" name="club[]" value="BRAC University Cultural Club">
            <label for="expertise1"> BRAC University Cultural Club</label><br>
            <input type="checkbox" name="club[]" value="Robotics Club Of BRAC University">
            <label for="expertise2"> Robotics Club Of BRAC University</label><br>
            <input type="checkbox" name="club[]" value="BRAC University Adventure Club">
            <label for="expertise3"> BRAC University Adventure Club</label><br>
            <input type="checkbox" name="club[]" value="BRAC University Art And Photographic Society">
            <label for="expertise4"> BRAC University Art And Photographic Society</label><br>
            <input type="checkbox" name="club[]" value="BRAC University Business and Economics Forum">
            <label for="expertise1"> BRAC University Business and Economics Forum</label><br>
            <input type="checkbox" name="club[]" value="BRAC University Business Club">
            <label for="expertise2"> BRAC University Business Club</label><br>
            <input type="checkbox" name="club[]" value="BRAC University CHESS Club">
            <label for="expertise3"> BRAC University CHESS Club</label><br>
            <input type="checkbox" name="club[]" value="Others">
            <label for="expertise4"> Others</label><br>

            <label for="">Date of Birth</label>
            <input type="date" name='dob' placeholder="Your Birth Date" value=""><br>

            <label for="">Fields of Interests</label><br>
            <input type="checkbox" name="field_of_interest[]" value="Machine Learning">
            <label for="expertise1"> Machine Learning</label><br>
            <input type="checkbox" name="field_of_interest[]" value="Frontend Engineering">
            <label for="expertise2"> Frontend Engineering</label><br>
            <input type="checkbox" name="field_of_interest[]" value="Backend Engineering">
            <label for="expertise3"> Backend Engineering</label><br>
            <input type="checkbox" name="filed_of_interest[]" value="System Design and Analysis">
            <label for="expertise4"> System Design and Analysis</label><br>

            <label for="">Linkedin</label>
            <input type="text" placeholder="Linkedin Profile" name='linkedin' value=""><br>
            <label for="">Email</label>
            <input type="text" placeholder="Your Email" name='email' value=""><br>
            <label for="">University Department</label>
            <input type="text" placeholder="Your Department" name='department' value=""><br>
            <label for="">Credits Completed</label>
            <input type="text" placeholder="Your Credits Completed" name='credits_completed' value=""><br>
            <label for="">Set a Password</label>
            <input type="password" placeholder="Enter Password" name='password' value=""><br><br>

            <button type="submit" name="register_student" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <div>
        <form action="">

        </form>
    </div>

    <script src=" https://c...content-available-to-author-only...y.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://c...content-available-to-author-only...r.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://c...content-available-to-author-only...r.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>
