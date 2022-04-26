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
    <title>Lost & Found</title>
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
    <h1>LOST & FOUND</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Item Name</th>
                <th scope="col">Reporter email</th>
                <th scope="col">place</th>
                <th scope="col" 8>Date</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT `id`, `item_name`, `reporter_email`, `place`, `report_date` FROM lost_and_found";
            $result = $mysqli->query($sql);


            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>{$row['item_name']}</td>
                        <td>{$row['reporter_email']}</td>
                        <td>{$row['place']}</td>
                        <td>{$row['report_date']}</td>
                    </tr>";
                }
            } else {
                echo "0 results";
            }
            ?>
        </tbody>
    </table>
    <form action="lost_and_found.php" method="POST">
        <form-group>
            <h1>Report an item you have found on campus</h1>
            <label for="">Item Name</label>
            <input type="text" name="item_name" placeholder="Item Name">
            <label for="">Reporter Email</label>
            <input type="text" name="reporter_email" placeholder="Reporter Email">
            <label for="">Place</label>
            <input type="text" name="place" placeholder="Place">
            <label for="">Report Date</label>
            <input type="date" name="report_date" placeholder="Report Date">
        </form-group>
        <form-group><button type='submit' class='btn btn-primary' name="post_lost_and_found_report">Post</button></form-group>
    </form>

</body>

</html>
