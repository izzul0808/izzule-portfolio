<?php 

session_start(); 

include "db_conn2.php";



if (isset($_POST['deliveryman']) && isset($_POST['type']) && isset($_POST['total']) && isset($_POST['staff']) && isset($_POST['other']) ) {

    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }

    //cara untuk dapatkan value darpada form
    $deliveryman = validate($_POST['deliveryman']);
    $type = validate($_POST['type']);
    $total = validate($_POST['total']);
    $staff = validate($_POST['staff']);
    $other = validate($_POST['other']);

        if (empty($deliveryman)) {
            header("Location: gaddparcel.php?error=Tracking bumber is required");
            exit();
        }else if(empty($type)){
            header("Location: gaddparcel.php?error=Name is required");
            exit();
        }else if(empty($total)){
            header("Location: gaddparcel.php?error=Courier is required");
            exit();
        }else if(empty($staff)){
            header("Location: gaddparcel.php?error=Category is required");
            exit();
        }else{
            $sql = "INSERT INTO couriers (time, deliveryman, type, total, staff, other2) 
            VALUES ( NOW() , '$deliveryman', '$type', '$total', '$staff', '$other')";
            $result = mysqli_query($conn2, $sql);
            if ($result) {
                header("Location: courier2.php");
            }
                else {
                    echo "Unsuccessful ";
                }         
        }
    }else{
        echo "
                    <script>
                        alert('Check again your data');
                        location.href='courier.php';
                    </script>              
                    ";
        exit();
    }
