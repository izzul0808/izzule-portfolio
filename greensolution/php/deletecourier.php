<?php
// include database connection file
include_once("db_conn2.php");
 
// Get id from URL to delete that user
$id = $_GET['id'];
 
// Delete user row from table based on given id
$result = mysqli_query($conn2, "DELETE FROM couriers WHERE id=$id");
if($result){
    // After delete redirect to Home, so that latest user list will be displayed.
    echo "
    <script>
        window.location.href='viewcourier.php';
        alert('Data has been successfully deleted');        
    </script>    
    ";
}
else {
    echo "
    <script>
        alert('Problem to delete the data');
    </script>    
    "; 
}
?>