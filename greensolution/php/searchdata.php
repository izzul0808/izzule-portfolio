<!DOCTYPE html>
<html>
<head>
    <title>admin.login</title>
    <link rel="stylesheet" type="text/css" href="../css/stylexxx.css">
</head>
<body>

<div class="container">
    <div class="upsi">
      <img src="../images/sol3.png" alt="" width="200" height="200">
    </div>
    <div class="title">Services</div>
    <div class=" line "></div><br>

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
<!-------------------------------------------------------------------------------------------------------------------------->
<?php 
session_start(); 
include "db_conn2.php";
        if(isset($_POST['but_update'])){
            if(isset($_POST['update'])){
                foreach($_POST['update'] as $updateid){
 
                    $noic = $_POST['noic_'.$updateid];
                    $status = $_POST['status_'.$updateid];
 
                    if($noic !='' && $status != '' ){
                        $updateUser = "UPDATE parcels SET 
                            noic='".$noic."', status='".$status."', time=NOW()
                        WHERE id=".$updateid;
                        mysqli_query($conn2,$updateUser);
                    }
                }
                echo "
                <script>
                    alert('Success');
                    location.href='search.php';
                </script>              
                ";
                exit();
            }
        }
 ?>
<!-------------------------------------------------------------------------------------------------------------------------->
<form action="" method="post">

<?php 
if (empty($_POST['num']) && empty($_POST['num1'])) {
    header("Location: search.php?error=Kindly fill out one of the fields below.");
    exit();
}

else if (isset($_POST['num']) && empty($_POST['num1'])) {
    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }
    //cara untuk dapatkan value darpada form
    $num = validate($_POST['num']);
            $sql = "SELECT * FROM parcels where name='$num'";
            $result = mysqli_query($conn2, $sql);
            if (mysqli_num_rows($result) > 0) {
                    ?>
                    <table style="margin: 0 auto;" width='100%' border=3>
                    <tr style='background: whitesmoke;'>
                        <!-- Check/Uncheck All-->
                        <th></th>
                        <th>ID</th>
                        <th>Tracking</th>
                        <th>Name</th>
                        <th>No. Tel</th>
                        <th>Courier</th>
                        <th>Category</th>
                        <th>Colour</th>
                        <th>Others</th>
                        <th>Time</th>
                        <th>No. IC</th>
                        <th>Status</th>
                    </tr>
                        <?php
                    while($row = mysqli_fetch_array($result) ){
                        $id = $row['id'];
                        $tracking = $row['tracking'];
                        $name = $row['name'];
                        $no = $row['no'];
                        $courier = $row['courier'];
                        $category = $row['category'];
                        $color = $row['color'];
                        $other = $row['other'];
                        $noic = $row['noic'];
                        $time = $row['time'];
                        $status = $row['status'];
                    ?>
                        <tr>
                            <td>
                            <?php
                            if (empty($noic) && empty($status)) {
                            ?>
                                <input type='checkbox' name='update[]' value='<?= $id ?>' >
                            <?php 
                            }else {
                            ?>
                            <?php
                            } ?>   
                            
                            </td>
                            <td><?= $id ?></td>
                            <td><?= $tracking ?></td>
                            <td><?= $name ?></td>
                            <td><?= $no ?></td>
                            <td><?= $courier ?></td>
                            <td><?= $category ?></td>
                            <td><?= $color ?></td>
                            <td><?= $other ?></td>
                            <td><input type='text' name='time_<?= $id ?>' readonly value='<?= $time ?>' ></td>

                            <td>
                            <?php
                            if (empty($noic)) {
                            ?>
                                <input type='text' name='noic_<?= $id ?>' value='<?= $noic ?>' >
                            <?php 
                            }else {
                            ?>
                            <?= $noic ?>
                            <?php
                            } ?>   
                            </td>

                            <td>
                            <?php
                            if (empty($status)) {
                            ?>
                            <select name='status_<?= $id ?>' id="status">
                                <option value="<?= $status ?>"><?= $status ?></option>
                                <option value="Already">Already</option>
                                <option value="Missing">Missing</option>
                            </select>
                            <?php 
                            }else {
                            ?>
                            <?= $status ?>
                            <?php
                            } ?>   
                            </td>

                        </tr>
                        <?php
                    }
                    ?>
                    </table>
                    <?php
            }else {
                header("Location: search.php?error=Can't find this name.");
                exit();
            }
} 
else if (empty($_POST['num']) && isset($_POST['num1'])) {
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
     }
     //cara untuk dapatkan value darpada form
     $num = validate($_POST['num1']);
             $sql = "SELECT * FROM parcels where tracking='$num'";
             $result = mysqli_query($conn2, $sql);
             if (mysqli_num_rows($result) > 0) {
                     ?>
                     <table style="margin: 0 auto;" width='100%' border=3>
                     <tr style='background: whitesmoke;'>
                         <!-- Check/Uncheck All-->
                         <th></th>
                         <th>ID</th>
                         <th>Tracking</th>
                         <th>Name</th>
                         <th>No. Tel</th>
                         <th>Courier</th>
                         <th>Category</th>
                         <th>Colour</th>
                         <th>Others</th>
                         <th>Time</th>
                         <th>No. IC</th>
                         <th>Status</th>
                     </tr>
                         <?php
                     while($row = mysqli_fetch_array($result) ){
                         $id = $row['id'];
                         $tracking = $row['tracking'];
                         $name = $row['name'];
                         $no = $row['no'];
                         $courier = $row['courier'];
                         $category = $row['category'];
                         $color = $row['color'];
                         $other = $row['other'];
                         $noic = $row['noic'];
                         $time = $row['time'];
                         $status = $row['status'];
                     ?>
                         <tr>
                             <td>
                             <?php
                             if (empty($noic) && empty($status)) {
                             ?>
                                 <input type='checkbox' name='update[]' value='<?= $id ?>' >
                             <?php 
                             }else {
                             ?>
                             <?php
                             } ?>   
                             
                             </td>
                             <td><?= $id ?></td>
                             <td><?= $tracking ?></td>
                             <td><?= $name ?></td>
                             <td><?= $no ?></td>
                             <td><?= $courier ?></td>
                             <td><?= $category ?></td>
                             <td><?= $color ?></td>
                             <td><?= $other ?></td>
                             <td><input type='text' name='time_<?= $id ?>' readonly value='<?= $time ?>' ></td>
 
                             <td>
                             <?php
                             if (empty($noic)) {
                             ?>
                                 <input type='text' name='noic_<?= $id ?>' value='<?= $noic ?>' >
                             <?php 
                             }else {
                             ?>
                             <?= $noic ?>
                             <?php
                             } ?>   
                             </td>
 
                             <td>
                             <?php
                             if (empty($status)) {
                             ?>
                             <select name='status_<?= $id ?>' id="status">
                                 <option value="<?= $status ?>"><?= $status ?></option>
                                 <option value="Already">Already</option>
                                 <option value="Missing">Missing</option>
                             </select>
                             <?php 
                             }else {
                             ?>
                             <?= $status ?>
                             <?php
                             } ?>   
                             </td>
 
                         </tr>
                         <?php
                     }
                     ?>
                     </table>
                     <?php
             }else {
                 header("Location: search.php?error=Can't find this no. tracking.");
                 exit();
             }
 }
else {
    header("Location: search.php?error=You only can fill one field.");
    exit();
}
?>
*You must tick left table if you want to update* <br>
    <br><button id="button" type="submit" name="but_update" class="btn btn-success">Update Selected Records</button><br>
</form>
        <a href="search.php">
        <br><button id="button" onclick="">Back</button><br>
        </a>  


<!---------------------------------------------------------------------------------------------------------------------------------------->        
<script type="text/javascript">
            $(document).ready(function(){
                // Check/Uncheck ALl
                $('#checkAll').change(function(){
                    if($(this).is(':checked')){
                        $('input[name="update[]"]').prop('checked',true);
                    }else{
                        $('input[name="update[]"]').each(function(){
                            $(this).prop('checked',false);
                        }); 
                    }
                });
                // Checkbox click
                $('input[name="update[]"]').click(function(){
                    var total_checkboxes = $('input[name="update[]"]').length;
                    var total_checkboxes_checked = $('input[name="update[]"]:checked').length;
 
                    if(total_checkboxes_checked == total_checkboxes){
                        $('#checkAll').prop('checked',true);
                    }else{
                        $('#checkAll').prop('checked',false);
                    }
                });
            });
        </script>
<!-------------------------------------------------------------------------------------------------------------------------->

</body>
</html>
