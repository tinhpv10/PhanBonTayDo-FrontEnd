
<?php
//remove_action('woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash',
//    10);
//remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_related_products',
//    20);
//add_filter('woocommerce_single_product_summary', 'woocommerce_template_single_price', 10);
//remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);
//add_action('woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30);


add_action('woocommerce_before_single_product', 'woocommerce_before_single_product_banner');

function woocommerce_before_single_product_banner(){

    ?>

<?php }


add_action('woocommerce_single_product_summary',
    'add_like_share_after_woocommerce_template_single_title', 6);
function add_like_share_after_woocommerce_template_single_title(){ ?>
	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v15.0&appId=2242396325982501&autoLogAppEvents=1" nonce="F2eqZtxD"></script>
	<div class="fb-like" data-href="<?= get_permalink() ?>" data-width="" data-layout="standard" data-action="like" data-size="small" data-share="true"></div>
	<hr>
    <?php

    echo get_the_excerpt();

    $header = get_field('header', 'option');
    echo "<a class='btn btn-primary text-white my-2' href='tel:" . $header['hotline'] . "'><i class='fa fa-phone'> </i> " . $header['hotline'] . "</a>";
}

add_filter('woocommerce_product_tabs', 'bbloomer_remove_reviews_tab', 9999);

function bbloomer_remove_reviews_tab($tabs){
    unset($tabs['reviews']);

    return $tabs;
}


//Add a new custom product tab
add_filter('woocommerce_product_tabs', 'ql_new_custom_product_tab');

function ql_new_custom_product_tab($tabs){
    $tab_about = get_field('tab_about', 'option');

    //To add multiple tabs, update the label for each new tab inside the $tabs['xyz'] array, e.g., custom_tab2, my_new_tab, etc.
    $tabs['custom_tab'] = [
        'title'    => __($tab_about['title'] ?? get_the_title(),
            'woocommerce'), //change "Custom Product tab" to any text you want
        'priority' => 50,
        'callback' => 'ql_custom_product_tab_content'
    ];

    return $tabs;
}

// Add content to a custom product tab
function ql_custom_product_tab_content(){
    $tab_about = get_field('tab_about', 'option');

    echo $tab_about['description'] ?? '';
}

remove_action('genesis_loop', 'genesis_do_loop');
genesis();




