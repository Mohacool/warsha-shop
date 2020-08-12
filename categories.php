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
            
            $update_status = "update categories set status='$status' where id='$id'";
            mysqli_query($con,$update_status);
        }
    }

    $sql = "select * from categories order by categories desc";
    $query = mysqli_query($con,$sql);

?>
<div class="content pb-0">
   <div class="orders">
      <div class="row">
         <div class="col-xl-12">
            <div class="card">
               <div class="card-body">
                  <h4 class="box-title">Categories </h4>
               </div>
               <div class="card-body--">
                  <div class="table-stats order-table ov-h">
                     <table class="table">
                        <thead>
                           <tr>
                              <th class="serial">#</th>
                              <th>ID</th>
                              <th>Category</th>
                              <th>Status</th>
                              
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
                              <td><?php echo $row['categories'] ?></td>
                              <td>
                                  <?php 

                                    // If status==1 its ACTIVATE
                                    if($row['status']==0){
                                        echo "<a href='?type=status&operation=deactivate&id=".$row['id']."'>
                                        Activate</a>";
                                    }
                                    else{
                                        echo "<a href='?type=status&operation=activate&id=".$row['id']."'>
                                        Deactivate</a>";
                                    }

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
