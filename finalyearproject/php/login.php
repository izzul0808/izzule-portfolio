<!DOCTYPE html>
<html>
<head>
    <title>admin.login</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>

<div class="container">
    <div class="upsi">
      <img src="../images/logomyupsievent.png" alt="" width="200" height="200">
    </div>
    <div class="title">Log In</div>
    <div class=" line "></div><br>

<form action="login2.php" method="post" enctype="multipart/form-data">
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>

    <div class="bmi">

        <div class="input-box">
            User Name<br><input type="text" placeholder="" name="uname" id="uname"><br>
            Password<br><input type="password" placeholder="" name="password" id="password"><br>
        </div>

        <br><button id="button" name="submit" onclick="">Log In</button>

    </div>
</form>
        <a href="../index.php">
        <br><button id="button" onclick="">Home</button><br>
        </a>  

</body>
</html>