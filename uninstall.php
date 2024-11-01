<?php
if ( !defined( 'WP_UNINSTALL_PLUGIN' ) )
exit;
// Check if options exist and delete it
if ( get_option( 'zm_fb_option' ) != false ) {
delete_option( 'zm_fb_option' );
}
if ( get_option( 'zm_tw_option' ) != false ) {
delete_option( 'zm_tw_option' );
}
if ( get_option( 'zm_in_option' ) != false ) {
delete_option( 'zm_in_option' );
}
if ( get_option( 'zm_pt_option' ) != false ) {
delete_option( 'zm_pt_option' );
}
if ( get_option( 'zm_gp_option' ) != false ) {
delete_option( 'zm_gp_option' );
}
if ( get_option( 'zm_ld_option' ) != false ) {
delete_option( 'zm_ld_option' );
}
if ( get_option( 'zmiconw_option' ) != false ) {
delete_option( 'zmiconw_option' );
}
if ( get_option( 'zmiconmt_option' ) != false ) {
delete_option( 'zmiconmt_option' );
}
if ( get_option( 'zmiconmb_option' ) != false ) {
delete_option( 'zmiconmb_option' );
}
if ( get_option( 'zmiconml_option' ) != false ) {
delete_option( 'zmiconml_option' );
}
if ( get_option( 'zmiconmr_option' ) != false ) {
delete_option( 'zmiconmr_option' );
}if ( get_option( 'zm_be_option' ) != false ) {delete_option( 'zm_be_option' );}if ( get_option( 'zm_bl_option' ) != false ) {delete_option( 'zm_bl_option' );}if ( get_option( 'zm_de_option' ) != false ) {delete_option( 'zm_de_option' );}if ( get_option( 'zm_dr_option' ) != false ) {delete_option( 'zm_dr_option' );}if ( get_option( 'zm_fl_option' ) != false ) {delete_option( 'zm_fl_option' );}if ( get_option( 'zm_la_option' ) != false ) {delete_option( 'zm_la_option' );}if ( get_option( 'zm_my_option' ) != false ) {delete_option( 'zm_my_option' );}if ( get_option( 'zm_rs_option' ) != false ) {delete_option( 'zm_rs_option' );}if ( get_option( 'zm_sk_option' ) != false ) {delete_option( 'zm_sk_option' );}if ( get_option( 'zm_tu_option' ) != false ) {delete_option( 'zm_tu_option' );}if ( get_option( 'zm_vi_option' ) != false ) {delete_option( 'zm_vi_option' );}if ( get_option( 'zm_vk_option' ) != false ) {delete_option( 'zm_vk_option' );}if ( get_option( 'zm_wp_option' ) != false ) {delete_option( 'zm_wp_option' );}if ( get_option( 'zm_yt_option' ) != false ) {delete_option( 'zm_yt_option' );}
?>