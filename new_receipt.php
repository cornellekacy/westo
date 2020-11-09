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
                <div class="col-md-2">

                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-title">
                            <h4>Add New Tracking</h4>

                            <?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
include 'conn.php';

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
if(isset($_POST['save'])){
    $rname = mysqli_real_escape_string($link,$_POST['rname']);
    $rcity = mysqli_real_escape_string($link,$_POST['rcity']);
    $rcountry = mysqli_real_escape_string($link,$_POST['rcountry']);
    $rphone = mysqli_real_escape_string($link,$_POST['rphone']);
    $raddress = mysqli_real_escape_string($link,$_POST['raddress']);
    $sname = mysqli_real_escape_string($link,$_POST['sname']);
    $scity = mysqli_real_escape_string($link,$_POST['scity']);
    $scountry = mysqli_real_escape_string($link,$_POST['scountry']);
    $saddress = mysqli_real_escape_string($link,$_POST['saddress']);
    $sphone = mysqli_real_escape_string($link,$_POST['sphone']);
    $mtcn = mysqli_real_escape_string($link,$_POST['mtcn']);

    $amount = mysqli_real_escape_string($link,$_POST['amount']);
    $trans = mysqli_real_escape_string($link,$_POST['trans']);
    $tax = mysqli_real_escape_string($link,$_POST['tax']);
    $pay = mysqli_real_escape_string($link,$_POST['pay']);


    if (empty($rname)) {
        echo "<div class='alert alert-danger'>
        <strong>Failed!</strong>Receiver's Name Cannot Be Empty.
        </div>";
    }


    else{
        $dt = date("m/d/y G.i:s<br>", time());
// Attempt insert query execution
 $sql = "INSERT INTO receipt (rname,rcountry,rcity,raddress,phone,sname,saddress,scountry,scity,sphone,mtnc,trndate,areceive,fee,tax,asend) 
        VALUES ('$rname','$rcountry','$rcity','$raddress','$rphone','$sname','$saddress','$scountry','$scity','$sphone','$mtcn', '$dt', '$amount', '$trans', '$tax', '$pay')";
        if(mysqli_query($link, $sql)){
            echo "<div class='alert alert-success'>
            <strong>Success!</strong> Tracking Successfully Created.
            </div>";
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
    }
}
// Close connection
mysqli_close($link);

?>
</div>
<div class="card-body">
    <div class="basic-form">
        <form method="post">
           <div class="form-group">
            <label><b>Receivers Name</b></label>
            <input type="text" name="rname" class="form-control">
        </div>
        <div class="form-group">
            <label><b>Receivers City</b></label>
            <input type="text" name="rcity" class="form-control">
        </div>
        <div class="form-group">
            <label><b>Receivers Country</b></label>
            <input type="text" name="rcountry" class="form-control">
        </div>
        <div class="form-group">
            <label><b>Receivers phone Number</b></label>
            <input type="text" name="rphone" class="form-control">
        </div>
        <div class="form-group">
            <label><b>Receivers Address</b></label>
            <input type="text" name="raddress" class="form-control">
        </div>

        <div class="form-group">
            <label><b>Sender Name</b></label>
            <input type="text" name="sname" class="form-control">
        </div>
        <div class="form-group">
            <label><b>Sender City</b></label>
            <input type="text" name="scity" class="form-control">
        </div>
        <div class="form-group">
            <label><b>Sender Country</b></label>
            <input type="text" name="scountry" class="form-control">
        </div>
        <div class="form-group">
            <label><b>Sender Address</b></label>
            <input type="text" name="saddress" class="form-control">
        </div>
        <div class="form-group">
            <label><b>Sender Phone</b></label>
            <input type="text" name="sphone" class="form-control">
        </div>

        <div class="form-group">
            <label><b>MTCN</b></label>
            <input type="text" name="mtcn" class="form-control">
        </div>

        <div class="form-group">
            <label><b>Amount Sent</b></label>
            <input type="text" name="amount" class="form-control">
        </div>
        <div class="form-group">
            <label><b>Transfer Fee</b></label>
            <input type="text" name="trans" class="form-control">
        </div>
        <div class="form-group">
            <label><b>Tax</b></label>
            <input type="text" name="tax" class="form-control">
        </div>
        <div class="form-group">
            <label><b>Amount To Receive</b></label>
            <input type="text" name="pay" class="form-control">
        </div>

        <button type="submit" name="save" class="btn btn-primary">Generate Receipt</button>
    </form>
</div>
</div>
</div>

</div>
<div class="col-md-2">

</div>
</div>







<!-- End PAge Content -->
<?php include 'footer.php'; ?>