<!doctype html>
<html>
<head>
<title>Update Multiple Selected Records PHP Mysql and Jquery Ajax</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body >

<!-------------------------------------------------------------------------------------------------------------------------->
<?php 
include "db_conn2.php";
    $alert= "";
        if(isset($_POST['but_update'])){
            if(isset($_POST['update'])){
                foreach($_POST['update'] as $updateid){
 
                    $noic = $_POST['noic_'.$updateid];
                    $status = $_POST['status_'.$updateid];
 
                    if($noic !='' && $status != '' ){
                        $updateUser = "UPDATE parcels SET 
                            noic='".$noic."',status='".$status."'
                        WHERE id=".$updateid;
                        mysqli_query($conn2,$updateUser);
                    }
                     
                }
                $alert = '<div class="alert alert-success" role="alert">Records successfully updated</div>';
            }
        }
 ?>
<!-------------------------------------------------------------------------------------------------------------------------->
        <div class='container'>
            <h1>Update Multiple Selected Records using PHP Mysql and Jquery Ajax</h1>
            <form method='post' action=''><?php echo $alert; ?>
                <p><input type='submit' value='Update Selected Records' class="btn btn-success" name='but_update'></p>
                <table class="table table-bordered">
                    <tr style='background: whitesmoke;'>
                        <!-- Check/Uncheck All-->
                        <th><input type='checkbox' id='checkAll' > Check</th>
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
                    $query = "SELECT * FROM parcels order by name asc limit 10";
                    $result = mysqli_query($conn2,$query);
 
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
                            <td><input type='checkbox' name='update[]' value='<?= $id ?>' ></td>
                            <td><?= $name ?></td>
                            <td><?= $tracking ?></td>
                            <td><?= $name ?></td>
                            <td><?= $no ?></td>
                            <td><?= $courier ?></td>
                            <td><?= $category ?></td>
                            <td><?= $color ?></td>
                            <td><?= $other ?></td>
                            <td><?= $time ?></td>

                            <td><input type='text' name='noic_<?= $id ?>' value='<?= $noic ?>' ></td>
                            <td>
                            <select name='status_<?= $id ?>' id="category">
                                <option value="<?= $status ?>"><?= $status ?></option>
                                <option value="Already Pickup">Already Pickup</option>
                                <option value="Missing">Missing</option>
                            </select>
                            </td>

                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </form>
        </div>
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