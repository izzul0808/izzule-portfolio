<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Add Parcel</title>
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
    <div class="title">Add Parcel</div>
    <div class=" line "></div><br><br>

<form action="dataparcel.php" method="post" enctype="multipart/form-data">
    <div class="bmi">

        <div class="input-box">
            No Tracking <br><input type="text" placeholder="Tracking" name="tracking" id="tracking" required><br>
            Name <br><input type="text" placeholder="Full Name" name="name" id="name" required><br>
            No. Tel <br><input type="text" placeholder="xxx-xxx xxxx" name="no" id="no"><br>
            Courier <br><input type="text" placeholder="eg. JNT" name="courier" id="courier"><br>
        </div>
        <br><div class=" line "></div><br><br>
        <div class="input-box">
            <span class="details">Category</span>
            <select name="category" id="category">
                <option value=""></option>
                <option value="Kotak Kecil">Kotak Kecil</option>
                <option value="Kotak Besar">Kotak Besar</option>
                <option value="Parcel Kecil">Parcel Kecil</option>
                <option value="Parcel Besar">Parcel Besar</option>
            </select>
        </div>

        Colour <br><input type="text" placeholder="eg. Black" name="color" id="color"><br>
        Other Details <br><input type="text" placeholder="" name="other" id="other"><br>

        <br><button id="button" name="submit" onclick="">Add</button><br>

    </div>
</form>
        <a href="home.php">
        <br><button id="button" onclick="">Cancel</button><br>
        </a>  
