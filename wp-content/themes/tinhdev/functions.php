<?php
require __DIR__ . '/vendor/autoload.php';

use TinhDev\base\Base;
use TinhDev\components\Header;
use TinhDev\components\Slider;
use TinhDev\components\AboutUs;
use TinhDev\components\ProductTerm;
use TinhDev\components\BlogGallery;
use TinhDev\components\Customers;
use TinhDev\components\Footer;
use TinhDev\components\Archive;
use TinhDev\components\ArchiveProduct;
use TinhDev\components\Page;
use TinhDev\components\Single;
use TinhDev\components\SingleProduct;
use TinhDev\components\PageNotFound;
use TinhDev\components\Banner;
use TinhDev\components\TopCategories;
use TinhDev\components\Services;
use TinhDev\components\BlogDefault;

$base = new Base();
$base->init();


add_action('init', 'remove_functions', 15);
function remove_functions(){
    remove_action('genesis_header', 'genesis_do_header');
    remove_action('genesis_footer', 'genesis_do_footer');
    remove_action('genesis_sidebar', 'genesis_do_sidebar');
    remove_action('genesis_loop', 'genesis_do_loop');
}

add_action('init', 'add_functions', 15);
function add_functions(){
    add_action('genesis_header', 'header_components');
    add_action('genesis_loop', 'home_components');
    add_action('genesis_loop', 'single_components');
    add_action('genesis_loop', 'page_components');
    add_action('genesis_loop', 'archive_components');
    add_action('genesis_footer', 'footer_components');
    add_action('genesis_loop', 'search_components');
    add_action('genesis_loop', 'page_not_found_components');
}

function header_components(){
    Header::render();
}

function home_components(){
    if (is_home()):
        Slider::render();
        AboutUs::render();
        ProductTerm::render();
    endif;
}

function single_components(){
    if (is_single()):
        if (class_exists('WooCommerce') && is_woocommerce()):
            SingleProduct::render();
        else:
            Single::render();
        endif;
    endif;
}

function page_components(){
    if (is_page() && !is_page_template()):
        Page::render();
    endif;
}


function archive_components(){
    if (is_archive()):
        if (class_exists('WooCommerce') && is_woocommerce()):
            ArchiveProduct::render();
        else:
            Archive::render();
        endif;
    endif;
}


function search_components(){
    if (is_search()):
        if (class_exists('WooCommerce') && is_woocommerce()):
            ArchiveProduct::render();
        else:
            Archive::render();
        endif;
    endif;
}


function page_not_found_components(){
    if (is_404()):
        PageNotFound::render();
    endif;
}


function footer_components(){
    Footer::render();
}


function mmenu_setup(){
    $header = get_field('header', 'option');

    ?>


<?php }

add_action('wp_footer', 'mmenu_setup');

/*
 * Filter này dùng để xoá prefix tiêu đề cho chuyên mục
 * */
add_filter('get_the_archive_title', function ($title){
    if (is_category()){
        $title = single_cat_title('', FALSE);
    }elseif (is_tag()){
        $title = single_tag_title('', FALSE);
    }elseif (is_author()){
        $title = '<span class="vcard">' . get_the_author() . '</span>';
    }elseif (is_tax()){ //for custom post types
        $title = sprintf(__('%1$s'), single_term_title('', FALSE));
    }elseif (is_post_type_archive()){
        $title = post_type_archive_title('', FALSE);
    }

    return $title;
});


function tinhdev_setup(){
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');
}

add_action('after_setup_theme', 'tinhdev_setup');

add_filter(
    'admin_footer_text',
    function (){
        return 'Powered by <a href="https://thietkewebsitecantho.com.vn/" target="_blank" rel="noopener">Thiết kế website Cần Thơ</a>';
    }
);


//hook hiển thị nút cộng trừ sản phẩm
add_action( 'wp_footer', 'hiendev_ts_quantity_plus_minus' );
function hiendev_ts_quantity_plus_minus() {
    if ( ! is_product() ) return; ?>
    <script type="text/javascript">
        jQuery(document).ready(function($){
            $('form.cart').on( 'click', 'button.plus, button.minus', function() {

                const qty = $( this ).closest( 'form.cart' ).find( '.qty' );
                const val = parseFloat(qty.val());
                const max = parseFloat(qty.attr( 'max' ));
                const min = parseFloat(qty.attr( 'min' ));
                const step = parseFloat(qty.attr( 'step' ));

                if ( $( this ).is( '.plus' ) ) {
                    if ( max && ( max <= val ) ) {
                        qty.val( max );
                    }
                    else {
                        qty.val( val + step );
                    }
                }
                else {
                    if ( min && ( min >= val ) ) {
                        qty.val( min );
                    }
                    else if ( val > 1 ) {
                        qty.val( val - step );
                    }
                }

            });

        });

    </script>
    <?php
}



//hook hiển thị nút mua ngay
add_action('woocommerce_after_add_to_cart_button','hiendev_quickbuy_after_buynow_button');
function hiendev_quickbuy_after_buynow_button(){
    global $product;
    ?>

    <button type="button" class="button buy_now_button alt buy-now">
        <?php _e('MUA NGAY', 'devvn'); ?>
    </button>
    <input type="hidden" name="is_buy_now" class="is_buy_now" value="0" autocomplete="off"/>
    <script>
        jQuery(document).ready(function(){
            jQuery('body').on('click', '.buy_now_button', function(e){
                e.preventDefault();
                const thisParent = jQuery(this).parents('form.cart');
                if(jQuery('.single_add_to_cart_button', thisParent).hasClass('disabled')) {
                    jQuery('.single_add_to_cart_button', thisParent).trigger('click');
                    return false;
                }
                thisParent.addClass('devvn-quickbuy');
                jQuery('.is_buy_now', thisParent).val('1');
                jQuery('.single_add_to_cart_button', thisParent).trigger('click');
            });
        });
    </script>
    <?php
}
add_filter('woocommerce_add_to_cart_redirect', 'redirect_to_checkout');
function redirect_to_checkout($redirect_url) {
    if (isset($_REQUEST['is_buy_now']) && $_REQUEST['is_buy_now']) {
        $redirect_url = wc_get_checkout_url();
    }
    return $redirect_url;
}


add_filter( 'woocommerce_sale_flash', 'add_percentage_to_sale_badge', 20, 3 );
function add_percentage_to_sale_badge( $post, $product ) {
    if( $product->is_type('variable')){
        $percentages = array();

        // Get all variation prices
        $prices = $product->get_variation_prices();

        // Loop through variation prices
        foreach( $prices['price'] as $key => $price ){
            // Only on sale variations
            if( $prices['regular_price'][$key] !== $price ){
                // Calculate and set in the array the percentage for each variation on sale
                $percentages[] = round(100 - ($prices['sale_price'][$key] / $prices['regular_price'][$key] * 100));
            }
        }
        // We keep the highest value
        $percentage = max($percentages) . '%';
    } else {
        $regular_price = (float) $product->get_regular_price();
        $sale_price    = (float) $product->get_sale_price();

        $percentage    = round(100 - ($sale_price / $regular_price * 100)) . '%';
    }
    return '' . esc_html__( '', 'woocommerce' ) . ' ' . "-". $percentage . '';
}
