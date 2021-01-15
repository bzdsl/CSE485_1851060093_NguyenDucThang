<?php include('connect.php') ?>;
<!DOCTYPE html>
<html>
  <title>CV Resume</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/> -->
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <style>
  html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
  </style>
<body class="light-grey">

<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">
  
    <!-- Left Column -->
    <div class="w3-third">
    
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <img src="https://upload.wikimedia.org/wikipedia/commons/c/c9/Avatar_2_Placeholder_DumDarac.png" style="width:100%" alt="Avatar">
        </div>
        <div class="w3-container">
          <p><i class="fa fa-user fa-fw w3-margin-right w3-large w3-text-teal"></i>Nguyen Duc Thang</p>
          <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i>Music producer</p>
          <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i>Hanoi, VN</p>
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i>1851060093@e.tlu.edu.vn
          <a href="contact.php"><i class="fa fa-paper-plane fa-fw w3-right w3-text-teal"></i></a>
          </p>
          <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i>+84 984251822</p>
          <hr>
        <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Skills</b> <a href="add.php"><i class="fa fa-plus fa-fw w3-right w3-text-teal"></i></a></p>
        
      <!-- SKILLS -->
        <?php
        $sql="SELECT * FROM `skills`";
        $result = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_assoc($result)) {
        ?>
              
                <p> <?php echo $row["skillname"]; ?>
                  <a href="edit.php?edit=<?php echo $row["id"]; ?>">
                    <i class="fa fa-edit fa-fw w3-right w3-text-teal"></i>  
                  </a>
                  <a href="index.php?del=<?php echo $row["id"]; ?>">
                    <i class="fa fa-trash fa-fw w3-right w3-text-teal"></i>
                  </a>

                </p>
                <div class="w3-light-grey w3-round-xlarge w3-small">
                    <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?php echo $row["skilllevel"]; ?>%">
                    <?php echo $row["skilllevel"]; ?>%</div>
                </div>
        <?php }

           if(isset($_GET['del']))
           {
           $del_id=$_GET['del'];
           $sql="DELETE FROM `skills` WHERE id=$del_id";
           if(mysqli_query($conn,$sql)){
             echo "<script>window.location='index.php'</script>";
               } 
           }
        ?>
            <!-- <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Skills</b></p>
              <p>Adobe Photoshop</p>
              <div class="w3-light-grey w3-round-xlarge w3-small">
                <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:90%">90%</div>
              </div>
              <p>Photography</p>
              <div class="w3-light-grey w3-round-xlarge w3-small">
                <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:80%">
                  <div class="w3-center w3-text-white">80%</div>
                </div>
              </div>
              <p>Illustrator</p>
              <div class="w3-light-grey w3-round-xlarge w3-small">
                <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:75%">75%</div>
              </div>
              <p>Media</p>
              <div class="w3-light-grey w3-round-xlarge w3-small">
                <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:50%">50%</div>
              </div>
              <br> -->


      <!-- LANGUAGES --> 
                <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Languages</b></p>
          <p>English</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:60%"></div>
          </div>
          <p>Chinese</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:5%"></div>
          </div>
          <br>
        </div>
      </div><br>

    <!-- End Left Column -->
    </div>

   