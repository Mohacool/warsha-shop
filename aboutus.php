<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Warsha Shop</title>

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

    <style>
    /* .show{
        border:1px solid blue;
    } */
    .description{
        font-size:13.5px;
        color:gray;
    }
    </style>
    <div class="container show pb-5">
        <div class="row show pt-5">
            <div class="col-md-3 col-sm-12 show"></div>
            <div class="col-md-6 show padme">
                <h3 class="" style="font-size:24px;white-space: nowrap;">ABOUT US</h3>
                <p class="pt-4 description">Warsha mean’s workshop in Arabic.<br><br>
                    We are a small online store that specializes in cool handmade products and great gifts. 🎁 <br><br>

                    Spread the warmth! A percentage of every candle purchase is donated to Keep Toronto Warm to help keep homeless Torontians stay warm during our harsh winters!<br><br>

                    It’s all small batch, hand made products so there are limited quantities.<br><br>

                    Shipping is available, as well as Free pickup at Jimmy Simpson park.<br><br>

                    #shoplocal #handmade #gifts 
                </p>
                <br>
                <a href="grid.php">
                    
                    <button class="btn btn-primary d-block ml-0 visit">LEARN MORE ABOUT OUR PRODUCTS</button>
                </a>

            </div>
            <div class="col-md-3 show"></div>

        </div>
    
    </div>

    <!-- FOOTER -->
    <?php include('main_footer.php') ?>
    
</body>
</html>