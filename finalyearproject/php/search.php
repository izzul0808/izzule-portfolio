<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Search</title>
    <link rel="stylesheet" href="../css/style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>


  <div class="container">
    <div class="upsi">
      <img src="../images/sol3.png" alt="" width="200" height="200">
    </div>
    <div class="title">Searching...</div>
    <div class=" line "></div><br>

            <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>

<form action="searchdata.php" method="post" enctype="multipart/form-data">
    <div class="bmi">
        <div class="input-box">
          <br>Owner Name<br><input type="text" placeholder="Insert a right name" name="num" id="num"><br>
        </div>
        <div class="input-box">
            No. <br><input type="text" placeholder="No. Tracking" name="num1" id="num1"><br>
        </div>
        *You must only fill one field* <br>
        <br><button id="button" name="submit" onclick="">Search</button>
    </div>
</form>

        <a href="home.php">
        <br><button id="button" onclick="">Cancel</button><br>
        </a>  
