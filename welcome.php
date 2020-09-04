<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="google-site-verification" content="1EhQCuXpaWE6fIeYlFO9HDkVy6vLysFiT5AVHtjRUTc" />

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warsha Shop</title>

    <!-- Import Bootstrap,Jquery... -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <script
        src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

    <!-- Sweet Alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>



    <!-- Import my style sheet -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- HEADER -->
    <?php 
        include('main_header.php');
    ?>
    
    
    <div class="container-fluid px-0 pad">

        <!-- IMAGE 1 -->
        <div class="jumbotron paral paralsec">
       
        </div>

        <!-- MIDDLE SECTION (VISIT OUR SHOP) -->
        <div class="card mycard px-3">

            <div class="row align-items-center divider">

                <div class="col">

                    <h4 class="text-center pb-4">MORE PRODUCTS ADDED CONSTANTLY</h4>
                    <p class="text-center paragraph pb-2">Our featured products are produced in small batches made with care and may run out of stock quickly.</p>
                    
                    <a href="grid.php">
                    
                    <button class="btn btn-primary d-block mx-auto visit">VISIT OUR SHOP</button>
                    </a>

                </div>  
              
            </div>


        </div>
        

        <!-- IMAGE 2 -->
        <div class="jumbotron paral paralsec2">
            <br class="pb-5"><br class="pb-5"><br class="pb-5">
            <p class="lead pt-5 pb-0 mb-0" style="font-size:10px;letter-spacing:2px;">OUR MISSION</p>
            <h1 class="display-3 pt-0 mt-0 parallax_head local">PROVIDE LOCAL, HAND-MADE PRODUCTS</h1>
           
        </div>
        
        <!-- FOOTER -->
        <?php 
            include('main_footer.php');
        ?>
    
    </div>
    
   
    
    
</body>
</html>