<?php global $wpdb;
		$myrows = $wpdb->get_results( "SELECT * FROM wp_product" );
?>
 <?php 
	function displaySidebar($id){
			if ( is_active_sidebar( ''.$id.'' ) ) : ?>			
				<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">				
					<?php dynamic_sidebar( ''.$id.'' ); ?>
				</div><!-- #primary-sidebar -->
					
		<?php endif;
		}
		?>
 
 
  <div class="container-fluid" style="background-color:#fff;background-image:url('<?php bloginfo('template_directory') ?> /assets/images/background.jpg')">
	<div class="row">
		<div class="clearfix col-xs-12 col-sm-12 col-md-8 col-lg-8" style="margin-top:50px;padding-left:30px;padding-right:30px;">
			  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="border:2px solid #990033;">
				
				<div class="carousel-inner">			  
					<?php 
						$num=$wpdb->query("SELECT COUNT(*) FROM wp_product ");
						
						
						echo '<ol class="carousel-indicators">';
							for($ii=0;$ii<$num;$ii++){
								if($ii==0){
									echo '<li data-target="#carousel-example-generic" data-slide-to="'.$ii.'" class="active"></li>';
								}else{
									echo '<li data-target="#carousel-example-generic" data-slide-to="'.$ii.'" class=""></li>';
								}
							}
						echo '</ol>';
						$i=0;
						foreach($myrows as $rows){
							$ad=admin_url('images/'.$rows->product_image);
							if($i==0){
								echo ' <div class="item active">';
											echo '<img alt="First slide" src="'.$ad.'"
											style="width:100%;height:300px;">
									</div>';
							}else{
								echo '
										 <div class="item">
											<img alt="Cake Image" src="'.$ad.'"
											style="width:100%;height:300px;"
											>
										  </div>
									';
							}
							$i++;
						}
					?>
					
				 
				  
				</div>
				<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
				  <span class="glyphicon glyphicon-chevron-left"></span>
				</a>
				<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
				  <span class="glyphicon glyphicon-chevron-right"></span>
				</a>
			</div>
		
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" style="margin-top:50px;">				
				<embed src="/assets/videos/basecamp.mp4" style="width:100%;height:300px;"></embed>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" style="margin-top:50px;">
				<?php echo do_shortcode('[wpgmza id="1"]') ?>
			</div>					
			<?php
				foreach($myrows as $row){
					$add=admin_url('images/'.$row->product_image);
						echo '<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" style="margin-top:50px;">
									<img class="img-responsive" src="'.$add.'" style="width:100%;height:300px;border:2px solid #990033;"/>
							  </div>';
				}
			?>
			<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">			
				<ul class="pagination">				
						<li class="disabled"><a href="#">&laquo;</a></li>
					<?php	foreach($myrows as $row){
								echo '	<li class="active"><a href="#">'.$row->product_id.' <span class="sr-only">(current)</span></a></li>';
							}
					?>
				</ul>	
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<?php displaySidebar('woo'); ?>
			</div>
		</div>				  