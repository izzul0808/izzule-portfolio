<?php
// Create database connection using config file
include_once("db_conn2.php");
 
// Fetch all users data from database
$result = mysqli_query($conn2, "SELECT * FROM couriers ORDER BY id DESC");
$query = $conn2->query("SELECT * FROM couriers ORDER BY file_name DESC");
?>
 
<html>
<head>
    <title>ViewEvents</title>
    <link rel="stylesheet" type="text/css" href="../css/stylexxx.css">
</head> 
<body>
    <!-- link to insert data file -->
    <div class="container">
    <div class="upsi">
      <img src="../images/logomyupsievent.png" alt="" width="200" height="200">
    </div>
    <div class="title">View Events</div>
    <div class=" line "></div><br><br>

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

            img {
                height: 50%;
                width: 50%;
                padding: 5px;
                width: 300px;
            }
    </style>


    <!-- display the requested data in a table -->
    <table style="margin: 0 auto;" width='100%' border=3>
    <tr>
            <th>Id</th> 
            <th>Poster</th>
            <th>Start Date</th>   
            <th>End Date</th>
            <th>Time</th>
            <th>Club</th> 
            <th>Description</th> 
            <th>Added Time</th>   
            <th>Action</th> 
        </tr>
    <?php  
    //loop to get each record
    while ($user_data = $query->fetch_assoc()) {
            echo "<td>".$user_data['id']."</td>";
            $imageURL = 'uploads/' . $user_data["file_name"];
            echo "<td><img src='" . $imageURL . "' alt=''></td>";
            echo "<td>" . $user_data['deliveryman'] . "</td>";
            echo "<td>" . $user_data['type'] . "</td>";
            echo "<td>" . $user_data['total'] . "</td>";
            echo "<td>" . $user_data['staff'] . "</td>";
            echo "<td>" . $user_data['other2'] . "</td>";
            echo "<td>".$user_data['time']."</td>";

            //ensure that the link to edit and delete data are added and bring the id of the chosen record  
            echo "
            <td>
                <a href='editcourier.php?id=$user_data[id]'>Edit</a> |
                <a href='deletecourier.php?id=$user_data[id]' 
                onClick=\"javascript:return confirm('Are you sure you want to remove this data?');\">
                Delete</a>

            </td>";
        echo "</tr>";        
    } //close while statement
    ?>
    </table>
    <form action="home.php">
            <br><button id="button" href="home.php">Home</button><br><br>
    </form>

    </div>
</body>
</html>
