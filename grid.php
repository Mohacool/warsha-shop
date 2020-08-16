<?php 
require('config/connection.php');
$media_url = 'media/products/';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
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
    
    <div class="pt-5 container-fluid" style="padding-right:50px;padding-left:50px;">

        <br class="pt-5"><br class="pt-5"> <!-- spacing -->

        <div class="row">

            <div class="container-fluid" style="padding-right:50px;padding-left:50px;">

                <div class="row">
                    
                    <!-- <div class="col-lg-4 col-sm-6 d-flex px-2 py-2"><img class="d-block mx-auto" src="square.jpg" width="100%"></div>
                    <div class="col-lg-4 col-sm-6 d-flex px-2 py-2"><img class="d-block mx-auto" src="square.jpg" width="100%"></div>
                    <div class="col-lg-4 col-sm-6 d-flex px-2 py-2"><img class="d-block mx-auto" src="square.jpg" width="100%"></div>
                    <div class="col-lg-4 col-sm-6 d-flex px-2 py-2"><img class="d-block mx-auto" src="square.jpg" width="100%"></div> -->

                    <?php 
                    

                        $query = mysqli_query($con,"select * from product");

                        while($row=mysqli_fetch_assoc($query)){
                            if ($row['image'] != ''){
                                $img_url = $media_url. '' .$row['image'];
                                echo "
                                    <div class='col-lg-4 col-sm-6 d-flex px-2 py-2'><img class='d-block mx-auto' src='$img_url' width='100%'></div>
                                    
                                
                                    ";
                            }
                            
                        }
 

                    ?>
                </div>

        
                
            </div>
           
           
    </div>

    
    <br class="pt-5"><br class="pt-5"> <!-- spacing -->

    <!-- FOOTER -->
    <?php include('main_footer.php') ?>
    
</body>
</html>