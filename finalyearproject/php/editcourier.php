<html>
<head>  
    <title>EditEvent</title>
    <link rel="stylesheet" type="text/css" href="../css/viewmore.css">

</head>
 
<body>
<div class="container">
<?php
// include database connection file
include_once("db_conn2.php"); 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update'])) {   
    $id = $_POST['id'];
    $time = $_POST['time'];

    $deliveryman1 = $_POST['deliveryman'];
    $type1 = $_POST['type'];
    $total1 = $_POST['total'];
    $staff1 = $_POST['staff'];
    $other1 = $_POST['other'];

        
    // update user data
    $result = mysqli_query($conn2, "UPDATE couriers SET deliveryman='$deliveryman1',type='$type1',total='$total1', 
    staff='$staff1',other2='$other1' WHERE id=$id");
    //show alert message that the data has been updated
    if ($result){
         // Redirect to homepage to display updated user in list    
        echo "
        <script>
            window.location.href='viewcourier.php';
            alert('Data has been updated!');
        </script>
        ";
    }
    else {
        echo "
        <script>
            alert('Sorry, fail to update!');
        </script>
        ";
    }   
}

else {
    // Display selected user data based on id
    // Getting id from url from view.php
    $id = $_GET['id'];
    
    // Fetch user data based on id
    $result = mysqli_query($conn2, "SELECT * FROM couriers WHERE id=$id");
    //if the data can be ontained from the query, display them in the table
    if($result) {
        while($user_data = mysqli_fetch_array($result))
        {
            $id = $user_data['id'];
            $time = $user_data['time'];
            $deliveryman = $user_data['deliveryman'];
            $type = $user_data['type'];
            $total = $user_data['total'];
            $staff = $user_data['staff'];
            $other = $user_data['other2'];
        }
        ?>
        <div class="bmi"> 
        <form action="editcourier.php"  method="post" name="update_user">          
        <h2>Edit Event</h2><br><br>
        <br><div class="title">Event Details</div>
            ID: <?php  echo $id; ?><br>
            Time: <?php  echo $time; ?><br>

        <div class=" line "></div><br><br>

            <?php if(isset($_GET['error'])) {?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>

            Image cannot be edited!<br><br>
            Start Date <br><input type="text" name="deliveryman" id="deliveryman" value="<?php  echo $deliveryman; ?>"><br>
            End Date <br><input type="text" name="type" id="type" value="<?php  echo $type; ?>"><br>
            Time <br><input type="text" name="total" id="total" value="<?php  echo $total; ?>"><br>
            Club <br><input type="text" name="staff" id="staff" value="<?php  echo $staff; ?>"><br>
            Description <br><input type="text" name="other" id="other" value="<?php  echo $other; ?>"><br>
            
            <input type="hidden" name="id" value="<?php echo $id;  ?> "><br>
            
            <button id="button" type="submit" name="update">Update</button><br>

        </form>
        <br><button id="button" onclick="document.location='viewcourier.php'">Cancel</button><br><br>

        <?php
        }  //end of if statement
} //end of else statement
?>
</div> 
</div>

</body>
</html>