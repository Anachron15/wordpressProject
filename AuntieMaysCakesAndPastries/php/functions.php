<?php
/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

	register_sidebar( array(
		'name' => 'Calendar',
		'id' => 'sidebar-1',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="rounded">',
		'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'arphabet_widgets_init' );

 function cake_status_function(){
 ?>
	 <br>
					<div class="container-fluid">
						<div class="rows">
							<div class="clearfix col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<div class="panel panel-primary">
									<div class="panel panel-heading"><h2>Cakes and Pastries Status</h2></div>
										<div class="panel panel-content">
											<form class="form" method="POST" action="#">
												<table class="table">
													<tr>
														<td>Status Name:</td>
														<td>
															<div class="form-group has-error">
																<div class="form-group has-error">
																	 <input type="text" class="form-control" name="status_name" required/>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td></td>
														<td>
															<input type="submit" class="btn btn-primary" value="Submit"/>
														</td>
													</tr>
												</table>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
						
 <?php
 }
 
   function add_category_function(){
   ?>
	<div class="container-fluid">
		<div class="rows">
			<div class="clearfix col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<br>
				<div class="panel panel-primary">
					<div class="panel panel-heading"><h2>Add Categories</h2></div>
							
							<div class="panel panel-content">
								 <form method="POST" action="#">			
									<table class="table"> 
										<tr>
											<td>Category Name:</td>
											<td>
												<div class="form-group has-error">
													<div class="form-group has-error">
														 <input type="text" class="form-control" name="category_name" required/>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>Category Status</td>
											<td>
												
													<?php 
														$v=mysql_query("SELECT DISTINCT(status_name) FROM wp_cake_status");
														echo "<select cmbCatStatus>";
														echo "<option></option>";
														while($fetch=mysql_fetch_array($v)){
															echo "<option>".$fetch['status_name']."</option>";
														}
															echo "</select>";
													?>
												
											</td>
										</tr>
										<tr>
											<td></td>
											<td>
												
												<input type="submit" class="btn btn-danger" name="btnCategory" required/>
													
											</td>
										</tr>
									</table>								
								</form>
							
					</div>
							
				</div>
			</div>
		</div>
	</div>
   
   <?php
   
   }
 function add_subcategory_function(){
 ?>
	<div class="container-fluid">
				<div class="rows">
					<div class="clearfix col-xs-12 col-sm-12 col-md-12 col-lg-12">
										<br>
						<div class="panel panel-primary">
							<div class="panel panel-heading"><h2>Add Sub-Categories</h2></div>
							<div class="panel panel-content">
								 <form method="POST" action="#">			
									<table class="table"> 
										<tr>
											<td>Sub-Category Name:</td>
											<td>
												<div class="form-group has-error">
													<div class="form-group has-error">
														 <input type="text" class="form-control" name="subCategory_name" required/>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>Sub-Category Status</td>
											<td>
												<?php 
														$v=mysql_query("SELECT DISTINCT(status_name) FROM wp_cake_status");
														echo "<select name='cmbSubStatus'>";
														echo "<option></option>";
														while($fetch=mysql_fetch_array($v)){
															echo "<option>".$fetch['status_name']."</option>";
														}
															echo "</select>";
													?>
											</td>
										</tr>
										<tr>
											<td></td>
											<td>
												
												<input type="submit" class="btn btn-danger" name="btnSubCategory" required/>
													
											</td>
										</tr>
									</table>								
								</form>
							
							</div>
							
						</div>
					</div>
					</div>
					</div>
 <?php
 }
 
  function update_announcement_function(){
  ?>
  <div class="container-fluid">
					<div class="rows">
					<div class="clearfix col-xs-12 col-sm-12 col-md-12 col-lg-12">
										<br>
						<div class="panel panel-primary">
							<div class="panel panel-heading"><h2>Update Announcement</h2></div>
							<div class="panel panel-content">
								 <form method="POST" action="#">			
									<table class="table"> 
										<tr>
											<td>Announcement Title:</td>
											<td>
												<div class="form-group has-error">
													<div class="form-group has-error">
														 <input type="text" class="form-control" name="announcement_title" required/>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>Announcement Description:</td>
											<td>
												<div class="form-group has-error">
													<div class="form-group has-error">
														<textarea cols="70" rows="5" name="announcement_description"></textarea>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td></td>
											<td>
												
												<input type="submit" class="btn btn-danger" name="btnUpdateAnnouncement" required/>
													
											</td>
										</tr>
									</table>								
								</form>
							
							</div>
							
						</div>
					</div>
					</div>
					</div>
  <?php
  }
  function update_about_function(){
  ?>
									<div class="container-fluid">
					<div class="rows">
					<div class="clearfix col-xs-12 col-sm-12 col-md-12 col-lg-12">
										<br>
						<div class="panel panel-primary">
							<div class="panel panel-heading"><h2>About Us</h2></div>
							<div class="panel panel-content">
								 <form method="POST" action="#">			
									<table class="table"> 
										<tr>
											<td>About Title:</td>
											<td>
												<div class="form-group has-error">
													<div class="form-group has-error">
														 <input type="text" class="form-control" name="about_title" required/>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>About Description:</td>
											<td>
												<div class="form-group has-error">
													<div class="form-group has-error">
														<textarea cols="70" rows="5" name="about_description"></textarea>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td></td>
											<td>
												
												<input type="submit" class="btn btn-danger" name="btnUpdateAbout" required/>
													
											</td>
										</tr>
									</table>								
								</form>
							
							</div>
							
						</div>
					</div>
					</div>
					</div>
  <?php
  }
  
   function update_contact_function(){
   ?>
		<div class="container-fluid">
					<div class="rows">
					<div class="clearfix col-xs-12 col-sm-12 col-md-12 col-lg-12">
										<br>
						<div class="panel panel-primary">
							<div class="panel panel-heading"><h2>Contact Information</h2></div>
							<div class="panel panel-content">
								 <form method="POST" action="#">			
									<table class="table"> 
										<tr>
											<td>Address:</td>
											<td>
												<div class="form-group has-error">
													<div class="form-group has-error">
														 <input type="text" class="form-control" name="about_title" required/>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>Telephone Number:</td>
											<td>
												<div class="form-group has-error">
													<div class="form-group has-error">
														 <input type="text" class="form-control" name="about_title" required/>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>Mobile Number:</td>
											<td>
												<div class="form-group has-error">
													<div class="form-group has-error">
														 <input type="text" class="form-control" name="about_title" required/>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>Contact Person:</td>
											<td>
												<div class="form-group has-error">
													<div class="form-group has-error">
														 <input type="text" class="form-control" name="about_title" required/>
													</div>
												</div>
											</td>
										</tr>										
										<tr>
											<td></td>
											<td>
												
												<input type="submit" class="btn btn-danger" name="Add Contact" required/>
													
											</td>
										</tr>
									</table>								
								</form>
							
							</div>
							
						</div>
					</div>
					</div>
					</div>
   <?php
   }
   
    function add_product_function(){
	?>
	<div class="container-fluid">
		<div class="rows">
			<div class="clearfix col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<br>
		 <div class="panel panel-primary"> 	
			<div class="panel panel-heading" id="informer"><h2><font color="white">Panel Add Product</font><h2>
				<br>
				<input type="button" class="btn btn-success" value="View Product List"/>
				<input type="text" placeholder="Search..." class="input input-danger pull-right"/>
				
				<br>
			</div>
			
			<div class="panel panel-content">			
			 <form method="POST" action="#" enctype="multipart/form-data">			
				 <table class="table"> 
				 <th>Product</th>
				 <th>Fields</th>
				
					<tr>
						 <td> Image:</td>
						<td>
							<div class="form-group has-error">
							  <input type="file" class="form-control" name="myFile"  required>
							</div>
						</td>
					</tr>
					<tr>
						 <td> Name</td>					
						<td>
							<div class="form-group has-success">
								<div class="form-group has-error">
								   <input type="text" class="form-control"  name="productName" required/>
								</div>
							</div>
						</td>
					</tr>
					<tr>
						 <td> Description:</td>
						<td>						
							<textarea name="productDescription"></textarea>
						</td>
					</tr>
					<tr>
						 <td> Quantity:</td>
						<td>
							<div class="form-group has-success">
								<div class="form-group has-error">
								   <input type="text" class="form-control" name="productQuantity" required>
								</div>
							</div>
						</td>
					</tr>
					
					<tr>
						 <td> Price:</td>
						<td>
							<div class="form-group has-success">
								<div class="form-group has-error">
								   <input type="text" class="form-control" name="productPrice" required/>
								</div>
							</div>
						</td>
					</tr>
					<tr>
						 <td> Status:</td>
						<td>
							<div class="form-group has-success">
							  <input type="text" class="form-control" name="productStatus"required/>
							</div>
						</td>
					</tr>
					<tr>
						 <td> Category:</td>
						<td>
							<div class="form-group has-success">
							  <input type="text" class="form-control" name="productCategory" required/>
							</div>
						</td>
					</tr>
					<tr>
						 <td> Sub-Category:</td>
						<td>
							<div class="form-group has-success">
							  <input type="text" class="form-control" name="productSubCategory" required/>
							</div>
						</td>
					</tr>
					
					<tr>
						 <td></td>
						<td><input type="submit" class="btn btn-danger" size="50" value="Add Product"></td>
					</tr>
				 </table>
			 </form>
		</div>
	</div>
</div>
</div>
</div>	
	<?php
	}
?>
