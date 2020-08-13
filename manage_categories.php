<?php 
    require('top.inc.php');
    $categories = '';
    $msg = '';
    // If EDIT is selected 
    if (isset($_GET['id']) && $_GET['id']!=''){
        $id = mysqli_real_escape_string($con, $_GET['id']);
        $sql = "select * from categories where id='$id'";

        $query = mysqli_query($con,$sql);
        $check = mysqli_num_rows($query);
        if ($check>0){
            $row = mysqli_fetch_assoc($query);
            $categories=$row['categories'];
        }
        // If id doesn't exist (rows found=0)
        else{
            header('location:categories.php');
            die();
        }

        
    }

    // CLICK SUBMIT BUTTON
    if (isset($_POST['submit'])){

        $categories = mysqli_real_escape_string($con, $_POST['categories']);

        // Check to see if category already exists
        $sql = "select * from categories where categories='$categories'";

        $query = mysqli_query($con,$sql);
        $check = mysqli_num_rows($query);
        if ($check>0){
            $msg="Category already exists";
        }
        else{
            // If there's an ?id in the link it means we are EDIT so we UPDATE table
            if (isset($_GET['id']) && $_GET['id']!=''){
                $sql = "update categories set categories='$categories' where id ='$id'";
                mysqli_query($con,$sql);
            }
            // normal insert ('ADD category')
            else{
                $sql = "insert into categories (categories, status) 
                values ('$categories','1')";
                mysqli_query($con,$sql);
            }

            header('location:categories.php');
            die();

        }


        
    }
?>
<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Categories</strong><small> Form</small></div>
                            <form method="post">
                                <div class="card-body card-block">
                                    <div class="form-group"><label for="categories" class="form-control-label">Insert new category</label>
                                        <input name="categories" type="text" id="categories" placeholder="Enter category name" class="form-control" required
                                        value="<?php echo $categories ?>">
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
