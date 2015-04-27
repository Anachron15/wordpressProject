 <?php
if(!isset($_SESSION)){ session_start();}
?>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/jui/jq/jquery-ui.css">		
 <?php 
	wp_enqueue_script("jquery");
?>
<script  src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.js"></script>
 
 <?php 
         /* 
         Plugin Name: Auntie Mays Cakes and Pastries 
         Plugin URI: http://auntiemay.com 
         Description: This is a responsive plugin which is ssociated with twitter bootstrap, and jquery. 
         Version: 4.0 
         Author: Bethoven Acha 
         */ 

	register_activation_hook( __FILE__, 'acha_install' ); 

           function acha_install() { 
                //This function checks the compatibility of versions
				  global $wp_version; 

                if ( version_compare( $wp_version, '4.0', '<' ) ) { 
                   wp_die( 'This plugin requires WordPress version 4.0 or higher.' ); 
                }else{
					//create database and tables here...
				}
           } 
		
	
	 class prowp_widget extends WP_Widget { 
				function prowp_widget() { 
					$widget_ops = array( 
                     'classname'      => 'prowp_widget', 
                     'description' => 'This is a calendar from jquery.' ); 
					$this->WP_Widget( 'prowp_widget', 'My Widget Name', $widget_ops ); 

				} 
				 function form( $instance ) 
				 { 
					$defaults = array( 
						 'title' => 'Bio Data', 
						 'name'  => 'Bethoven', 
						 'bio'     => '' ); 
						 
							$instance = wp_parse_args( (array) $instance, $defaults ); 
							$title = $instance['title']; 
							$name = $instance['name']; 
							$bio = $instance['bio']; 
						?> 
					
							 <p>Title: 
								  <input class="clearfix col-xs-12 col-sm-12 col-md-12 col-lg-12"
									   name="<?php echo $this->get_field_name( 'title' ); ?>" 
									   type="text" value="<?php echo esc_attr( $title ); ?>" /></p> 
							 <p>Name: 
								  <input class="clearfix col-xs-12 col-sm-12 col-md-12 col-lg-12"
									   name="<?php echo $this->get_field_name( 'name' ); ?>" 
									   type="text" value="<?php echo esc_attr( $name ); ?>" /></p> 
							 <p>Bio: 
								  <textarea class="clearfix col-xs-12 col-sm-12 col-md-12 col-lg-12" 
									   name="<?php echo $this->get_field_name( 'bio' ); ?>" > 
									   <?php echo esc_textarea( $bio ); ?></textarea></p> 
							
						<?php 
				} 
				
				function update( $new_instance, $old_instance ) { 

				   $instance = $old_instance; 
				   $instance['title'] = sanitize_text_field( $new_instance['title'] ); 
				   $instance['name'] = sanitize_text_field( $new_instance['name'] ); 
				   $instance['bio'] = sanitize_text_field( $new_instance['bio'] ); 

				   return $instance; 

			  } 
			  
				function widget( $args, $instance ) { 
					   extract( $args ); 

					   echo $before_widget; 

					   $title = apply_filters( 'widget_title', $instance['title'] ); 
					   $name = ( empty( $instance['name'] ) ) ? '&nbsp;' : $instance['name']; 
					   $bio = ( empty( $instance['bio'] ) ) ? '&nbsp;' : $instance['bio']; 

					   if ( !empty( $title ) ) { echo $before_title . esc_html( $title ) 
							. $after_title; }; 
					   echo '<p>Name: ' . esc_html( $name ) . '</p>'; 
					   echo '<p>Bio: ' . esc_html( $bio ) . '</p>'; 

					   echo $after_widget; 

				  } 
			  
			}
			
			//This function initializes the widget by calling prowp_register_widget function
			add_action( 'widgets_init', 'prowp_register_widgets' ); 

			 function prowp_register_widgets() { 
				  register_widget( 'prowp_widget' ); //The parameter is the class name
			 } 		 
			  add_action( 'wp_dashboard_setup', 'prowp_add_dashboard_widget' ); 

           // call function to create our dashboard widget 
           function prowp_add_dashboard_widget() { 

                wp_add_dashboard_widget( 'prowp_dashboard_widget', 
                     'Bethoven', 'prowp_create_dashboard_widget' ); 

            } 

           // function to display our dashboard widget content 
           function prowp_create_dashboard_widget() { 
				$ad=plugins_url('/AuntieMaysCakesAndPastries/assets/images/headerLogo.jpg');
                echo '
				<div clearfix col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<p><input type="image" class="img-responsive" src="'.$ad.'"/></p>
				</div>
				'; 

            } 

	/*
	Popular Filter Hooks 

   More than 1,500 different hooks are available in WordPress, which is a bit overwhelming at i rst. 
   Fortunately, a handful of them are used much more often than the rest. This section explores some 
   of the more commonly used hooks in WordPress. 

   Some of the more common Filter hooks are: 

      ➤     the_content — Applied to the content of the post or page before displaying 

      ➤     the_content_rss — Applied to the content of the post or page for RSS inclusion 

      ➤     the_title — Applied to the post or page title before displaying 

      ➤     comment_text — Applied to the comment text before displaying 

      ➤     wp_title — Applied to the page <title> before displaying 

      ➤     the_permalink — Applied to the permalink URL 
	  
	  /////////////////////////////////////////////////////
	  Realizing the full power of the WordPress plugin system means 
      also using action hooks to i re your own code in response to events within the WordPress core. 
	
	  Popular Action Hooks 

      Some of the more common Action hooks are: 

        ➤     publish_post — Triggered when a new post is published. 

        ➤      create_category — Triggered when a new category is created. 

        ➤      switch_theme — Triggered when you switch themes. 

        ➤      admin_head — Triggered in the <head> section of the admin dashboard. 

        ➤     wp_head — Triggered in the <head> section of your theme. 

        ➤     wp_footer — Triggered in the footer section of your theme usually directly before 

              the </body> tag. 

        ➤      init — Triggered after WordPress has i nished loading, but before any headers are sent. 

               Good place to intercept $_GET and $_POST HTML requests. 
			   
		 ➤     admin_init: Same as init but only runs on admin dashboard pages. 

		  ➤     user_register: Triggered when a new user is created. 

		  ➤     comment_post: Triggered when a new comment is created.
		  
		  Hooks are probably one of the most under-documented features in WordPress. It can be a real 
      challenge i nding the correct hooks to use for the job. The i rst resource to use is always the 
      Codex. Here you can i nd the Filter Reference (http://codex.wordpress.org/Plugin_API/ 
      Filter_Reference) and Action Reference (http://codex.wordpress.org/Plugin_API/Action_ 
      Reference) sections helpful in tracking down appropriate hooks. 
	  
	  Another highly recommended reference is the Plugin Directory (http://wordpress.org/extend/ 
      plugins/) on WordPress.org. Sometimes the best way to i gure something out is to see how other 
      developers accomplished a similar task. Find a plugin in the directory that is similar in functionality 
      to what you want to build. Most likely, the plugin author will have already dug up the correct hooks 
      for WordPress that you will be using. It never hurts to learn by example, and published plugins are 
      the perfect examples in this case!
	  
	  Saving Plugin Options
	  
	  add_option() and update_option()== <?php update_option( 'prowp_display_mode', 'Fright Night' ); ?> 

		  <?php echo get_option( 'prowp_display_mode' ); ?> The only required is the name of the option or the SETTINGS  
		  <?php delete_option( 'prowp_display_mode' ); ?> 
	  
	   Options in WordPress are not reserved for just plugins. Themes can also create options to store 
    specii c theme data. Many of the themes available today offer a settings page, enabling you to 
    customize the theme through settings rather than code. 
	
	Saving options in array so as not to clutter the database
		<?php 
			  $prowp_options_arr = array( 
				  'prowp_display_mode'            =>  'Fright Night', 
				  'prowp_default_browser'         =>  'Chrome', 
				  'prowp_favorite_book'           =>  'Professional WordPress', 
				  ); 

			  update_option( 'prowp_plugin_options', $prowp_options_arr ); 
		?> 
	
	To retrieve the array of options, you use the same get_option() function as before: 

           <?php 
           $prowp_options_arr = get_option( 'prowp_plugin_options' ); 

           $prowp_display_mode = $prowp_options_arr['prowp_display_mode']; 
           $prowp_default_browser = $prowp_options_arr['prowp_default_browser']; 
           $prowp_favorite_book = $prowp_options_arr['prowp_favorite_book']; 
           ?> 
	Creating a Menu and Submenus 

	<?php add_menu_page( page_title, menu_title, capability, 
           menu_slug, function, icon_url, position ); ?> 
		   
		   ➤     page_title — Text used for the HTML title (between <title> tags). 

        ➤     menu_title — Text used for the menu name in the Dashboard. 

        ➤     capability — Minimum user capability required to see menu. 

        ➤     menu_slug — Unique slug name for your menu. 

        ➤     function — Displays page content for the menu settings page. 

        ➤     icon_url — Path to custom icon for menu (default: images/generic.png). 

        ➤     position — The position in the menu order the menu should appear. By default, the menu 

              will appear at the bottom of the menu structure. 
			  
		 add_submenu_page( parent, page_title, menu_title, capability, 
							menu_slug,[function] ); 


	*/		
         // create custom plugin settings menu 
         add_action( 'admin_menu', 'product_create_menu' ); 

         function product_create_menu() { 

              //create new top-level menu 
			  //first param: PAGE TITLE
			  //2. MENU TITLE
			  //3. manage_options so that only admin can view this menu 
			  //4. MENU SLUG
			  //5.custom menu function name,function that runs after clicking the menu
              add_menu_page( 'Auntie Mays Cakes and Pastries', 'Manage Products', 
								'manage_options', 'product_slug', 'add_product_function', 
								plugins_url( '/images/auntieMayLogo.png', __FILE__ )
							); 

              //create two sub-menus: settings and support
				//PARAM
				//1. product slug of add menu page()
				//2. Page Title
				//3. Menu Title 
				//4. for admin only
				//5. unique menu slug for submenu
				
            
              add_submenu_page( 'product_slug', 'Auntie Mays Cakes and Pastries', 
								'Category', 'manage_options', 'product_category', 'add_category_function'
							);
				 
			   add_submenu_page( 'product_slug', 'Auntie Mays Cakes and Pastries', 
								'Sub-Category', 'manage_options', 'product_subcategory', 'add_subcategory_function'
							);
				add_submenu_page( 'product_slug', 'Auntie Mays Cakes and Pastries', 
								'Announcement', 'manage_options', 'announcement', 'update_announcement_function'
							);
				add_submenu_page( 'product_slug', 'Auntie Mays Cakes and Pastries', 
								'About', 'manage_options', 'about', 'update_about_function'
							);
				add_submenu_page( 'product_slug', 'Auntie Mays Cakes and Pastries', 
								'Contact', 'manage_options', 'contact', 'update_contact_function'
							);
				add_submenu_page( 'product_slug', 'Auntie Mays Cakes and Pastries', 
								'Status', 'manage_options', 'status', 'cake_status_function'
							);			  
					require_once 'php/functions.php';		  
         } 
				
		 /*
		 Adding to an Existing Menu
		 
		 <?php 
            add_action( 'admin_menu', 'prowp_create_settings_submenu' ); 

            function prowp_create_settings_submenu() { 
                 add_options_page( 'Halloween Settings Page', 'Halloween Settings', 
                 'manage_options', 'halloween_settings_menu', 'prowp_settings_page' ); 
            } 
            ?> 

      WordPress features multiple functions to make adding submenus extremely easy. To add your 
      Halloween Settings submenu you use the add_options_page() function. The i rst parameter is the 
      page title followed by the submenu display name. Like your other menus, you set the capability to 
      manage_options, so the menu is viewable only by administrators. Next, you set the unique menu 
      handle to halloween_settings_menu. Finally, you call your custom prowp_settings_page() 
      function to build your options page. The preceding example adds your custom submenu item 
      Halloween Settings at the bottom of the settings menu. 
	  
		➤     add_dashboard_page() — Adds submenu items to the Dashboard menu 

         ➤     add_posts_page() — Adds submenu items to the Posts menu 

         ➤     add_media_page() — Adds a submenu item to the Media menu 

         ➤     add_links_page() — Adds a submenu item to the Links menu 

         ➤     add_pages_page() — Adds a submenu item to the Pages menu 

         ➤     add_comments_page() — Adds a submenu item to the Comments menu 

         ➤     add_plugins_page() — Adds a submenu item to the Plugins menu 

         ➤     add_theme_page() — Adds a submenu item to the Appearance menu 

         ➤     add_users_page() — Adds a submenu item to the Users page (or Proi le based on role) 

         ➤     add_management_page() — Adds a submenu item to the Tools menu 

         ➤     add_options_page() — Adds a submenu item to the Settings menu 
		 
		 
		 */
	
global $wpdb;
$filename="";
$filetmp="";
function filterAll($var){
	$v=mysql_real_escape_string(htmlentities(strip_tags(stripslashes($var))));
	return $v;
}

function insertProduct(){
			global $wpdb;
			if(isset($_FILES['myFile']) or isset($_POST['productName']) or
				isset($_POST['productDescription']) or isset($_POST['productQuantity']) or
				 isset($_POST['productQuantity']) or
				isset($_POST['productPrice']) or isset($_POST['productStatus']) or
				isset($_POST['productCategory']) or isset($_POST['productSubCategory']) or
				isset($_POST['productImage'])
			){
					
					$name=filterAll($_POST['productName']);
					$cat=filterAll($_POST['productCategory']);
					$subcat=filterAll($_POST['productSubCategory']);
					$desc=filterAll($_POST['productDescription']);
					$price=filterAll($_POST['productPrice']);
					$stat=filterAll($_POST['productStatus']);
					$quan=filterAll($_POST['productQuantity']); 
					$qual=filterAll($_POST['productQuality']);
					
					$filename=($_FILES['myFile']['name']);
					$filetmp=$_FILES['myFile']['tmp_name'];
				
					if($price!=""){
					$ad='images/'.$filename;
					move_uploaded_file($filetmp,$ad);
						$v= $wpdb->query("INSERT INTO wp_product VALUES(
										'',
										'".$name."',
										'".$desc."',
										'".$quan."',
										'".$price."',
										'".$stat."',
										'".$cat."',
										'".$subcat."',
										'".$filename."'
										
										)");
						
						if($v){
					?>
						<script>
							alert('Product Added.');
						</script>
					<?php
						}
						
					}
					else{
						echo "Upload Failed";
					}
					

			}
		
}

insertProduct();	


 ?> 
 <script>
 
	function clickme(){
		
	}
	$(document).ready(function(){
		$('#btnAddProduct').click(clickme);
	});
 </script>

        
		   
		   
      
