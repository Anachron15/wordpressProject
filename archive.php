 <h1 class="page-title"> 
	<?php if ( is_day() ) : ?> 
	<?php printf( __( 'Daily Archives: %s', 'twentyeleven' ), '<span>' . 
	  get_the_date() . '</span>' ); ?> 
	<?php elseif ( is_month() ) : ?> 
	<?php printf( __( 'Monthly Archives: %s', 'twentyeleven' ), '<span>' . 
	  get_the_date( _x( 'F Y', 'monthly archives date format', 
	  'twentyeleven' ) ) . '</span>' ); ?> 
	<?php elseif ( is_year() ) : ?> 
	<?php printf( __( 'Yearly Archives: %s', 'twentyeleven' ), 
	  '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 
	  'twentyeleven' ) ) . '</span>' ); ?> 
	<?php else : ?> 
	<?php _e( 'Blog Archives', 'twentyeleven' ); ?> 
	<?php endif; ?> 
</h1> 