<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Funda Of Web IT</title>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <h4>Search for alumni</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">

                                <form action="" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" name="searchAlumni" required value="<?php if(isset($_GET['searchAlumni'])){echo $_GET['searchAlumni']; } ?>" class="form-control" placeholder="Search data">
                                        <button type="submit" class="btn btn-primary">Search from Alumni</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Company</th>
                                    <th>Email</th>
                                    <th>Linkedin</th>
                                    <th>Area of expertise</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $con = mysqli_connect("localhost","root","","bracu_mates");

                                    if(isset($_GET['searchAlumni']))
                                    {
                                        $filtervalues = $_GET['searchAlumni'];
                                        $query = "SELECT * FROM alumni WHERE CONCAT(Name,company,email,linkedin,id) LIKE '%$filtervalues%'";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                $expertise = $items['id'];
                                                $allexpertise = "";

                                                $expquery = "SELECT * FROM alumni_area_of_expertise WHERE CONCAT(al_id,expertise) LIKE '%$expertise%'";
                                                $expquery_run = mysqli_query($con, $expquery);
                                                foreach($expquery_run as $expitems){

                                                    $allexpertise .= ", " . $expitems['expertise'];
                                                    // 
                                                }
                                                $allexpertise = substr($allexpertise,1);
                                                ?>
                                                <tr>
                                                    <td><?= $items['Name']; ?></td>
                                                    <td><?= $items['company']; ?></td>
                                                    <td><?= $items['email']; ?></td>
                                                    <td><?= $items['linkedin']; ?></td>
                                                    <td><?= $allexpertise; ?></td>
                                                    </tr>
                                                <?php
                                                
                                            }
                                        }

                                        elseif(mysqli_num_rows($query_run) <= 0)
                                        {
                                            $query2 = "SELECT * FROM alumni_area_of_expertise WHERE CONCAT(al_id, expertise) LIKE '%$filtervalues%'";
                                            $query_run2 = mysqli_query($con, $query2);
                                            if(mysqli_num_rows($query_run2) > 0)
                                        {   
                                            foreach($query_run2 as $items){
                                                $al_id = $items['al_id'];
                                                $query3 = "SELECT * FROM alumni_area_of_expertise WHERE CONCAT(al_id, expertise) LIKE '%$al_id%'";
                                                $query_run3 = mysqli_query($con, $query3);
                                                $allexpertise = "";


                                                foreach($query_run3 as $expitems){

                                                    $allexpertise .= ", " . $expitems['expertise'];
                                                    // 
                                                }
                                                $allexpertise = substr($allexpertise,1);

                                                $expquery2 = "SELECT * FROM alumni WHERE CONCAT(Name,company,email,linkedin,id) LIKE '%$al_id%'";
                                                $expquery_run2 = mysqli_query($con, $expquery2);

                                                foreach($expquery_run2 as $expitems2){
                                                    ?>
                                                    <tr>
                                                        <td><?= $expitems2['Name']; ?></td>
                                                        <td><?= $expitems2['company']; ?></td>
                                                        <td><?= $expitems2['email']; ?></td>
                                                        <td><?= $expitems2['linkedin']; ?></td>
                                                        <td><?= $allexpertise; ?></td>
                                                        </tr>
                                                    <?php
                                                }

                                            }
                                               
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="4">No Record Found</td>
                                                </tr>
                                            <?php
                                        }
                                        }


                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="4">No Record Found</td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>






    
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <h4>Search for students</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">

                                <form action="" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" name="searchAlumni" required value="<?php if(isset($_GET['searchAlumni'])){echo $_GET['searchAlumni']; } ?>" class="form-control" placeholder="Search data">
                                        <button type="submit" class="btn btn-primary">Search from Alumni</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Company</th>
                                    <th>Email</th>
                                    <th>Linkedin</th>
                                    <th>Area of expertise</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $con = mysqli_connect("localhost","root","","bracu_mates");

                                    if(isset($_GET['searchAlumni']))
                                    {
                                        $filtervalues = $_GET['searchAlumni'];
                                        $query = "SELECT * FROM alumni WHERE CONCAT(Name,company,email,linkedin,id) LIKE '%$filtervalues%'";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                $expertise = $items['id'];
                                                $allexpertise = "";

                                                $expquery = "SELECT * FROM alumni_area_of_expertise WHERE CONCAT(al_id,expertise) LIKE '%$expertise%'";
                                                $expquery_run = mysqli_query($con, $expquery);
                                                foreach($expquery_run as $expitems){

                                                    $allexpertise .= ", " . $expitems['expertise'];
                                                    // 
                                                }
                                                $allexpertise = substr($allexpertise,1);
                                                ?>
                                                <tr>
                                                    <td><?= $items['Name']; ?></td>
                                                    <td><?= $items['company']; ?></td>
                                                    <td><?= $items['email']; ?></td>
                                                    <td><?= $items['linkedin']; ?></td>
                                                    <td><?= $allexpertise; ?></td>
                                                    </tr>
                                                <?php
                                                
                                            }
                                        }

                                        elseif(mysqli_num_rows($query_run) <= 0)
                                        {
                                            $query2 = "SELECT * FROM alumni_area_of_expertise WHERE CONCAT(al_id, expertise) LIKE '%$filtervalues%'";
                                            $query_run2 = mysqli_query($con, $query2);
                                            if(mysqli_num_rows($query_run2) > 0)
                                        {   
                                            foreach($query_run2 as $items){
                                                $al_id = $items['al_id'];
                                                $query3 = "SELECT * FROM alumni_area_of_expertise WHERE CONCAT(al_id, expertise) LIKE '%$al_id%'";
                                                $query_run3 = mysqli_query($con, $query3);
                                                $allexpertise = "";


                                                foreach($query_run3 as $expitems){

                                                    $allexpertise .= ", " . $expitems['expertise'];
                                                    // 
                                                }
                                                $allexpertise = substr($allexpertise,1);

                                                $expquery2 = "SELECT * FROM alumni WHERE CONCAT(Name,company,email,linkedin,id) LIKE '%$al_id%'";
                                                $expquery_run2 = mysqli_query($con, $expquery2);

                                                foreach($expquery_run2 as $expitems2){
                                                    ?>
                                                    <tr>
                                                        <td><?= $expitems2['Name']; ?></td>
                                                        <td><?= $expitems2['company']; ?></td>
                                                        <td><?= $expitems2['email']; ?></td>
                                                        <td><?= $expitems2['linkedin']; ?></td>
                                                        <td><?= $allexpertise; ?></td>
                                                        </tr>
                                                    <?php
                                                }

                                            }
                                               
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="4">No Record Found</td>
                                                </tr>
                                            <?php
                                        }
                                        }


                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="4">No Record Found</td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>






    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <h4>Search for blood donors</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">

                                <form action="" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" name="searchDonor" required value="<?php if(isset($_GET['searchDonor'])){echo $_GET['searchDonor']; } ?>" class="form-control" placeholder="Search data">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Blood group</th>
                                    <th>Contact No.</th>
                                    <th>Available location(s)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $con = mysqli_connect("localhost","root","","bracu_mates");

                                    if(isset($_GET['searchDonor']))
                                    {
                                        $filtervalues = $_GET['searchDonor'];
                                        $query = "SELECT * FROM donor WHERE CONCAT(name,blood_group,phone) LIKE '%$filtervalues%'";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                $expertise = $items['id'];
                                                $allexpertise = "";

                                                $expquery = "SELECT * FROM donor_available_location WHERE CONCAT(d_id,location) LIKE '%$expertise%'";
                                                $expquery_run = mysqli_query($con, $expquery);
                                                foreach($expquery_run as $expitems){

                                                    $allexpertise .= ", " . $expitems['location'];
                                                    // 
                                                }
                                                $allexpertise = substr($allexpertise,1);
                                                ?>
                                                <tr>
                                                    <td><?= $items['name']; ?></td>
                                                    <td><?= $items['blood_group']; ?></td>
                                                    <td><?= $items['phone']; ?></td>
                                                    <td><?= $allexpertise; ?></td>
                                                    </tr>
                                                <?php
                                                
                                            }
                                        }

                                        elseif(mysqli_num_rows($query_run) <= 0)
                                        {
                                            $query2 = "SELECT * FROM donor_available_location WHERE CONCAT(d_id,location) LIKE '%$filtervalues%'";
                                            $query_run2 = mysqli_query($con, $query2);
                                            if(mysqli_num_rows($query_run2) > 0)
                                        {   
                                            foreach($query_run2 as $items){
                                                $al_id = $items['d_id'];
                                                $query3 = "SELECT * FROM donor_available_location WHERE CONCAT(d_id, location) LIKE '%$al_id%'";
                                                $query_run3 = mysqli_query($con, $query3);
                                                $allexpertise = "";


                                                foreach($query_run3 as $expitems){

                                                    $allexpertise .= ", " . $expitems['location'];
                                                    // 
                                                }
                                                $allexpertise = substr($allexpertise,1);

                                                $expquery2 = "SELECT * FROM donor WHERE CONCAT(name,blood_group,phone) LIKE '%$al_id%'";
                                                $expquery_run2 = mysqli_query($con, $expquery2);

                                                foreach($expquery_run2 as $expitems2){
                                                    ?>
                                                    <tr>
                                                    <td><?= $expitems2['name']; ?></td>
                                                    <td><?= $expitems2['blood_group']; ?></td>
                                                    <td><?= $expitems2['phone']; ?></td>
                                                    <td><?= $allexpertise; ?></td>
                                                    </tr>
                                                <?php
                                                }

                                            }
                                               
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="4">No Record Found</td>
                                                </tr>
                                            <?php
                                        }
                                        }


                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="4">No Record Found</td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
