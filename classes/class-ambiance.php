<?php
class Genesis_Dambuster_Ambiance extends Genesis_Dambuster_Template {


	function remove_primary_navigation() {
		remove_action('genesis_header', 'genesis_do_nav', 12  );		
      parent::remove_primary_navigation();
	}
	
	function remove_secondary_navigation() {
		remove_action( 'genesis_footer', 'genesis_do_subnav', 7 );
      parent::remove_secondary_navigation();
	}

   function remove_header() {
      remove_action( 'genesis_before_content_sidebar_wrap', 'ambiance_welcome_message' );
      parent::remove_header();
   }

   function remove_entry_header() {
      remove_action( 'genesis_entry_header', 'genesis_do_post_image', 3 );
      remove_action( 'genesis_entry_header', 'ambiance_gravatar', 7 );
      parent::remove_entry_header();      
   }

}