			<div class="col-xs-6">
			<?php include("CONNECTTODATABASE.php"); ?>
						<?php
					
						if(isset($_POST['submit'])){
							
							$cat_title=$_POST['cat_title'];
							$cat_url=$_POST['cat_url'];
							if($cat_title==""||empty($cat_title)){
								echo "This field should not be empty";
							}else{
							
								$query="INSERT INTO head_categories(cat_name,cat_addrss)";
							$query.="VALUES ('{$cat_title}','{$cat_url}')"	;
                             $create_category_query=mysqli_query($connection,$query);
                             
                              if(!$create_category_query){
								  die('Query failed'.mysqli_error($connection));
							  }							 
                             							  
							}
							
						}
						
						
						
						
						?>
						
						
						
						
						
						
						<form action="" method="post">
						<div class="form-group">
						<label for="cat_title">Category Title</label>
						<input type="text" class="form-control" name="cat_title">
						</div>
						
						<div class="form-group">
						<label for="cat_title">Category Url</label>
						<input type="text" class="form-control" name="cat_url">
						</div>
						<div class="form-group">
						<input class="btn btn-primary" type="submit" name="submit" value="Add Category">
						</div>
						</form>
                      </div>
					  
					  <div class="col-xs-6">
					  <table class="table table-bordered table-hover">
					  <thead>
					  <tr>
					  <th>Category Name</th>
					  <th>Category Url</th>
					  </tr>
					  </thead>
					  <?php
					
				$query="SELECT * FROM head_categories";
				$select_all_category=mysqli_query($connection,$query);
				
				while($row=mysqli_fetch_assoc($select_all_category)){
					$cat_id=$row['cat_id'];
				$cat_name=$row['cat_name'];
				$cat_address=$row['cat_addrss'];
				
				
					  
					  
					  ?>
					  
					  <tbody>
					  <tr>
					  <td><?php echo $cat_name ?></td>
                      <td><?php echo $cat_address ?></td>	
                       <td><a href="admin.php?delete=<?php echo $cat_id ?>">Delete</a></td>					  
					  </tr>
					  </tbody>
					 
				<?php } ?>
				<?php
			
				if(isset($_GET['delete'])){
					$the_cat_id=$_GET['delete'];
				   $query1="DELETE FROM head_categories WHERE cat_id={$the_cat_id}";
				   $send_query=mysqli_query($connection,$query1);
				 header("Location:admin.php");  
				}
				
				
				?>
				 </table>
					  </div>