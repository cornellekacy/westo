<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<!-- End Left Sidebar  -->
<!-- Page wrapper  -->
<div class="page-wrapper">
    <!-- Bread crumb -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Dashboard</h3> </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
        </div>
        <!-- End Bread crumb -->
        <!-- Container fluid  -->
        <div class="container-fluid">
            <!-- Start Page Content -->
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">List Of All Receipt</h4>
                            <div class="table-responsive m-t-40">
                                <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>Receiver Name</th>
                                            <th>Sender Name</th>
                                            <th>Date</th>
                                            <th>MTCN</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    include 'conn.php';
// Check connection
                                    if (!$link) {
                                        die("Connection failed: " . mysqli_connect_error());
                                    }

                                    $sql = "SELECT * FROM receipt";
                                    $result = mysqli_query($link, $sql);

                                    if (mysqli_num_rows($result) > 0) {
    // output data of each row
                                        while($row = mysqli_fetch_assoc($result)) {?>
                                            <tbody>
                                                <tr>
                                                    <td><?php echo $row["rname"] ?></td>
                                                    <td><?php echo $row["sname"] ?></td>
                                                    <td><?php echo $row["trndate"] ?></td>
                                                    <td><?php echo $row["mtnc"] ?></td>
                                                    <td><a class="btn btn-danger" href="delete_track.php?id=<?php echo $row["receipt_id"]; ?>">
                                                        <i class="glyphicon glyphicon-trash icon-white"></i>
                                                        Delete
                                                    </a>
                                                    <a class="btn btn-success" href="edit_receipt.php?id=<?php echo $row["receipt_id"]; ?>">
                                                        <i class="glyphicon glyphicon-pencil icon-white"></i>
                                                        Edit
                                                    </a>
                                                    <a class="btn btn-primary" href="view_user.php?id=<?php echo $row["receipt_id"]; ?>">
                                                        <i class="glyphicon glyphicon-pencil icon-white"></i>
                                                        View
                                                    </a>
                                                </td>
                                            </tr>


                                        </tbody>
                                        <?php 

                                    }
                                } else {
                                    echo "0 results";
                                }

                                mysqli_close($link);
                                ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>







        <!-- End PAge Content -->
        <?php include 'footer.php'; ?>