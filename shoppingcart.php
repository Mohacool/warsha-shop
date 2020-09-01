<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
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
    <style>
        /* .show{
            border:1px solid blue;
        } */
        .description{
            font-size:13.5px;
            color:gray;
        }
        p a{
            text-decoration:none;
            color: inherit;
        }
        p a:hover{
            color: inherit;
        }
    </style>
<body>
    <!-- HEADER -->
    <?php include('main_header.php') ?>

    <div class="container show">
        
        <h3 class="px-4 pb-3 pt-5" style="font-size:24px;white-space: nowrap;">SHOPPING CART</h3>
        
        <p class="px-4 description">You have nothing in your shopping cart. <a href="grid.php">Continue Shopping</a></p>

    </div>

    <!-- footer -->
    <?php include('main_footer.php') ?>


    
</body>
</html>