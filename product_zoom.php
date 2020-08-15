
<?php 
    require('products.php');

    if (isset($_POST['submit'])){
        // echo 'adding to cart';
        
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script
        src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous"></script>
    <script type="text/javascript">
    
        $(document).ready(function(){
            var button = $("button");
            button.on("click", function() {
                alert('button clicked');
                button.text('new text');
            });
                        
        });
</script>
</head>
<body>
    <?php 
        
        

        $id = $_GET['product_id'];
        
        $query = mysqli_query($con,"select * from test_products where id='$id'");

        $check = mysqli_num_rows($query);

        $row = mysqli_fetch_assoc($query);
        
        $name = $row['name'];
        $image = $row['image'];

        // If product id exists
        if ($check==1){
        }
        else{
            header('location:products.php');
        }
        

    ?>
    
        <h1 style='font-size:50px'><?php echo $name ?></h1>
        <img src='<?php echo $image ?>' width='400px'>

        <form method='post' action="product_zoom.php?action=add&product_id=<?php echo $id?>">
            <label for='qty'></label>
            <select name='qty'>  
                <option value='1'>1</option>
                <option value='2'>2</option>
                <option value='3'>3</option>
                <option value='4'>4</option>
                <option value='5'>5</option>
            </select>
            <button class='but' name='submit'>Add to cart</button>
        </form>

</body>
</html>