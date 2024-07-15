<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Green Solution</title>
    <link rel="stylesheet" href="../css/search.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>
<body>

    <header>
        <a href="#" class="logo">Track Your Parcel here</a>
 
        <div class="bx bx-menu" id="menu-icon"></div>
    
        <ul class="navbar">
            <li><a href="../index.php">Home</a></li>
            <div class="bx bx-moon" id="darkmode"></div>
        </ul>
    </header>

    <section class="search" id="search">
        <div class="search-img">
            <br><br><img src="../images/sol3.png" alt=""><br>
        </div>
            
        <div class="home-text">
            <h2>Enter Your Tracking Number</h2>

            <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>

            <form action="track.php" method="post" enctype="multipart/form-data">
                <div class="input-box">
                    <input type="text" placeholder="Enter Here" name="num" id="num" required><br><br>
                </div>

                <button id="button" name="submit" class="btn1" onclick="">Track</button>
            </form>

        </div>
    </section>
    <!--
    <div class="copyright">
        <p>Developed By <a href="">MTD3063 (Group C)</a> | 2022 | All Right Reserved.</p>
    </div>
    -->
    <script src="../java/script1.js"></script>
</body>
</html>