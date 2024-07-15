<?php 

session_start(); 

include "db_conn2.php";

if (isset($_POST['deliveryman']) && isset($_POST['type']) && isset($_POST['total']) && isset($_POST['staff']) && isset($_POST['other'])) {

    // File upload path
    $targetDir = "uploads/";
    $fileName = basename($_FILES["file"]["name"]);
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
    
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
    $imageURL = validate($fileName);

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
        }else if(empty($other)){
            header("Location: gaddparcel.php?error=Other is required");
            exit();
        }else{

            // Check if file type is allowed
            $allowTypes = array('jpg', 'png', 'jpeg', 'gif', 'pdf');
            if (!in_array($fileType, $allowTypes)) {
            $_SESSION['error_message'] = "Invalid file type. Allowed types are jpg, png, jpeg, gif, pdf.";
            header("Location: couriers.php");
            exit();
            }
            
            // Upload file to server
            move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath);

            $sql = "INSERT INTO couriers (time, deliveryman, type, total, staff, other2, file_name) 
            VALUES ( NOW() , '$deliveryman', '$type', '$total', '$staff', '$other', '$fileName')";
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
