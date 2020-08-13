<?php 
    require('top.inc.php');

    // Initialize Variables -------
    $name = '';
    $categores_id='';
    $price='';
    $qty='';
    $short_desc='';
    $image='';
    $description='';
    
    $image_required = 'required'; // Require image
    $msg = '';

    // --------------------------- 

    // If EDIT is selected 
    if (isset($_GET['id']) && $_GET['id']!=''){

        $image_required = ''; // if you're editing no need to re-import image

        
        $id = mysqli_real_escape_string($con, $_GET['id']); // Get id from ?id=

        // Run query and check number of rows
        $sql = "select * from product where id='$id'";
        $query = mysqli_query($con,$sql);
        $check = mysqli_num_rows($query);

        // If id exists (product exists)
        if ($check>0){
            $row = mysqli_fetch_assoc($query);
            $categories_id=$row['categories_id'];
            $name=$row['name'];
            $image=$row['image'];
            $description=$row['description'];
            $price=$row['price'];
            $qty=$row['qty'];
        }
        // If id doesn't exist (product exists)
        else{
            header('location:product.php');
            die();
        }

        
    }

    // CLICK SUBMIT BUTTON
    if (isset($_POST['submit'])){


        $categories_id = mysqli_real_escape_string($con, $_POST['categories_id']);
        $name = mysqli_real_escape_string($con, $_POST['name']);
        $price = mysqli_real_escape_string($con, $_POST['price']);
        $qty = mysqli_real_escape_string($con, $_POST['qty']);
        $image = mysqli_real_escape_string($con, $_POST['image']);
        $description = mysqli_real_escape_string($con, $_POST['description']);

        // Check to see if category already exists
        $sql = "select * from product where name='$name'";

        $query = mysqli_query($con,$sql);
        $check = mysqli_num_rows($query);
        
        if ($check>0){
            if (isset($_GET['id']) && $_GET['id']!=''){
                $getData=mysqli_fetch_assoc($query);
                if ($id=$getData['id']){

                }
                else{
                    $msg="Product already exists";
                }
            }
            else{
                $msg="Product already exists";

            }
            
        }
        
        if ($msg=''){

            if (isset($_GET['id']) && $_GET['id']!=''){
                // --------- EDIT ----------

                if ($_FILES['image']['name']!=''){
                    $image=rand(111111111,9999999999).'_'.$_FILES['image']['name'];
                    move_uploaded_file($_FILES['image']['tmp_name'],'media/products/'.$image);

                    $update_sql = "update product set categories_id='$categories_id',name='$name'
                    image='$image',qty='$qty',price='$price',description='$description'
                    where id ='$id'";
                }
                
                
                mysqli_query($con,$update_sql);

            }
            else{
                // --------- INSERT ----------
                $image=rand(111111111,9999999999).'_'.$_FILES['image']['name'];
                move_uploaded_file($_FILES['image']['tmp_name'],'media/products/'.$image);

                $sql = "insert into product (categories_id,name,image,qty,price,description) 
                values ('$categories_id','$name','$image','$qty','$price','$description')";
                mysqli_query($con,$sql);
            }
            header('location:product.php');
            die();


        }
        

    }
?>
<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Product</strong><small> Form</small></div>
                        
                            <form method="post" enctype="multipart/form-data">
                                <div class="card-body card-block">

                                    <!-- Category Drop Down Menu -->
                                    <div class="form-group"><label for="categories" class="form-control-label">Product Category</label>
                                        <select class="form-control" name="categories_id">
                                            <option>Select Category</option>
                                            <?php 
                                                $query = mysqli_query($con,"select id,categories from categories order by categories asc");
                                                while($row=mysqli_fetch_assoc($query)){

                                                    if ($row['id']==$categories_id){
                                                        echo "
                                                        <option selected value=".$row['id'].">".
                                                            $row['categories'].
                                                        "</option>";

                                                    }
                                                    else{
                                                        echo "
                                                        <option value=".$row['id'].">".
                                                            $row['categories'].
                                                        "</option>";

                                                    }

                                                    
                                                }
                                            ?>
                                        </select>
                                    </div>
                                    
                                    <!-- Product Name -->
                                    <div class="form-group"><label for="product" class="form-control-label">Product Name</label>
                                        <input name="name" type="text" placeholder="Enter product name" class="form-control" required
                                        value="<?php echo $name ?>">
                                    </div>
                                           
                                    <!-- Price -->
                                    <div class="form-group"><label for="product" class="form-control-label">Price</label>
                                        <input name="price" type="text" placeholder="Enter product price" class="form-control" required
                                        value="<?php echo $price ?>">
                                    </div>

                                    <!-- Quantity -->
                                    <div class="form-group"><label for="product" class="form-control-label">Quantity</label>
                                        <input name="qty" type="text" placeholder="Enter quantity" class="form-control" required
                                        value="<?php echo $qty ?>">
                                    </div>
                                    
                                    <!-- Image -->
                                    <div class="form-group"><label for="product" class="form-control-label">Image</label>
                                        <input name="image" type="file" class="form-control" <?php echo $image_required ?>>
                                    </div>

                                    <!-- Description -->
                                    <div class="form-group"><label for="product" class="form-control-label">Description</label>
                                        <textarea name="description" class="form-control" required><?php echo $description ?></textarea>
                                    </div>
                                    
                                    <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block">
                                    <span id="payment-button-amount">Submit</span>
                                    </button>
                                    <div class="field-error">
                                        <?php echo $msg; ?>
                                    </div>
                                </div>
                            </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
<?php 
require('footer.inc.php');
?>
