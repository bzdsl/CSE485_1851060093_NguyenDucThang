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
      <div class="w3-container w3-card w3-white w3-margin-top">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-headphones fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Interests</h2>
            <div class="w3-container">
            <?php
        $sql="SELECT * FROM `interests`";
        $result = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_assoc($result)) {
        ?>
        <div class="w3-container">
          <h5 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><b><?php echo $row['usually'] ?></b></h5>
          <h6 class="w3-w3-opacity"><?php echo $row['hobby'] ?></h6>
        </div>
        <?php } ?>
            </div>
          </div>

      

    
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>

<?php include_once('footer.php'); ?>

</body>
</html>