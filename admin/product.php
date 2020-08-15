<?php 
    require('top.inc.php');

    if(isset($_GET['type']) && $_GET['type']!=''){
        
        $type=mysqli_real_escape_string($con, $_GET['type']);
        if ($type=='status'){
            $operation=mysqli_real_escape_string($con, $_GET['operation']);
            $id=mysqli_real_escape_string($con, $_GET['id']);
            if ($operation=='activate'){
                $status='0';
            }
            else{
                $status='1';
            }
            
            $update_status = "update product set status='$status' where id='$id'";
            mysqli_query($con,$update_status);
        }

        if ($type=='delete'){
            $id=mysqli_real_escape_string($con, $_GET['id']);
            $delete_sql = "delete from product where id='$id'";
            mysqli_query($con,$delete_sql);
        }
    }

    $sql = "select product.*,categories.categories from product,categories where product.categories_id = categories.id order by product.id desc";
    $query = mysqli_query($con,$sql);
   

?>
<div class="content pb-0">
   <div class="orders">
      <div class="row">
         <div class="col-xl-12">
            <div class="card">
               <div class="card-body">
                  <h4 class="box-title">Products </h4>
                  <h4 class="box-link">
                      <a href="manage_products.php">Add Product</a>
                  </h4>
               </div>
               <div class="card-body--">
                  <div class="table-stats order-table ov-h">
                     <table class="table">
                        <thead>
                           <tr>
                              <th class="serial">#</th>
                              <th>ID</th>
                              <th>Category</th>
                              <th>Name</th>
                              <th>Image</th>
                              <th>Price</th>
                              <th>Quantity</th>
                              <th></th>
                              
                           </tr>
                        </thead>
                        <tbody>
                           <?php 
                                $i=1;
                                while($row=mysqli_fetch_assoc($query)){
                           ?>
                           <tr>
                              <td class="serial"><?php echo $i ?></td>
                              <td><?php echo $row['id'] ?></td>
                              <td><?php echo $row['categories_id'] ?></td>
                              <td><?php echo $row['name'] ?></td>
                              <td>
                                  <img src="../media/products/<?php echo $row['image'] ?>">
                              </td>
                              <td><?php echo $row['price'] ?></td>
                              <td><?php echo $row['qty'] ?></td>
                              <td>
                                  <?php 

                                    // If status==1 its ACTIVATE
                                    if($row['status']==0){
                                        echo "
                                        <span class='badge badge-complete'>
                                            <a href='?type=status&operation=deactivate&id=".$row['id']."'>
                                            Activate</a>&nbsp;
                                        </span>
                                        ";
                                    }
                                    else{
                                        echo "
                                        <span class='badge badge-pending'>
                                            <a href='?type=status&operation=activate&id=".$row['id']."'>
                                            Deactivate</a>&nbsp;
                                        </span>
                                        ";
                                    }

                                    // Edit Button

                                    // Removed until edit is fixed
                                    // echo "
                                    // <span class='badge badge-edit'>
                                    //     <a href='manage_products.php?id=".$row['id']."'>
                                    //     Edit</a>
                                    // </span>
                                    // ";
                                    
                                    // Delete Button
                                    echo "
                                    <span class='badge badge-delete'>
                                        <a href='?type=delete&id=".$row['id']."'>
                                        Delete</a>
                                     </span>   
                                    ";
                                    
                                    

                                   ?>
                            
                              </td>
                              
                           </tr>
                            <?php } ?>
                           
                           
                           
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php 
require('footer.inc.php');
?>
