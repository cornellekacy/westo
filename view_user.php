<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="logo.png">
    <title>Cargo Shippers And Logistics - Home</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->

    <link href="css/lib/calendar2/semantic.ui.min.css" rel="stylesheet">
    <link href="css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet">
    <link href="css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
     <link href="css/lib/sweetalert/sweetalert.css" rel="stylesheet">
     <link rel="stylesheet" href="css/lib/html5-editor/bootstrap-wysihtml5.css" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar">

    <!-- Main wrapper  -->

        <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->



            <!-- End Bread crumb -->
  
  <br><br>          <!-- Container fluid  -->
            <div class="container">
                <!-- Start Page Content -->
                <div class="row">
                                        <?php 
include 'conn.php';
if($_GET['id']) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM receipt WHERE receipt_id = {$id}";
    $result = $link->query($sql);

    $data = $result->fetch_assoc();

}

?>

                    <div class="col-md-12">
                                           
                            <div >
                                <div class="table-responsive">
                                    <table  class="display  table   table-bordered" cellspacing="0" width="100%">
                                       <thead style="border-collapse: collapse;">
                                            <tr style="align: center">
                                                <th colspan="3" style=" font-size: 4em;  "><img src="1.png"> <i>To Receive -  Agent Receipt</i>  </th>
                                            </tr>
                                        </thead>
                                        <thead>
                                            <tr>
                                              <th colspan="3"></th>
                                            </tr>
                                        </thead>
                                        <tbody> 
                                                     <tr  style="text-align: left; color: #000 ">
                                            <td style="color: #000">
                                                <b>Receivers Name :</b>  <?php echo $data["rname"];?> <br>
                                                 <b>Receivers Country :</b>  <?php echo $data["rcountry"];?> <br>
                                                  <b>Receivers City:</b>  <?php echo $data["rcity"];?> <br>
                                                <b>Address :</b>  <?php echo $data["raddress"];?> <br>
                                                <b>Telephone :</b>  <?php echo $data["phone"];?> <br>
                                                 <b>Country Of Birth:</b>  <?php echo $data["rcountry"];?> <br>
                                            </td>
                                                <td style="color: #000">
                                                <b>Sender Name :</b>  <?php echo $data["sname"];?> <br>
                                                <b>Sender Address :</b>  <?php echo $data["saddress"];?> <br>
                                                <b>Sender Country :</b>  <?php echo $data["scountry"];?> <br>
                                                <b>Sender City :</b>  <?php echo $data["scity"];?> <br>
                                                <b>Telephone :</b>  <?php echo $data["sphone"];?> <br>
                                            </td>
                                            <td style="text-align : left; color: #000">
                                                <b>MTCN:</b>  <?php echo $data["mtnc"];?> <br>
                                                <b>Date and Time : </b><?php echo $data["trndate"];?> <br><br>
                                                 <b>Amount Send: </b><?php echo $data["areceive"];?> <br>
                                                  <b>Originating Country:</b> <?php echo $data["scountry"];?> <br>
                                                  <b>Transfer Fee : </b> <?php echo $data["fee"];?> <br>
                                                  <b>Tax:</b> <?php echo $data["tax"];?> <br>
                                                  <b>Amount To Receive : </b> <?php echo $data["asend"];?> <br>
                                            </td>
                                        </tr>
<tr>
    <td colspan="3" style="line-height: 120%; text-align: left; color: #000">if you choose to provide details of your landline/mobile and/or your e-mail in the optional entries above you also expressly consend to receipt of such commercial communication in the indicated medium(telephone/SMS/MMS/e-mail), to being notified of transfer collection by SMS and agree that any charges imposed by the provider of such services are your sole responsibility</td>
</tr>
<tr>
    <td colspan="3" style="line-height: 120%; text-align: left; color: #000"">IMPORTANT NOTICE: THE TERMS AND COMDITIONS ON WHICH THE SERVICE IS PROVIDED ARE SET OUT ON THE REVERSE OF THE FORM. YOU ARE ADVISED TO READ THESE TERMS AND CONDITIONS, ESPECIALLY THOSE RESTRICTING LIABILITY AND DATA PROTECTION BEFORE SIGNING THIS FORM. IN ADDITION TO THE TRANSFER FEE, WESTERN UNION AND ITS AGENTS ALSO MAKE MONEY FROM THE EXCHANGE OF CURRENCIES. PLEASE SEE FURTHER IMPORTANT INFORMATION REGARDING CURRENCY EXCHANGE AND LEGAL RESTRICTIONS THAT MAY DELAY THE TRANSACTION SET FORTH ON THE BACK OF THIS FORM. PROTECT YOURSELF FROM CUSTOMER FRAUD. BE CAREFUL WHEN A STRANGER ASK YOU TO SEND MONEY. DO NOT DIVULGE THE DETAILS OF THIS TRANSFER TO A THIRD PARTY.</td>
</tr>
<tr>
    <td><br> <br> <br></td>
    <td align="left" style="color: #000"><br>
         Customer Signature:<br>
       
    </td>
    <td align="left" style=" color: #000"><br>
        Agent Signature:<br>
        
    </td>
</tr>
                                        </tbody>

                               

                                  
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>



<br><br>



                <!-- End PAge Content -->
