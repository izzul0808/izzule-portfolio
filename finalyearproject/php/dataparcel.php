<?php 

session_start(); 

include "db_conn2.php";



if (isset($_POST['tracking']) && isset($_POST['name']) && isset($_POST['no']) && isset($_POST['courier']) && isset($_POST['category']) 
&& isset($_POST['color']) && isset($_POST['other']) ) {

    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }

    //cara untuk dapatkan value darpada form
    $tracking = validate($_POST['tracking']);
    $name = validate($_POST['name']);
    $no = validate($_POST['no']);
    $courier = validate($_POST['courier']);
    $category = validate($_POST['category']);
    $color = validate($_POST['color']);
    $other = validate($_POST['other']);

        if (empty($tracking)) {
            header("Location: gaddparcel.php?error=Tracking bumber is required");
            exit();
        }else if(empty($name)){
            header("Location: gaddparcel.php?error=Name is required");
            exit();
        }else if(empty($courier)){
            header("Location: gaddparcel.php?error=Courier is required");
            exit();
        }else if(empty($category)){
            header("Location: gaddparcel.php?error=Category is required");
            exit();
        }else if(empty($color)){
            header("Location: gaddparcel.php?error=Colour is required");
            exit();
        }else{
            $sql = "INSERT INTO parcels (tracking, name, no, courier, category, color, other) 
            VALUES ('$tracking', '$name', '$no', '$courier', '$category', '$color', '$other')";
            $result = mysqli_query($conn2, $sql);
            if ($result) {
                    header("Location: parcel2.php");
                }
                else {
                    echo "Unsuccessful ";
                }         
        }
    }else{
        echo "
                    <script>
                        alert('Check again your data');
                        location.href='parcel.php';
                    </script>              
                    ";
        exit();
    }
