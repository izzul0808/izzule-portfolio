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
        <a href="#" class="logo">Your Parcel Status</a>
 
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
            <h2>Your Parcel Status</h2>
<!------------------------------------------------------------------------------------------------------>
            <?php 
session_start(); 
include "../php/db_conn2.php";

if (isset($_POST['num'])) {
    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }
    //cara untuk dapatkan value darpada form
    $num = validate($_POST['num']);
            $sql = "SELECT * FROM parcels where tracking='$num'";
            $result = mysqli_query($conn2, $sql);
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_array($result))
                {
                    ?>

                    <table>
                        <tr>
                            <th>No. Tracking</th>
                            <th>Name</th>
                            <th>Status</th>
                        </tr>

                        <tr>
                            <td><?php echo $row['tracking'] ?></td>
                            <td><?php echo $row['name'] ?></td>
                            <td>Ready to pickup</td>
                        </tr>
                    </table>
                    <?php
    
                }
            } else {
                header("Location: search1.php?error=Your Parcel is not ready to pickup. Pleace check again later.");
                exit();
            }
} ?>

<!------------------------------------------------------------------------------------------------------>

                <br><a href="search1.php" class="btn1">Back</a>
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