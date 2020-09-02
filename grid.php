<?php 
require('config/connection.php');
$media_url = 'media/products/';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Products</title>
    
    <!-- Import Bootstrap,Jquery... -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <script
        src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="grid_style.css">
</head>
<body>
    


    <!-- HEADER -->
    <?php include('main_header.php') ?>
    
    <div class="container-fluid show">
        
        <br class="pt-5"><br class="pt-5">
        <div class="row px-5 pt-5">

             <?php 
                    

                $query = mysqli_query($con,"select * from product");

                while($row=mysqli_fetch_assoc($query)){
                    if ($row['image'] != ''){
                        $img_url = $media_url. '' .$row['image'];
                        $item_name = $row['name'];
                        $id = $row['id'];

                        if(strpos($item_name,'<br>')!== false){
                            // echo "not found new line";
                        }
                        else{
                            // echo "added newline";
                            $item_name .= "<br><br>";
                        }

                        echo "
                        <div class='col-lg-4 col-sm-6 d-flex pb-4 px-3' style='align-items:center'>

                            <a href='product_page?id=$id'>
                            <div class='col nopadding nomargin'>
        
                                <div class='over'>
                                    <div class='row nopadding nomargin h-100'>
                                        <div class='w-100 d-flex align-items-center'>
                                            <p class='myp nomargin nopadding'>$item_name</p>
                                        </div>
                                    </div>
                                </div>
        
                                <img class='d-block nomargin nopadding try' src='$img_url' width='100%'>
                                <div class='row'>
                                    <p class='mymobilep mx-auto pt-2'>$item_name</p>
                                </div>
        
                            </div>
                            </a>
        
                        </div>
                            
                        
                            ";
                    }
                    
                }
 

            ?> 
                    

                
              
                
               
        </div>

        

    </div>

    

    


    <!-- FOOTER -->
    <?php include('main_footer.php') ?>
    
</body>
</html>