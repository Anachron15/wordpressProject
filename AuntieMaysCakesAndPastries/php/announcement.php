<?php ?>
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