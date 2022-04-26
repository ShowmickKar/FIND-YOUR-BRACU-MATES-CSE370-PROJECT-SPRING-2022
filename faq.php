<?php

$mysqli = new mysqli('localhost', 'root', '', 'bracu_mates') or die(mysqli_error($mysqli));
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>Frequently Asked Questions</title>


    <!-- STYLING -->
    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <?php require_once 'process.php'; ?>
    <h1>Frequently Asked Questions</h1>
    <!-- Questions List -->

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Question</th>
                <th scope="col">Answer</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT `id`, `question`, `answer` FROM faq";
            $result = $mysqli->query($sql);


            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>{$row['question']}</td>
                        <td>{$row['answer']}</td>
                    </tr>";
                }
            } else {
                // echo "0 results";
            }

            ?>
        </tbody>
    </table>
    <form action="faq.php" method="POST">
        <form-group>
            <h1>Post Your Question</h1>
            <input style="margin-left:10px; height:200px; width: 700px" type="text" name="question">
        </form-group>
        <form-group><button type='submit' class='btn btn-primary' name="post_student_question">Post</button></form-group>
    </form>
</body>

</html>
