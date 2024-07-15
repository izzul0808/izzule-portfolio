<html>
<head>  
    <title>Edit User Data</title>
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

    $tracking1 = $_POST['tracking'];
    $name1 = $_POST['name'];
    $no1 = $_POST['no'];
    $courier1 = $_POST['courier'];
    $category1 = $_POST['category'];
    $color1 = $_POST['color'];
    $other1 = $_POST['other'];
    $noic1 = $_POST['noic'];
    $time1 = $_POST['time'];
    $status1 = $_POST['status'];

        
    // update user data
    $result = mysqli_query($conn2, "UPDATE parcels SET tracking='$tracking1', name='$name1', no='$no1', 
    courier='$courier1', category='$category1', color='$color1', other='$other1', noic='$noic1', time='$time1', status='$status1' WHERE id=$id");
    //show alert message that the data has been updated
    if ($result){
         // Redirect to homepage to display updated user in list    
        echo "
        <script>
            window.location.href='viewparcel.php';
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
    $result = mysqli_query($conn2, "SELECT * FROM parcels WHERE id=$id");
    //if the data can be ontained from the query, display them in the table
    if($result) {
        while($user_data = mysqli_fetch_array($result))
        {
            $id = $user_data['id'];
            $tracking = $user_data['tracking'];
            $name = $user_data['name'];
            $no = $user_data['no'];
            $courier = $user_data['courier'];
            $category = $user_data['category'];
            $color = $user_data['color'];
            $other = $user_data['other'];
            $noic = $user_data['noic'];
            $time = $user_data['time'];
            $status = $user_data['status'];

        }
        ?>
        <div class="bmi"> 
        <form action="editparcel.php"  method="post" name="update_user">          
        <h2>Update Data Parcel</h2><br>
        <br><div class="title">Parcels Details</div>

            ID: <?php  echo $id; ?><br>

        <div class=" line "></div><br><br>

            <?php if(isset($_GET['error'])) {?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>

            No. Tracking <br><input type="text" name="tracking" id="tracking" value="<?php  echo $tracking; ?>"><br>
            Name <br><input type="text" name="name" id="name" value="<?php  echo $name; ?>"><br>
            No. Tel <br><input type="text" name="no" id="no" value="<?php  echo $no; ?>"><br>
            Courier <br><input type="text" name="courier" id="courier" value="<?php  echo $courier; ?>"><br>
            Category <br>
            <select name="category" id="category">
                <option value="<?php  echo $category; ?>"><?php  echo $category; ?></option>
                <option value="Kotak Kecil">Kotak Kecil</option>
                <option value="Kotak Besar">Kotak Besar</option>
                <option value="Parcel Kecil">Parcel Kecil</option>
                <option value="Parcel Besar">Parcel Besar</option>
            </select><br>

            Colour <br><input type="text" name="color" id="color" value="<?php  echo $color; ?>"><br>
            Others <br><input type="text" name="other" id="other" value="<?php  echo $other; ?>"><br>
            No. IC <br><input type="text" name="noic" id="noic" value="<?php  echo $noic; ?>"><br>
            Time Pickup <br><input type="text" name="time" id="time" value="<?php  echo $time; ?>"><br>
            Status <br>
            <select name="status" id="status">
                <option value="<?php  echo $status; ?>"><?php  echo $status; ?></option>
                <option value="Already pickup">Already pickup</option>
                <option value="Not yet picked up">Not yet picked up</option>
            </select><br>

            
            <input type="hidden" name="id" value="<?php echo $id;  ?> "><br>
            
            <button id="button" type="submit" name="update">Update</button><br>

        </form>
        <br><button id="button" onclick="document.location='viewparcel.php'">Cancel</button><br><br>

        <?php
        }  //end of if statement
} //end of else statement
?>
</div> 
</div>

</body>
</html>