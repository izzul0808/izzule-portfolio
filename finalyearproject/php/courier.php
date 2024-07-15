<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>AddEvent</title>
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
      <img src="../images/logomyupsievent.png" alt="" width="200" height="200">
    </div> 
    <div class="title">Add New Event</div>
    <div class=" line "></div><br><br>

<form action="datacourier.php" method="post" enctype="multipart/form-data">
    <div class="bmi">

        <div class="user-details">
            <div class="student-image">
                <span for="myfile">Event Poster</span><br>
                <div class="profile">
                  <img src="../images/profile.png" id="photo">
                  <input type="file" id="img" name="file">
                  <label for="img" id="uploadBtn">Choose Photo</label>
                </div> 
            </div>
        </div><br>

        <script src="../java/script2.js"></script>

        <div class="input-box">
            Start Date <br><input type="text" placeholder="eg. 15.jan.2024" name="deliveryman" id="deliveryman"><br>
            End Date <br><input type="text" placeholder="eg. 15.jan.2024" name="type" id="type" required><br>
            Time <br><input type="text" placeholder="eg. 9.00am-9.00pm" name="total" id="total" required><br>

            <!--<br><div class=" line "></div><br><br>-->

            Club <br><input type="text" placeholder="eg. Persatuan Teknologi Maklumat (PTM)" name="staff" id="staff"><br>
            Description <br><input type="text" placeholder="Description" name="other" id="other"><br>
        </div> 

        <br><button id="button" name="submit" onclick="">Add</button><br>
    </div>
</form>
        <a href="home.php">
        <br><button id="button" onclick="">Cancel</button><br>
        </a>  
