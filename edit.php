<?php include('sidebar.php') ?>

<?php if(isset($_GET['edit'])){
 $edit_id=$_GET['edit'];
} ?>
      
    <!-- Right Column -->
    <div class="w3-twothird">
    <?php
         if(isset($_POST['updateskill'])){
         $name  = $_POST['sname'];
         $slevel= $_POST['slevel'];
         $sql="UPDATE `skills` SET `skillname` = '$name', `skilllevel` = '$slevel' WHERE `skills`.`id` = $edit_id";
        if(mysqli_query($conn,$sql)){
            echo "<script>window.location='index.php'</script>";
        }
        }
        $sql="SELECT * FROM `skills` WHERE id=$edit_id";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);       
    ?>
        <div class = "container-fluid">

      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Update skills</h2>

        <form action="" method="post">
            <div class="form-group">
                <label>Skill name</label>
                <input name="sname" type="text" class="form-control" value="<?php echo $row['skillname']; ?>">
            </div>
            <div class="form-group">
                <label>Skill level</label>
                <input name="slevel" type="number" class="form-control" value="<?php echo $row['skilllevel']; ?>">
            </div>
            
            <button name="updateskill" class="btn btn-primary">Update!</button>
            </form>
      </div>
    <!-- End Right Column -->
    </div>   
  <!-- End Grid -->
  </div>
  <!-- End Page Container -->
</div>
<?php include_once('footer.php'); ?>
</body>
</html>