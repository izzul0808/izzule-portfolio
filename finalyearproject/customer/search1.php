<?php
// Create database connection using config file
include_once("../php/db_conn2.php");
 
// Fetch all users data from database
$result = mysqli_query($conn2, "SELECT * FROM couriers ORDER BY id DESC");
// Get images from the database
$query = $conn2->query("SELECT * FROM couriers ORDER BY file_name DESC");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyUPSIEvent</title>
    <link rel="stylesheet" href="../css/search.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>
<body>

    <header>
        <a href="#" class="logo"></a>
 
        <div class="bx bx-menu" id="menu-icon"></div>
    
        <ul class="navbar">
            <li><a href="../index.php">Home</a></li>
            <div class="bx bx-moon" id="darkmode"></div>
        </ul>
    </header>

    <section class="search" id="search">
        <div class="search-img">
            <br><br><img src="../images/logomyupsievent.png" alt=""><br>
        </div>
            
        <div class="home-text">
            <h2>Upcoming Events 📌</h2><br>



        <style>
            table {
              border-collapse: collapse;
              border-spacing: 0;
              width: 100%;
              font-size: 15px;
            }
            th, td {
              text-align: left;
              padding: 8px;
            }
         </style>


        <style>
            img {
                height: 50%;
                width: 50%;
                padding: 5px;
                width: 300px;
            }
        </style>


    <!-- display the requested data in a table -->
    <table style="margin:0vmax;" width='100%' border=3>
        <tr>
            <th>Poster</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Time</th>
            <th>Club</th> 
            <th>Description</th> 
        </tr>


    <?php  
    //loop to get each record
    // Display the requested data in a table
        while ($user_data = $query->fetch_assoc()) {
            $imageURL = '../php/uploads/' . $user_data["file_name"];
            echo "<tr>";
            echo "<td><img src='" . $imageURL . "' alt=''></td>";
            echo "<td>" . $user_data['deliveryman'] . "</td>";
            echo "<td>" . $user_data['type'] . "</td>";
            echo "<td>" . $user_data['total'] . "</td>";
            echo "<td>" . $user_data['staff'] . "</td>";
            echo "<td>" . $user_data['other2'] . "</td>";
            echo "</tr>";    } //close while statement
    ?>
    </table>

            <!--<form action="track.php" method="post" enctype="multipart/form-data">
                <div class="input-box">
                    <input type="text" placeholder="Enter Here" name="num" id="num" required><br><br>
                </div>

                <button id="button" name="submit" class="btn1" onclick="">Track</button>
            </form>-->

        </div>
    </section>
    
    <div class="copyright">
        <p>Developed By <a href="">FinalYearProject Student (Izzul)</a> | 2023 | All Right Reserved.</p>
    </div>
    
    <script src="../java/script1.js"></script>
</body>
</html>