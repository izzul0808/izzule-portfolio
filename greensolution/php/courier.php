<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Couriers</title>
    <link rel="stylesheet" href="../css/style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>


    <?php if(!empty($statusMsg)) { ?>
      <p class="status-msg"><?php echo $statusMsg; ?> </p>
    <?php } ?>
      
    <?php if(isset($_GET['error'])) {?>
        <p class="error"><?php echo $_GET['error']; ?></p>
    <?php } ?>


  <div class="container">
    <div class="upsi">
      <img src="../images/sol3.png" alt="" width="200" height="200">
    </div>
    <div class="title">Courier</div>
    <div class=" line "></div><br><br>

<form action="datacourier.php" method="post" enctype="multipart/form-data">
    <div class="bmi">

        <div class="input-box">
            Delivery Man <br><input type="text" placeholder="Name" name="deliveryman" id="deliveryman"><br>
            Type of Courier <br><input type="text" placeholder="eg. JNT" name="type" id="type" required><br>
            Total Parcel <br><input type="text" placeholder="How much?" name="total" id="total" required><br>

            <br><div class=" line "></div><br><br>

            Staff's Name <br><input type="text" placeholder="Staff" name="staff" id="staff"><br>
            Other Details <br><input type="text" placeholder="" name="other" id="other"><br>
        </div>

        <br><button id="button" name="submit" onclick="">Add</button><br>
    </div>
</form>
        <a href="home.php">
        <br><button id="button" onclick="">Cancel</button><br>
        </a>  
