<?php

/**
 * Plugin Name: Proyecto Mestizo
 * Description: Proyecto Mestizo
 * Author: Veronica Nisenbaum
 * Author URI: http://www.vn.com
 * Version: 0.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    die( '-1' );
}

global $pm;
$pm = new ProyectoMestizo();



class ProyectoMestizo
{

    public function __construct(){
        $this->init();
    }

    public function init(){
        include_once(ABSPATH.'wp-admin/includes/plugin.php');

        define( 'PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
        add_action( 'wp_enqueue_scripts', array($this, 'pm_scripts'));
        if ( is_plugin_active( 'the-events-calendar/the-events-calendar.php' ) ) {
            add_shortcode('pm_events', array($this, 'pm_event_shortcode'));
        }

        add_shortcode('pm_blog_events', array($this, 'pm_blog_events_shortcode'));
    }

    public function pm_blog_events_shortcode( $attr, $content = null )
    {
        extract(shortcode_atts(array(
            'title'				=> '',
            'count'				=> 5,
            'style'				=> '',

            'category'			=> '',
            'category_multi'	=> '',
            'orderby'			=> 'date',
            'order'				=> 'DESC',

            'excerpt'			=> '',
            'link'				=> '',
            'link_title'		=> '',
        ), $attr));

        $args = array(
            'post_type'             => 'tribe_events',
            'posts_per_page'		=> !empty($attr['count']) ? intval($attr['count']) : -1,
            'orderby' 				=> 'date',
            'order'					=> 'DESC',
            'no_found_rows'			=> 1,
            'post_status'			=> 'publish',
            'ignore_sticky_posts'	=> 0,
            'meta_query' => array( // WordPress has all the results, now, return only the events after today's date
                array(
                    'key' => '_EventStartDate', // Check the start date field
                    'value' => date("Y-m-d"), // Set today's date (note the similar format)
                    'compare' => '>=', // Return the ones greater than today's date
                    'type' => 'DATE' // Let WordPress know we're working with date
                )
            ),
        );

        // private
        if( is_user_logged_in() ){
            $args['post_status'] = array('publish','private');
        }

        // categories
        if( !empty($attr['category_multi']) ){
            $args['category_name'] = trim( $attr['category_multi'] );
        } elseif( $attr['category'] ){
            $args['category_name'] = $attr['category'];
        }

        // featured first
        if( $attr['style'] == 'featured' ){
            $first = true;
        } else {
            $first = false;
        }

        $query_blog = new WP_Query( $args );

        $output = '<div class="Latest_news '. esc_attr( $attr['style'] ) .'">';
        if( $attr['title'] ) $output .= '<h3 class="title">'. $attr['title'] .'</h3>';

        $output .= '<ul class="ul-first">';

        while( $query_blog->have_posts() ){
            $cost = tribe_get_formatted_cost();
            $website = tribe_get_event_website_link();

            $query_blog->the_post();

            $output .= '<li class="'. implode( ' ', get_post_class() ).'">';

            $output .= '<div class="photo">';
            $output .= '<a href="'. get_permalink() .'">';
            $output .= get_the_post_thumbnail( get_the_ID(), 'blog-portfolio', array('class'=>'scale-with-grid' ) );
            $output .= '</a>';
            $output .= '</div>';

            $output .= '<div class="desc">';

            if( $first ){
                $output .= '<h4><a href="'. get_permalink() .'">'. get_the_title() .'</a></h4>';
            } else {
                $output .= '<h5><a href="'. get_permalink() .'">'. get_the_title() .'</a></h5>';
            }

            $output .= '<div class="desc_footer">';
            $output .= '<span class="date"><i class="icon-clock"></i> '. tribe_events_event_schedule_details() .'</span>';
            $output .= '<div class="button-love">'. mfn_love() .'</div>';
            $output .= '<br>';
            $output .= '<span class="location"><i class="icon-location"></i> '. tribe_get_full_address() .'</span>';
            $output .= '</div>';

            if( $attr['excerpt'] == '1' || ( $first && $attr['excerpt'] == 'featured' ) ) $output .= '<div class="post-excerpt">'. get_the_excerpt() .'</div>';

            $output .= '</div>';

            $output .= '</li>';

            if( $first ){

                $output .= '</ul>';
                $output .= '<ul class="ul-second">';

                $first = false;
            }

        }

        wp_reset_postdata();
        $output .= '</ul>';

        if( $attr['link'] ) $output .= '<a class="button button_js" href="'. $attr['link'] .'"><span class="button_icon"><i class="icon-layout"></i></span><span class="button_label">'. $attr['link_title'] .'</span></a>';

        $output .= '</div>'."\n";

        return $output;
    }

    function pm_event_shortcode(){
        $template_path = PLUGIN_PATH.'templates/pm_events.php';
        $args = array(
            'post_type' => 'tribe_events', // Tell WordPress which post type we want
            'order' => 'ASC', // ASC is the other option
            'posts_per_page' => '-1', // Let's show them all.
            'meta_query' => array( // WordPress has all the results, now, return only the events after today's date
                array(
                    'key' => '_EventStartDate', // Check the start date field
                    'value' => date("Y-m-d"), // Set today's date (note the similar format)
                    'compare' => '>=', // Return the ones greater than today's date
                    'type' => 'DATE' // Let WordPress know we're working with date
                )
            ),
        );

        $latest_events = get_posts( $args );
        ob_start();
        require_once( $template_path );
        return ob_get_clean();
    }

    function pm_scripts() {
        /*wp_enqueue_script('jquery');

        wp_enqueue_style( 'domochat-style-css', plugin_dir_url(__FILE__). 'css/style.css' );
        wp_enqueue_script( 'domochat-navigation', plugin_dir_url(__FILE__) . '/js/navigation.js', array(), '20120206', true );
        wp_enqueue_script( 'domochat-skip-link-focus-fix', plugin_dir_url(__FILE__) . '/js/skip-link-focus-fix.js', array(), '20130115', true );

        wp_register_script( 'domochat-ajax-js', plugin_dir_url(__FILE__) . '/js/ajax.js', array('jquery'), NULL, false );
        wp_register_script( 'domochat-main-js', plugin_dir_url(__FILE__) . '/js/main.js', array('jquery'), NULL, false );
        wp_register_script( 'jquery.timeago-js', plugin_dir_url(__FILE__) . '/js/jquery.timeago.js', array('jquery'), NULL, false );

        $user = wp_get_current_user();
        $postData = array(
            'root'      => esc_url_raw( get_json_url() ),
            'nonce'     => wp_create_nonce( 'wp_json' ),
            'userID'    => get_current_user_id(),
            'user_display_name'      => $user->data->display_name,
            'loginUrl'  => wp_login_url( home_url() ),
            'logoutUrl' => wp_logout_url( wp_login_url( home_url()) ),
            'is_user_logged_in' => is_user_logged_in(),
            'user_data' => $user->data,
            'favorite_tag' => 'favorite_'. $user->ID
        );

        wp_localize_script( 'domochat-main-js', 'JP_POST', $postData);
        wp_localize_script( 'domochat-main-js', 'JP_POST', $postData);

        wp_enqueue_script( 'domochat-ajax-js');
        wp_enqueue_script( 'domochat-main-js');
        wp_enqueue_script( 'jquery.timeago-js');

        wp_register_script( 'bootstrap-js', '//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js', array('jquery'), NULL, true );
        wp_register_style( 'bootstrap-css', '//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css', false, NULL, 'all' );

        wp_enqueue_script( 'bootstrap-js' );
        wp_enqueue_style( 'bootstrap-css' );


        //wp_enqueue_style( 'bootstrap-tagsinput-css', get_template_directory_uri() . '/js/lib/tagsinput/bootstrap-tagsinput.css' );
        //wp_enqueue_script( 'bootstrap-tagsinput-js', get_template_directory_uri() . '/js/lib/tagsinput/bootstrap-tagsinput.js' , array('jquery'), null, false );

        //wp_enqueue_script( 'bootstrap-summernote-js', get_template_directory_uri() . '/js/lib/wysiwyg/summernote.js' , array('jquery'), null, false );
        //wp_enqueue_style( 'bootstrap-summernote-css', get_template_directory_uri() . '/js/lib/wysiwyg/summernote-bs3.css' );

        if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
            wp_enqueue_script( 'comment-reply' );
        }*/
    }
}