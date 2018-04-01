<?php
/*
 * Plugin Name: Paira Mobile Menu
 */

/**
 * Enqueue Paira Scripts.
 */
function paira_menu_enqueue_scripts() {
    wp_enqueue_style( 'slicknav', plugins_url( '/css/slicknav.css', __FILE__ ) );
    wp_enqueue_script( 'jquery.slicknav', plugins_url( '/js/jquery.slicknav.min.js', __FILE__ ), array( 'jquery' ) );
}

add_action( 'wp_enqueue_scripts', 'paira_menu_enqueue_scripts' );

/**
 * Active Slicknav Menu.
 */
function paira_active_menu_scripts() {
    ?>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {

            $('#paira-menu').slicknav({
                label: '',
                //                appendTo: '',
                openedSymbol: '<i class="fa fa-minus-circle"></i>',
                closedSymbol: '<i class="fa fa-plus-circle"></i>',
                removeClasses: true,
                allowParentLinks: true,
                //                brand: '<img src="https://www.pairasolutions.com/img/main/logo-white.png" alt="<?php bloginfo( 'name' ); ?>">'
            });

    //            $('.slicknav_custom_btn').click(function () {
    //                $('#paira-menu').slicknav('toggle');
    //            });

        });
    </script>
    <?php
}

add_action( 'wp_footer', 'paira_active_menu_scripts' );




