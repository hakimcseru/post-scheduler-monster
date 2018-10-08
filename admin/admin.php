<?php
/**
 * PSM - Post Scheduler Monster
 * 
 * @package 
 * @author Nazrul Islam Nayan
 */


class optionAdminPanel{
	var $user_level = 'manage_options';
	
	function optionAdminPanel() {

		add_action( 'admin_menu', array(&$this, 'add_menu') );
		add_action( 'admin_head', array(&$this, 'add_jax') );

		// //add_option('LOL','one');
		// add_option( 'LOL', 'one', '', 'yes' );

		

	}




	function add_jax(){
		echo '<script type="text/javascript"> var ajax_url="'.admin_url("admin-ajax.php").'"';
		echo '</script>';
	}


	function add_menu()  {
		add_menu_page( __( 'Post Scheduler Monster'), __( 'Post Scheduler Monster' ), $this->user_level, pluginsFOLDER, array (&$this, 'show_menus'), plugin_dir_url( __FILE__ ).'images/psm-logo.png',80 );
	}
	

	function show_menus() {
  		switch ($_GET['page']){
				
			case "cal" :
				include_once ( dirname (__FILE__) . '/editorial-calendar/edcal.php' );
				break;
					
			default :
				include_once ( dirname (__FILE__) . '/psm-welcome.php' );
				welcome();
				break;
		}
	}


	
}





?>