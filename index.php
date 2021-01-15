<?php include"sidebar.php" ?>

    <!-- Right Column -->
    <div class="w3-twothird">
    
      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Work Experience</h2>
        <?php
        $sql="SELECT * FROM `experience`";
        $result = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_assoc($result)) {
        ?>
        <div class="w3-container">
          <h5 class="w3-opacity"><b><?php echo $row['profile_name'] ?></b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $row['duration'] ?> 
            <?php if($row['status']){
              echo '- <span class="w3-tag w3-teal w3-round">Current</span>';
            } ?>

          </h6>
          <p><?php echo $row['description'] ?></p>
          <hr>
        </div>

        <?php } ?>
      </div>

      <div class="w3-container w3-card w3-white">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Education</h2>
        <?php
        $sql="SELECT * FROM `education`";
        $result = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_assoc($result)) {
        ?>
        <div class="w3-container">
          <h5 class="w3-opacity"><b><?php echo $row['schoolname'] ?></b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $row['duration'] ?>
          <?php if($row['status']){
              echo '- <span class="w3-tag w3-teal w3-round">Current</span>';
            } ?>
          </h6>
          <p><?php echo $row['degree'] ?></p>
          <hr>
        </div>
        <?php } ?>
    </div>
    
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>

<footer class="w3-container w3-teal w3-center w3-margin-top">
  <p>Find me on social media.</p>
  <i class="fa fa-facebook-official w3-hover-opacity"></i>
  <i class="fa fa-instagram w3-hover-opacity"></i>
  <i class="fa fa-github w3-hover-opacity"> </i>
  <i class="fa fa-soundcloud w3-hover-opacity"></i>
  <i class="fa fa-spotify w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
  <p>@SWAGGERFLOW</p>
</footer>

</body>
</html>