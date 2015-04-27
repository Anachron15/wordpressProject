<?php ?>
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