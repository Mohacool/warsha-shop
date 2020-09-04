<?php 
require('config/connection.php');

$img_location = "media/products/";

function bold_ingredients($desc){
    $start = stripos($desc,'ingredients');
    $ingre_to_end = substr($desc,$start);

    $first_half = substr($desc,0,$start);
    
    $ingredients= trim(explode("\n", $ingre_to_end)[0]);
    $ingredients_part = "<b>" . $ingredients . "</b>";
    $second_half = substr($desc,$start+strlen($ingredients));
    
    return $first_half . "" . $ingredients_part . " " . $second_half;
}

function add_decimals($price){
    if (strpos($price,".")!==false){
        return $price;
    }
    return $price . ".00";
    
}



$ktw_message = "<u>Send the gift of warmth.</u>

15% percentage of every candle sold (forever) goes to Keep Toronto Warm, an organization that helps provide relief for homeless Torontonias during our harsh winters.  ";

// Find the id of the product 
if (isset($_GET['id']) && $_GET['id'] != ''){

    $id = $_GET['id'];
    $exists_query = mysqli_query($con, "select * from product where id='$id'");
    $check = mysqli_num_rows($exists_query);

    //check that it corresponds to existing product
    if ($check==1){
        $row = mysqli_fetch_assoc($exists_query);
        $price = add_decimals($row['price']);
        $description = $row['description'];
        $name = $row['name'];
        $description = bold_ingredients($description);
        $image = $row['image'];
        $extra_images = explode(",",$row['extra_images']);
        if(empty($extra_images)){
            echo "empty";
        }
        else{
            echo "not";
        }
        print_r($extra_images);
   
        
    }
    else{
        header('location:grid');
    }  
}
else{
    header('location:grid');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo str_replace("<br>","",ucwords(strtolower($name))) ?></title>
    
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

    <div class="container-fluid show">

        <div class="row h-100 top_padding"></div>
        
        <div class="row">
            <div class="col-sm-12 show h-100">
                <h3 class="px-2 py-0 mobile_name"><?php echo $name ?></h3>
            </div>
            <div class="col-sm-12 col-md-7 order-md-3 show img_holder">
                <img class="px-0 pb-3" src="<?php echo $img_location . "" . $image; ?>" alt="" width="100%">
                <?php 
                    
                    foreach ( $extra_images as $extra_img ){
                    $img_url = $img_location . "" . $extra_img;
                    echo  "<img class='px-0 py-3' src='$img_url' width='100%'>";
                    } 
                ?>

            </div>
            

        

            <div class="col-sm-12 col-md-5 order-md-2 textbox show">

                <h3 class="py-0 desktop_name"><?php echo $name ?></h3>


                <p class='price pt-3'><?php echo '$' . $price . ' CAD' ?></p>

                <!-- <p class="ktw"><?php echo $ktw_message ?></p> -->


                <p style='white-space: pre-wrap;'><?php echo $description; ?></p>
                <br>
                <button class="btn btn-primary d-block visit add_to_cart pt-5 ml-1">
                    <p style="font-family:Source Sans Pro regular;font-size:12px;color:gray;"><br>SOLD OUT</p>
                </button>
                <br><br>
                

                
            </div>
        
        </div>
        
    </div>

    <!-- HEADER -->
    <?php include('main_footer.php') ?>
    
    
</body>
</html>