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
                            <h4>Edit Existing Receipt</h4>

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
    $dt = mysqli_real_escape_string($link,$_POST['dt']);
    $amount = mysqli_real_escape_string($link,$_POST['amount']);
    $trans = mysqli_real_escape_string($link,$_POST['trans']);
    $tax = mysqli_real_escape_string($link,$_POST['tax']);
    $pay = mysqli_real_escape_string($link,$_POST['pay']);
         $id1 = $_POST['id1'];

    if (empty($rname)) {
        echo "<div class='alert alert-danger'>
        <strong>Failed!</strong>Receiver's Name Cannot Be Empty.
        </div>";
    }


    else{
        $me = rand();
// Attempt insert query execution
              $sql =  "UPDATE receipt SET rname='$rname',rcountry='$rcountry',rcity='$rcity',raddress='$raddress',phone='$rphone',sname='$sname', saddress='$saddress', scountry='$scountry', scity='$scity',sphone='$sphone', mtnc= '$mtcn', trndate='$dt', areceive='$amount', fee='$trans', tax='$tax', asend='$pay'   WHERE receipt_id='$id1' ";
        if(mysqli_query($link, $sql)){
            echo "<div class='alert alert-success'>
            <strong>Success!</strong> Receipt Successfully Updated.
            </div>";
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
    }
}
// Close connection
mysqli_close($link);

?>
<?php 
include 'conn.php';
if($_GET['id']) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM receipt WHERE receipt_id = {$id}";
    $result = $link->query($sql);

    $data = $result->fetch_assoc();

}

?>
</div>
<div class="card-body">
    <div class="basic-form">
        <form method="post">
                       <div class="form-group">
            <input type="hidden" name="id1" value="<?php echo $data["receipt_id"];?>" class="form-control" placeholder="Receivers Name">
        </div>
           <div class="form-group">
            <label><b>Receivers Name</b></label>
            <input type="text" value="<?php echo $data["rname"];?>" name="rname" class="form-control" placeholder="Receivers Name">
        </div>
        <div class="form-group">
            <label><b>Receivers City</b></label>
            <input type="text" value="<?php echo $data["rcity"];?>" name="rcity" class="form-control" placeholder="City">
        </div>
        <div class="form-group">
            <label><b>Receivers Country</b></label>
            <input type="text" value="<?php echo $data["rcountry"];?>" name="rcountry" class="form-control" placeholder="Country">
        </div>
        <div class="form-group">
            <label><b>Receivers phone Number</b></label>
            <input type="text" value="<?php echo $data["phone"];?>" name="rphone" class="form-control" placeholder="Country">
        </div>
        <div class="form-group">
            <label><b>Receivers Address</b></label>
            <input type="text" value="<?php echo $data["raddress"];?>" name="raddress" class="form-control" placeholder="Country">
        </div>

        <div class="form-group">
            <label><b>Sender Name</b></label>
            <input type="text" name="sname" value="<?php echo $data["sname"];?>" class="form-control" placeholder="Country">
        </div>
        <div class="form-group">
            <label><b>Sender City</b></label>
            <input type="text" name="scity" value="<?php echo $data["scity"];?>" class="form-control" placeholder="Sender City">
        </div>
        <div class="form-group">
            <label><b>Sender Country</b></label>
            <input type="text" name="scountry" value="<?php echo $data["scountry"];?>" class="form-control" placeholder="Sender Country">
        </div>
        <div class="form-group">
            <label><b>Sender Address</b></label>
            <input type="text" name="saddress" value="<?php echo $data["saddress"];?>" class="form-control" placeholder="Sender Country">
        </div>
        <div class="form-group">
            <label><b>Sender Phone</b></label>
            <input type="text" name="sphone" value="<?php echo $data["sphone"];?>" class="form-control" placeholder="Sender Country">
        </div>

        <div class="form-group">
            <label><b>MTCN</b></label>
            <input type="text" name="mtcn" value="<?php echo $data["mtnc"];?>" class="form-control" placeholder="MTCN">
        </div>
        <div class="form-group">
            <label><b>Date and time</b></label>
            <input type="text" name="dt" value="<?php echo $data["trndate"];?>" class="form-control" placeholder="Date and time">
        </div>
        <div class="form-group">
            <label><b>Amount Sent</b></label>
            <input type="text" name="amount" value="<?php echo $data["areceive"];?>" class="form-control" placeholder="Amount Sent">
        </div>
        <div class="form-group">
            <label><b>Transfer Fee</b></label>
            <input type="text" name="trans" value="<?php echo $data["fee"];?>" class="form-control" placeholder="Transfer Fee">
        </div>
        <div class="form-group">
            <label><b>Tax</b></label>
            <input type="text" name="tax" value="<?php echo $data["tax"];?>" class="form-control" placeholder="Tax">
        </div>
        <div class="form-group">
            <label><b>Amount To Receive</b></label>
            <input type="text" name="pay" value="<?php echo $data["asend"];?>" class="form-control" placeholder="Amount To Pay">
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