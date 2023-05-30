<?php

namespace TinhDev\base;

/*
 * Class BaseAbstract
 * **/

abstract class BaseAbstract{

    public static $template_directory_uri = '/wp-content/themes/tinhdev/src/assets';

    public function __construct(){
        add_action('wp_enqueue_scripts', [
            $this, 'enqueueStyle'
        ]);
        add_action('wp_enqueue_scripts', [
            $this, 'enqueueScript'
        ]);
    }


    /**
     * @return void
     */
    public function enqueueStyle(){
        wp_enqueue_style('global', self::$template_directory_uri . '/css/global.css');
        wp_enqueue_style('bootstrap',
            'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css');
        wp_enqueue_style('boxicons-theme-css',
            'https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css');
        wp_enqueue_style('slick-css',
            'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
        wp_enqueue_style('mmenu-css',
            'https://cdnjs.cloudflare.com/ajax/libs/jQuery.mmenu/9.1.6/mmenu.min.css');
        wp_enqueue_style('fancybox-theme-css',
            'https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css');
    }

    /**
     * @return void
     */
    public function enqueueScript(){
        wp_enqueue_script('jquery-37',
            'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js', ['jquery'],
            1.1, TRUE);
        wp_enqueue_script('1-jquery',
            'https://code.jquery.com/jquery-1.11.0.min.js', ['jquery'],
            1.1, TRUE);
        wp_enqueue_script('2-jquery',
            'https://code.jquery.com/jquery-migrate-1.2.1.min.js', ['jquery'],
            1.1, TRUE);
        wp_enqueue_script('3-slick-js',
            'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', ['jquery'],
            1.1, TRUE);
        wp_enqueue_script('mmenu-js',
            'https://cdnjs.cloudflare.com/ajax/libs/jQuery.mmenu/9.1.6/mmenu.js', ['jquery'],
            1.1, TRUE);
        wp_enqueue_script('fancybox-js',
            'https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js', ['jquery'],
            1.1, TRUE);

        wp_enqueue_script('bootstrap-js',
            self::$template_directory_uri . '/vendor/bootstrap-5.0.2/dist/js/bootstrap.bundle.min.js',
            ['jquery'], 1.1, TRUE);
        wp_enqueue_script('script', self::$template_directory_uri . '/js/script.js', ['jquery'],
            1.1, TRUE);
    }
}