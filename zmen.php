<?php
/*
Plugin Name: SocMen
Plugin URI: http://www.zoranmaric.com/plg/socmen.zip
Description: Add social icons in menu bar with SocMen plugin...
Version: 2.1.0
Author: Zoran Maric
Author URI: http://www.zoranmaric.com
License: GPL2 or later
*/
?>
<?php
add_action('wp_enqueue_scripts', 'zmen_stil');
function zmen_stil()
{
    wp_enqueue_style('zmen', plugins_url('/css/style.css', __FILE__));
}

add_action('admin_print_styles', 'zmen_admin', 20);
function zmen_admin()
{
    wp_register_style('socmen', plugins_url('/css/zmenadmin.css', __FILE__));
    wp_enqueue_style('socmen');
}

?>
<?php
add_action('admin_menu', 'zmsocmen_create_menu');
add_action('admin_init', 'register_mysettings');
function zmsocmen_create_menu()
{
    add_menu_page('ZM Socmen Plugin Settings', 'SOCMEN', 'administrator', __FILE__, 'zmsocmen_settings_page', plugins_url('/images/icsm.png', __FILE__));
}

function register_mysettings()
{
    register_setting('zmsocmen-settings-group', 'zm_fb_option');
    register_setting('zmsocmen-settings-group', 'zm_tw_option');
    register_setting('zmsocmen-settings-group', 'zm_in_option');
    register_setting('zmsocmen-settings-group', 'zm_pt_option');
    register_setting('zmsocmen-settings-group', 'zm_gp_option');
    register_setting('zmsocmen-settings-group', 'zm_ld_option');
    register_setting('zmsocmen-settings-group', 'zm_be_option');
    register_setting('zmsocmen-settings-group', 'zm_bl_option');
    register_setting('zmsocmen-settings-group', 'zm_de_option');
    register_setting('zmsocmen-settings-group', 'zm_dr_option');
    register_setting('zmsocmen-settings-group', 'zm_fl_option');
    register_setting('zmsocmen-settings-group', 'zm_la_option');
    register_setting('zmsocmen-settings-group', 'zm_my_option');
    register_setting('zmsocmen-settings-group', 'zm_rs_option');
    register_setting('zmsocmen-settings-group', 'zm_sk_option');
    register_setting('zmsocmen-settings-group', 'zm_tu_option');
    register_setting('zmsocmen-settings-group', 'zm_vi_option');
    register_setting('zmsocmen-settings-group', 'zm_vk_option');
    register_setting('zmsocmen-settings-group', 'zm_wp_option');
    register_setting('zmsocmen-settings-group', 'zm_yt_option');
    register_setting('zmsocmen-settings-group', 'zmiconw_option');
    register_setting('zmsocmen-settings-group', 'zmiconmt_option');
    register_setting('zmsocmen-settings-group', 'zmiconmb_option');
    register_setting('zmsocmen-settings-group', 'zmiconml_option');
    register_setting('zmsocmen-settings-group', 'zmiconmr_option');
}

function zmsocmen_settings_page()
{
    ?>
    <div class="wrap1"><h2>SOCMEN</h2>
        <div class="okvir">
            <div class="naslov">URL settings</div>
            <p>Add URL <strong>without</strong> http:// or https:// . You don't have to fill all the fields.</p>
            <form method="post" action="options.php">
                <?php settings_fields('zmsocmen-settings-group'); ?>
                <?php do_settings_sections('zmsocmen-settings-group'); ?>
                <table class="forma1">
                    <tr valign="top">
                        <th scope="row">Facebook:</th>
                        <td><input type="text" name="zm_fb_option"
                                   value="<?php echo esc_attr(get_option('zm_fb_option')); ?>"/></td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">Twitter:</th>
                        <td><input type="text" name="zm_tw_option"
                                   value="<?php echo esc_attr(get_option('zm_tw_option')); ?>"/></td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">Instagram:</th>
                        <td><input type="text" name="zm_in_option"
                                   value="<?php echo esc_attr(get_option('zm_in_option')); ?>"/></td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">Pinterest:</th>
                        <td><input type="text" name="zm_pt_option"
                                   value="<?php echo esc_attr(get_option('zm_pt_option')); ?>"/></td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">Google +:</th>
                        <td><input type="text" name="zm_gp_option"
                                   value="<?php echo esc_attr(get_option('zm_gp_option')); ?>"/></td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">LinkedIn:</th>
                        <td><input type="text" name="zm_ld_option"
                                   value="<?php echo esc_attr(get_option('zm_ld_option')); ?>"/></td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">Behance:</th>
                        <td><input type="text" name="zm_be_option"
                                   value="<?php echo esc_attr(get_option('zm_be_option')); ?>"/></td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">Blogger:</th>
                        <td><input type="text" name="zm_bl_option"
                                   value="<?php echo esc_attr(get_option('zm_bl_option')); ?>"/></td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">DeviantArt:</th>
                        <td><input type="text" name="zm_de_option"
                                   value="<?php echo esc_attr(get_option('zm_de_option')); ?>"/></td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">Dribbble:</th>
                        <td><input type="text" name="zm_dr_option"
                                   value="<?php echo esc_attr(get_option('zm_dr_option')); ?>"/></td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">Flickr:</th>
                        <td><input type="text" name="zm_fl_option"
                                   value="<?php echo esc_attr(get_option('zm_fl_option')); ?>"/></td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">Last.fm:</th>
                        <td><input type="text" name="zm_la_option"
                                   value="<?php echo esc_attr(get_option('zm_la_option')); ?>"/></td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">MySpace:</th>
                        <td><input type="text" name="zm_my_option"
                                   value="<?php echo esc_attr(get_option('zm_my_option')); ?>"/></td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">RSS:</th>
                        <td><input type="text" name="zm_rs_option"
                                   value="<?php echo esc_attr(get_option('zm_rs_option')); ?>"/></td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">Skype:</th>
                        <td><input type="text" name="zm_sk_option"
                                   value="<?php echo esc_attr(get_option('zm_sk_option')); ?>"/></td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">Tumblr:</th>
                        <td><input type="text" name="zm_tu_option"
                                   value="<?php echo esc_attr(get_option('zm_tu_option')); ?>"/></td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">Vimeo:</th>
                        <td><input type="text" name="zm_vi_option"
                                   value="<?php echo esc_attr(get_option('zm_vi_option')); ?>"/></td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">VKontakte:</th>
                        <td><input type="text" name="zm_vk_option"
                                   value="<?php echo esc_attr(get_option('zm_vk_option')); ?>"/></td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">Wordpress:</th>
                        <td><input type="text" name="zm_wp_option"
                                   value="<?php echo esc_attr(get_option('zm_wp_option')); ?>"/></td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">YouTube:</th>
                        <td><input type="text" name="zm_yt_option"
                                   value="<?php echo esc_attr(get_option('zm_yt_option')); ?>"/></td>
                    </tr>
                </table>
        </div>

    </div>
    <div class="wrap2">
        <div class="okvir">
            <div class="naslov">Icon settings</div>
            <p>Size and margins of icons. Width and Height are the same and only one value is required. Max recommended
                value is 48. Default value is 24. </p>
            <table class="form-table1">
                <tr valign="top">
                    <th scope="row">Width & Height:</th>
                    <td><input type="text" name="zmiconw_option"
                               value="<?php echo esc_attr(get_option('zmiconw_option')); ?>"/></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Vertical aligment:</th>
                    <td><input type="text" name="zmiconmt_option"
                               value="<?php echo esc_attr(get_option('zmiconmt_option')); ?>"/></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Margin Left:</th>
                    <td><input type="text" name="zmiconml_option"
                               value="<?php echo esc_attr(get_option('zmiconml_option')); ?>"/></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Margin Right:</th>
                    <td><input type="text" name="zmiconmr_option"
                               value="<?php echo esc_attr(get_option('zmiconmr_option')); ?>"/></td>
                </tr>
            </table>
            <center><?php submit_button(); ?></center>
            </form>
        </div>
        <div class="okvir">
            <div class="naslov">Step by step instructions</div>
            <ul>
                <li>1) Go to Apperance - Menus.</li>
                <li>2) In the top right corner of the page click on SCREEN OPTIONS.</li>
                <li>3) Than click on SOCIAL NETWORKS.</li>
                <li>4) Than you must find Social networks on the bottom of a Menu Structure on the left side of a page
                    and click on it.
                </li>
                <li>5) Click on Social menu and than click on Add to Menu button.</li>
                <li>6) Click on Save menu button.</li>
            </ul>
        </div>
        <div class="okvir">
            <div class="naslov">Thanks...</div>
            ... for using my plugin. Really hope that you will find it useful...
            <p style="text-align:right"><a target="_blank" href="http://zoranmaric.com">Zoran Maric</a></p>
        </div>
    </div>
    <?php
}

?>
<?php
if (!is_admin()) add_action("wp_enqueue_scripts", "zmm_jquery_enqueue", 11);
function zmm_jquery_enqueue()
{
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js');
    wp_enqueue_script('jquery');
}

?>
<?php
function zmm()
{
    $zmfb = get_option('zm_fb_option');
    $zmtw = get_option('zm_tw_option');
    $zmin = get_option('zm_in_option');
    $zmpt = get_option('zm_pt_option');
    $zmgp = get_option('zm_gp_option');
    $zmld = get_option('zm_ld_option');
    $zmbe = get_option('zm_be_option');
    $zmbl = get_option('zm_bl_option');
    $zmde = get_option('zm_de_option');
    $zmdr = get_option('zm_dr_option');
    $zmfl = get_option('zm_fl_option');
    $zmla = get_option('zm_la_option');
    $zmmy = get_option('zm_my_option');
    $zmrs = get_option('zm_rs_option');
    $zmsk = get_option('zm_sk_option');
    $zmtu = get_option('zm_tu_option');
    $zmvi = get_option('zm_vi_option');
    $zmvk = get_option('zm_vk_option');
    $zmwp = get_option('zm_wp_option');
    $zmyt = get_option('zm_yt_option');
    $zmwh = get_option('zmiconw_option');
    $zmmt = get_option('zmiconmt_option');
    $zmmb = get_option('zmiconmb_option');
    $zmml = get_option('zmiconml_option');
    $zmmr = get_option('zmiconmr_option');
    if (empty($zmwh)) {
        $zmwh = 24;
    }
    $zmfbi = '<img src="' . plugins_url('/images/facebook.png', __FILE__) . '" alt="Facebook" style="width:' . $zmwh . 'px!important; height:' . $zmwh . 'px!important; margin-right:' . $zmmr . 'px; margin-left:' . $zmml . 'px;">';
    $zmtwi = '<img src="' . plugins_url('/images/twitter.png', __FILE__) . '" alt="Twitter" style="width:' . $zmwh . 'px!important; height:' . $zmwh . 'px!important; margin-right:' . $zmmr . 'px; margin-left:' . $zmml . 'px;">';
    $zmini = '<img src="' . plugins_url('/images/instagram.png', __FILE__) . '" alt="Instagram" style="width:' . $zmwh . 'px!important; height:' . $zmwh . 'px!important; margin-right:' . $zmmr . 'px; margin-left:' . $zmml . 'px;">';
    $zmpti = '<img src="' . plugins_url('/images/pinterest.png', __FILE__) . '" alt="Pinterest" style="width:' . $zmwh . 'px!important; height:' . $zmwh . 'px!important; margin-right:' . $zmmr . 'px; margin-left:' . $zmml . 'px;">';
    $zmgpi = '<img src="' . plugins_url('/images/googleplus.png', __FILE__) . '" alt="Google Plus" style=" width:' . $zmwh . 'px!important; height:' . $zmwh . 'px!important;margin-right:' . $zmmr . 'px; margin-left:' . $zmml . 'px;">';
    $zmldi = '<img src="' . plugins_url('/images/linkedin.png', __FILE__) . '" alt="LinkedIn" style="width:' . $zmwh . 'px!important; height:' . $zmwh . 'px!important;margin-right:' . $zmmr . 'px; margin-left:' . $zmml . 'px;">';
    $zmbei = '<img src="' . plugins_url('/images/behance.png', __FILE__) . '" alt="Behance" style="width:' . $zmwh . 'px!important; height:' . $zmwh . 'px!important; margin-right:' . $zmmr . 'px; margin-left:' . $zmml . 'px;">';
    $zmbli = '<img src="' . plugins_url('/images/blogger.png', __FILE__) . '" alt="Blogger" style=" width:' . $zmwh . 'px!important; height:' . $zmwh . 'px!important; margin-right:' . $zmmr . 'px; margin-left:' . $zmml . 'px;">';
    $zmdei = '<img src="' . plugins_url('/images/deviantart.png', __FILE__) . '" alt="DeviantArt" style="width:' . $zmwh . 'px!important; height:' . $zmwh . 'px!important;margin-right:' . $zmmr . 'px; margin-left:' . $zmml . 'px;">';
    $zmdri = '<img src="' . plugins_url('/images/dribbble.png', __FILE__) . '" alt="Dribbble" style="width:' . $zmwh . 'px!important; height:' . $zmwh . 'px!important;margin-right:' . $zmmr . 'px; margin-left:' . $zmml . 'px;">';
    $zmfli = '<img src="' . plugins_url('/images/flickr.png', __FILE__) . '" alt="Flickr" style="width:' . $zmwh . 'px!important; height:' . $zmwh . 'px!important;margin-right:' . $zmmr . 'px; margin-left:' . $zmml . 'px;">';
    $zmlai = '<img src="' . plugins_url('/images/lastfm.png', __FILE__) . '" alt="Lastfm" style="width:' . $zmwh . 'px!important; height:' . $zmwh . 'px!important;margin-right:' . $zmmr . 'px; margin-left:' . $zmml . 'px;">';
    $zmmyi = '<img src="' . plugins_url('/images/myspace.png', __FILE__) . '" alt="MySpace" style="width:' . $zmwh . 'px!important; height:' . $zmwh . 'px!important;margin-right:' . $zmmr . 'px; margin-left:' . $zmml . 'px;">';
    $zmrsi = '<img src="' . plugins_url('/images/rss.png', __FILE__) . '" alt="RSS" style="width:' . $zmwh . 'px!important; height:' . $zmwh . 'px!important;margin-right:' . $zmmr . 'px; margin-left:' . $zmml . 'px;">';
    $zmski = '<img src="' . plugins_url('/images/skype.png', __FILE__) . '" alt="Skype" style="width:' . $zmwh . 'px!important; height:' . $zmwh . 'px!important;margin-right:' . $zmmr . 'px; margin-left:' . $zmml . 'px;">';
    $zmtui = '<img src="' . plugins_url('/images/tumblr.png', __FILE__) . '" alt="Tumblr" style="width:' . $zmwh . 'px!important; height:' . $zmwh . 'px!important;margin-right:' . $zmmr . 'px; margin-left:' . $zmml . 'px;">';
    $zmvii = '<img src="' . plugins_url('/images/vimeo.png', __FILE__) . '" alt="Vimeo" style="width:' . $zmwh . 'px!important; height:' . $zmwh . 'px!important;margin-right:' . $zmmr . 'px; margin-left:' . $zmml . 'px;">';
    $zmvki = '<img src="' . plugins_url('/images/vkontakte.png', __FILE__) . '" alt="VKontakte" style="width:' . $zmwh . 'px!important; height:' . $zmwh . 'px!important;margin-right:' . $zmmr . 'px; margin-left:' . $zmml . 'px;">';
    $zmwpi = '<img src="' . plugins_url('/images/wordpress.png', __FILE__) . '" alt="Wordpress" style="width:' . $zmwh . 'px!important; height:' . $zmwh . 'px!important;margin-right:' . $zmmr . 'px; margin-left:' . $zmml . 'px;">';
    $zmyti = '<img src="' . plugins_url('/images/youtube.png', __FILE__) . '" alt="Youtube" style="width:' . $zmwh . 'px!important; height:' . $zmwh . 'px!important;margin-right:' . $zmmr . 'px; margin-left:' . $zmml . 'px;">';
    if ($zmfb) {
        echo '<div class="ikonica">' . '<a href="https://' . $zmfb . '">' . $zmfbi . '</a></div>';
    }
    if ($zmtw) {
        echo '<div class="ikonica">' . '<a href="https://' . $zmtw . '">' . $zmtwi . '</a></div>';
    }
    if ($zmin) {
        echo '<div class="ikonica">' . '<a href="https://' . $zmin . '">' . $zmini . '</a></div>';
    }
    if ($zmpt) {
        echo '<div class="ikonica">' . '<a href="https://' . $zmpt . '">' . $zmpti . '</a></div>';
    }
    if ($zmgp) {
        echo '<div class="ikonica">' . '<a href="https://' . $zmgp . '">' . $zmgpi . '</a></div>';
    }
    if ($zmld) {
        echo '<div class="ikonica">' . '<a href="https://' . $zmld . '">' . $zmldi . '</a></div>';
    }
    if ($zmbe) {
        echo '<div class="ikonica">' . '<a href="https://' . $zmbe . '">' . $zmbei . '</a></div>';
    }
    if ($zmbl) {
        echo '<div class="ikonica">' . '<a href="https://' . $zmbl . '">' . $zmbli . '</a></div>';
    }
    if ($zmde) {
        echo '<div class="ikonica">' . '<a href="https://' . $zmde . '">' . $zmdei . '</a></div>';
    }
    if ($zmdr) {
        echo '<div class="ikonica">' . '<a href="https://' . $zmdr . '">' . $zmdri . '</a></div>';
    }
    if ($zmfl) {
        echo '<div class="ikonica">' . '<a href="https://' . $zmfl . '">' . $zmfli . '</a></div>';
    }
    if ($zmla) {
        echo '<div class="ikonica">' . '<a href="https://' . $zmla . '">' . $zmlai . '</a></div>';
    }
    if ($zmmy) {
        echo '<div class="ikonica">' . '<a href="https://' . $zmmy . '">' . $zmmyi . '</a></div>';
    }
    if ($zmrs) {
        echo '<div class="ikonica">' . '<a href="https://' . $zmrs . '">' . $zmrsi . '</a></div>';
    }
    if ($zmsk) {
        echo '<div class="ikonica">' . '<a href="https://' . $zmsk . '">' . $zmski . '</a></div>';
    }
    if ($zmtu) {
        echo '<div class="ikonica">' . '<a href="https://' . $zmtu . '">' . $zmtui . '</a></div>';
    }
    if ($zmvi) {
        echo '<div class="ikonica">' . '<a href="https://' . $zmvi . '">' . $zmvii . '</a></div>';
    }
    if ($zmvk) {
        echo '<div class="ikonica">' . '<a href="https://' . $zmvk . '">' . $zmvki . '</a></div>';
    }
    if ($zmwp) {
        echo '<div class="ikonica">' . '<a href="https://' . $zmwp . '">' . $zmwpi . '</a></div>';
    }
    if ($zmyt) {
        echo '<div class="ikonica">' . '<a href="https://' . $zmyt . '">' . $zmyti . '</a></div>';
    }
}

?>
<?php function zmm_script()
{ ?>
    <script type="text/javascript">
        $(document).ready(function () {
            $("[title='zmbtr']").replaceWith('<div id="zmbtr"><?php zmm(); ?></div>');
        });
    </script>
    <?php
}

?>
<?php add_action('wp_footer', 'zmm_script'); ?>
<?php function zmmt_script()
{ ?>
    <style>
        #zmbtr {
            margin-bottom: -<?php echo get_option('zmiconmt_option'); ?>px !important;
        }
    </style>
    <?php
}

?>
<?php add_action('wp_head', 'zmmt_script'); ?>
<?php
if (!class_exists('Soc_Nav_Zm')) {
    class Soc_Nav_Zm
    {
        public function add_nav_menu_meta_boxes()
        {
            add_meta_box(
                'wl_login_nav_link',
                __('Social networks'),
                array($this, 'nav_menu_link'),
                'nav-menus',
                'side',
                'low'
            );
        }

        public function nav_menu_link()
        { ?>
            <div id="posttype-wl-login" class="posttypediv">
                <div id="tabs-panel-wishlist-login" class="tabs-panel tabs-panel-active">
                    <ul id="wishlist-login-checklist" class="categorychecklist form-no-clear">
                        <li>
                            <label class="menu-item-title">
                                <input type="checkbox" class="menu-item-checkbox"
                                       name="menu-item[-1][menu-item-object-id]" value="-1"> Social menu
                            </label>
                            <input type="hidden" class="menu-item-type" name="menu-item[-1][menu-item-type]"
                                   value="custom">
                            <input type="hidden" class="menu-item-attr-title" name="menu-item[-1][menu-item-attr-title]"
                                   value="zmbtr">
                            <input type="hidden" class="menu-item-title" name="menu-item[-1][menu-item-title]"
                                   value="Social">
                            <input type="hidden" class="menu-item-url" name="menu-item[-1][menu-item-url]" value="">
                            <input type="hidden" class="menu-item-classes" name="menu-item[-1][menu-item-classes]"
                                   value="zmbtr-pop">
                        </li>
                    </ul>
                </div>
                <p class="button-controls">
						<span class="list-controls">
							<a href="/wordpress/wp-admin/nav-menus.php?page-tab=all&amp;selectall=1#posttype-page"
                               class="select-all">Select All</a>
						</span>
                    <span class="add-to-menu">
							<input type="submit" class="button-secondary submit-add-to-menu right" value="Add to Menu"
                                   name="add-post-type-menu-item" id="submit-posttype-wl-login">
							<span class="spinner"></span>
						</span>
                </p>
            </div>

        <?php }
    }
}
$custom_nav = new Soc_Nav_Zm;
add_action('admin_init', array($custom_nav, 'add_nav_menu_meta_boxes'));