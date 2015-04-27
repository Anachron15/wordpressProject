<?php ?>
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