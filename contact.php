<?php 
require('config/connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>

    <!-- Import Bootstrap,Jquery... -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <script
        src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="style.css">

    
</head>
<body>
    <!-- HEADER -->
    <?php include('main_header.php') ?>

    <div class="container form_container show">
        <br>
        <div class="row pt-5 pb-2">
            <h3 class=" mx-auto" style="font-size:24px !important;">CONTACT</h3>
        </div>

        <form action="contactform.php" method="post">

            <span class="pb-1" style="font-size:13px;color:gray;padding-left:1px;margin-bottom:10px !important">Name *</span>
            <div class="row pb-2 px-0">
                <div class="col">
                    <input name="firstname" type="text" class="form-control" required>
                    <span class="" style="font-size:12px;color:gray;margin-bottom:-20px;">First Name</span>
                </div>
                <div class="col">
                    <input name="lastname" type="text" class="form-control" required>
                    <span class="" style="font-size:12px;color:gray;margin-bottom:-20px;">Last Name</span>
                </div>
            </div>

            <span class="pb-1" style="font-size:13px;color:gray;">Email Address *</span>
            <div class="form-group pb-2">
                <input name="mail" type="email" class="form-control myform" id="exampleFormControlInput1" required>
            </div>
            <div class="form-group pb-2">
                <span class="pb-1" style="font-size:13px;color:gray;">Subject *</span>
                <input name="subject" type="text" class="form-control" required>

            </div>
           
            <span class="pb-1" style="font-size:13px;color:gray;">Message *</span>
            <div class="form-group">
                <textarea name="message" class="form-control myform" id="exampleFormControlTextarea1" rows="3" required></textarea>
            </div>

            <div class="row">
            <button class='mx-auto btn btn-primary d-block visit my_submit' type='submit' name='submit'>
                <p class="my-auto sub" style="font-family:Source Sans Pro regular;font-size:17px;color:black;">SUBMIT</p>
            </button>

            </div>

        </form>
    </div>

    <!-- FOOTER -->
    <?php include('main_footer.php') ?>
    
</body>
</html>