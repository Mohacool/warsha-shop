<?php 
    session_start();

    $db_user = "root";
    $db_pass = "";
    $db_name = "warsha_shop";
    $db_host = "localhost";

    $show_squares=true;

    $con = new mysqli($db_host,$db_user,$db_pass,$db_name);

    if (isset($_GET['product_id']) && $_GET['product_id']!=''){
        $show_squares=false;
    }

    header('Cache-Control: no cache'); //disable validation of form by the browser
    


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <style>
        .square{
            height:300px;
            width:300px;
            border:2px solid black;
            display:inline-block;
            align:center;
        }

        .text-example { 
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }
        .badge{
            border-radius:100%;
            padding:10px;
            background-color:cyan;
            margin-top:15px;

        }
        .button{
            text-decoration:none;
            color:black;
        }

        
    </style>
    
    <nav style="background-color:grey;height:50px">

        <h1>
            Products Below
        </h1>
        <a class="cart" href="#" style="float:right;margin-top:-40px;">
            <img src="https://img.icons8.com/cotton/64/000000/shopping-cart--v2.png" width="28px" style="cursor:pointer;">
            <span class="badge">1</span>
        </a>
    </nav>
    <?php 

        $query = mysqli_query($con,"select * from test_products order by name asc");
        if ($show_squares==true){

            while($row=mysqli_fetch_assoc($query)){
                $name = $row['name'];
                $image = $row['image'];
                $id = $row['id'];
                
                echo "
                <div class='square'>
                    <h3>$name</h3>
                    <img src='$image' width='100px'>
                    <form method='post' action='products.php'>
                        <button> <a class='button' href='product_zoom.php?product_id=$id'>View </a></button>
                    </form>
                    
                </div>
                
                ";
            }

        }
       

    ?>
    <!-- <div class="square">
        <h3 class="text-example">Shoe</h3>
        <img src="https://images-na.ssl-images-amazon.com/images/I/61utX8kBDlL._UL1100_.jpg" width="100px">
        <button>Add to cart</button>
    </div>
    <div class="square">
        <h3 class="text-example">Potato Bag</h3>
        <img src="https://www.totavo.com/1051-large/white-potatoes-bag-of-10lb.jpg" width="100px">
        <button>Add to cart</button>


    </div> -->

    
    
    
    
</body>
</html>