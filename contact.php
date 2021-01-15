<?php include 'sidebar.php'; ?> 
<?php include 'sendmail.php'; ?> 

<div class="container">

    <h2 class="text-center">Contac Form</h2>
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6 pb-5">

                <?php echo $alert; ?>
                    <!--Form with header-->

                    <form action="" method="post">
                        
                            <div class="card-body p-3">

                                <!--Body-->
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                        </div>
                                        <input type="text" class="form-control"  name="name" placeholder="Name" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-file text-info"></i></div>
                                        </div>
                                        <input type="email" class="form-control"  name="email" placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                        </div>
                                        <input type="text" class="form-control"  name="subject" placeholder="Subject" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
                                        </div>
                                        <textarea class="form-control" name="message" placeholder="Message" required></textarea>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <input type="submit" name="submit" value="Send" class="btn btn-info btn-block rounded-0 py-2">
                                </div>
                            </div>

                        </div>
                    </form>
                    <!--Form with header-->
                </div>
            </div>
            <!-- <script type="text/javascript">
                if(window.history.replaceState){
                window.history.replaceState(null, null, window.location.href);
                }
            </script> -->
</div>

