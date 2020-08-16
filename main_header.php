<!DOCTYPE html>
<html lang="en">
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
                    <a class="nav-link nav_items_text pl-4" href="grid.php">Products</a>
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
        <nav class="navbar navbar-expand-lg navbar-light desktop_navbar mt-5">

            <a class="navbar-brand my-auto mx-auto" href="main.php">
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
                <a class="menu_item px-2" href="grid.php">
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

    
</body>
</html>