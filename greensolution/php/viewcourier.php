<?php
// Create database connection using config file
include_once("db_conn2.php");
 
// Fetch all users data from database
$result = mysqli_query($conn2, "SELECT * FROM couriers ORDER BY id DESC");
?>
 
<html>
<head>
    <title>Couriers</title>
    <link rel="stylesheet" type="text/css" href="../css/stylexxx.css">
</head> 
<body>
    <!-- link to insert data file -->
    <div class="container">
    <div class="upsi">
      <img src="../images/sol3.png" alt="" width="200" height="200">
    </div>
    <div class="title">Couriers</div>
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
    </style>


    <!-- display the requested data in a table -->
    <table style="margin: 0 auto;" width='100%' border=3>
    <tr>
            <th>ID</th>   
            <th>Time</th> 
            <th>Delivery Man</th> 
            <th>Curier</th> 
            <th>Total Parcel</th>
            <th>Name Staff</th> 
            <th>Others</th> 
            <th>Action</th> 
        </tr>
    <?php  
    //loop to get each record
    while($user_data = mysqli_fetch_array($result)) {   
        echo "<tr>";
        //(student_name, father_name, mother_name, gender, date_birth, education_level, sem, email, nophone, 
        //p_address, p_postcode, p_city, p_state, t_address, t_postcode, t_city, t_state)
            echo "<td>".$user_data['id']."</td>";
            echo "<td>".$user_data['time']."</td>";
            echo "<td>".$user_data['deliveryman']."</td>";
            echo "<td>".$user_data['type']."</td>";
            echo "<td>".$user_data['total']."</td>"; 
            echo "<td>".$user_data['staff']."</td>";
            echo "<td>".$user_data['other2']."</td>";

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
