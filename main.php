<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My main page</title>

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

    <!-- Mobile Nav -->
    <nav class="navbar navbar-expand-lg navbar-light mobile_navbar sticky-top">

        <a class="navbar-brand" href="#">
            <img src="logo.png" width="85px">
        </a>

        <button class="navbar-toggler mybutton" type="button" data-toggle="collapse" data-target="#navbarResponsive" style="float:right;">
            o
        </button>

        <div class="collapse navbar-collapse pt-4" id="navbarResponsive" >
            <ul class="navbar-nav">
                <li class="nav-item" >
                    <a class="nav-link nav_items_text pl-4" href="#">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav_items_text pl-4" href="#">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav_items_text pl-4" href="#">Contact</a>
                </li>
                <li class="nav-item">
                    
                    <a class="nav-link nav_items_text ml-1 pl-4 mt-3" href="#" style="float:left;">
                        <img class="social_icons" src="https://img.icons8.com/android/24/000000/facebook.png" width="18px">
                    </a>
                    
                    <a class="nav-link nav_items_text pl-3 mt-3" href="#" style="float:left;">
                        <img class="social_icons" src="https://img.icons8.com/metro/26/000000/instagram-new.png" width="20px">
                    </a>
                    
                </li>
                

            </ul>
        </div>



    </nav>
    
    <!-- Desktop Nav -->
    <div>
        <nav class="navbar navbar-expand-lg navbar-light desktop_navbar mt-5" >

            <a class="navbar-brand my-auto mx-auto" href="#">
                <img src="logo.png" width="340px">
            </a>
            
            
            
        </nav>
        
        <a class="cart" href="#" style="float:right;">
            <img src="https://img.icons8.com/cotton/64/000000/shopping-cart--v2.png" width="28px" style="cursor:pointer;">
            <span class="badge badge-secondary cart_badge">1</span>
        </a>

        <div class="container-fluid desktop_items">

            <div class="row mx-auto d-flex justify-content-center" style="width:450px;">
                
                <a class="menu_item px-2" href="#">
                    <h6 >ABOUT US</h6>
                </a>
                <a class="menu_item px-2" href="#">
                    <h6 >PRODUCTS</h6>
                </a>
                <a class="menu_item px-2" href="#">
                    <h6 >CONTACT</h6>
                </a>
                <a class="menu_item px-2" href="#">
                    <h6 >FOLLOW</h6>
                </a>
                
                
                
               
               
                
            </div>

        </div>
    </div>
    
    
    <div class="container-fluid px-0 pad">

        <div class="row px-0">
            <div class="col">
                <div class="img"></div>
            </div>
        </div>

        <div class="card mycard px-3">

            <div class="row align-items-center divider">

                <div class="col">
                    <h4 class="text-center">MORE PRODUCTS ADDED CONSTANTLY</h4>
                    <p class="text-center px-5">Our featured products are produced in small batches made with care and may run out of stock quickly.</p>
                    <button class="btn btn-primary d-block mx-auto">VISIT OUR SHOP</button>

                </div>
                
                

                
                    
              
            </div>


        </div>
        <div class="row px-0">
            <div class="col">
                <div class="img2"></div>
            </div>
        </div>
        
           
            
        
        

        

        
        
    
    </div>
    
   
    
    
</body>
</html>