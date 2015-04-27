 <header class="page-header"> 
              <h1 class="page-title">
			  <?php 
				printf( 
						__( 'Category Archives: %s', 'twentyeleven' ), 
							'<span>' . 
							single_cat_title( '', false )
							. '</span>' 
					 ); 
				?> 
			</h1> 
			<?php 
				$category_description = category_description(); 
				if ( ! empty( $category_description ) ) 
						echo apply_filters( 'category_archive_meta', 
									'<div class="category-archive-meta">' 
									. $category_description . '</div>'                           
										  ); 
			?> 
</header>