<?php require( get_template_directory()  . '/compliter_function/script_import.php');

if ( !class_exists( 'ReduxFramework' ) && file_exists( dirname( __FILE__ ) . '/fossn_option/framework.php' ) ) {
    require_once( dirname( __FILE__ ) . '/fossn_option/framework.php' );
}
if ( !isset( $redux_demo ) && file_exists( dirname( __FILE__ ) . '/fossn_option/admin_plag/sample-config.php' ) ) {
  require_once( dirname( __FILE__ ) . '/fossn_option/admin_plag/sample-config.php' );
}
?>

<?php require( get_template_directory()  . '/compliter_function/dependecies.php');?>


