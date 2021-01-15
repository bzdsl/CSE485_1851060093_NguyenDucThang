<?php  include"sidebar.php" ?>;

    <!-- Right Column -->
    <div class="w3-twothird">
    <?php
        if(isset($_POST['addskill'])){
        $name  = $_POST['sname'];
        $slevel= $_POST['slevel'];
        $sql="INSERT INTO `skills` (`id`, `skillname`, `skilllevel`) VALUES (NULL, '$name', '$slevel')";
        if(mysqli_query($conn,$sql)){
            echo "<script>window.location='index.php'</script>";
        }
        }
        //print_r($_POST);
    ?>

      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Add skills</h2>
        <form action="" method="post">
            <div class="form-group">
                <label>Skill name</label>
                <input name="sname" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label>Skill level</label>
                <input name="slevel" type="number" class="form-control">
            </div>
            
            <button name="addskill" class="btn btn-primary">Add</button>
            </form>
      

    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>

<footer class="w3-container w3-teal w3-center w3-margin-top">
  <p>Find me on social media.</p>
  <i class="fa fa-facebook-official w3-hover-opacity"></i>
  <i class="fa fa-instagram w3-hover-opacity"></i>
  <i class="fa fa-snapchat w3-hover-opacity"></i>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
  <p>@SWAGGERFLOW</p>
</footer>

</body>
</html>