<?php include 'sidebar.php'; ?> 
<?php include 'sendmail.php'; ?> 


<style>
    .social-media{
        height:20vh;
        display:flex;
        justify-content:center;
        align-items:center;
    }
    a{
        height:100px;
        width:80px;
        align-items:center;
        margin:30px;
    }

    a i{
    transition: all 0.3s linear;
    }
    a i:hover{
        transform: scale(1.4);
    }
    .fa-instagram{
        
    color: #8f1370; 
    }
    

    .fa-facebook-official{
        color:#333d92
    }
    .fa-github{
        color:#000
    }
    .fa-soundcloud{
        color:#ed4a0d
    }
</style>

<div class="container">

    
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6 pb-5">
                <?php echo $alert; ?>
                    <!--Form with header-->

                    <form action="" method="post">
                    <div class="card-header p-0">
                                <div class="bg-info text-white text-center py-2">
                                    <h3><i class="fa fa-envelope"></i> Contact me!</h3>
                                    <p class="m-0">                </p>
                                </div>
                            </div>
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
        
        <div class="row justify-content-center">
            <div class="social-media">
                <a href="https://www.facebook.com/goldenboy.ndt/" target="_blank">
                    <i class="fa fa-2x fa-facebook-official"></i>
                </a>

                <a href="https://www.instagram.com/bzd.sl/" target="_blank">
                    <i class="fa fa-2x fa-instagram"></i>
                </a>

                <a href="https://soundcloud.com/swagger-flow" target="_blank">
                    <i class="fa fa-2x fa-soundcloud"></i>
                </a>

                <a href="https://github.com/bzdsl" target="_blank">
                    <i class="fa fa-2x fa-github"> </i>
                </a>
                
            </div>
        </div>    
</div>


