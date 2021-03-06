<?php

class SiteOrigin_Panels_Widgets_Gallery extends WP_Widget {
    function __construct() {
        parent::__construct(
            'siteorigin-panels-gallery',
            __( 'Gallery (Builder)', 'siteorigin-panels' ),
            array(
                'description' => __( 'Displays a gallery.', 'siteorigin-panels' ),
            )
        );
    }

    function widget( $args, $instance ) {
    

        $shortcode_attr = array();
        foreach($instance as $k => $v){
            if(empty($v)) continue;
            $shortcode_attr[] = $k.'="'.esc_attr($v).'"';
        }

        echo do_shortcode('[gallery '.implode(' ', $shortcode_attr).']');

    }

    function update( $new, $old ) {
        return $new;
    }

    function form( $instance ) {
        global $_wp_additional_image_sizes;

        $types = apply_filters('siteorigin_panels_gallery_types', array());

        $instance = wp_parse_args($instance, array(
            'ids' => '',
            'image_size' => apply_filters('siteorigin_panels_gallery_default_size', ''),
            'type' => apply_filters('siteorigin_panels_gallery_default_type', ''),
            'columns' => 3,
            'link' => '',

        ));

        ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'ids' ) ?>"><?php _e( 'Gallery Images', 'siteorigin-panels' ) ?></label>
            <a href="#" onclick="return false;" class="so-gallery-widget-select-attachments hidden"><?php _e('edit gallery', 'siteorigin-panels') ?></a>
            <input type="text" class="widefat" value="<?php echo esc_attr($instance['ids']) ?>" name="<?php echo $this->get_field_name('ids') ?>" />
        </p>
        <p class="description">
            <?php _e("Comma separated attachment IDs. Defaults to all current page's attachments.") ?>
        </p>

        <p>
            <label for="<?php echo $this->get_field_id( 'size' ) ?>"><?php _e( 'Image Size', 'siteorigin-panels' ) ?></label>
            <select name="<?php echo $this->get_field_name( 'size' ) ?>" id="<?php echo $this->get_field_id( 'size' ) ?>">
                <option value="" <?php selected(empty($instance['image_size'])) ?>><?php esc_html_e('Default', 'siteorigin-panels') ?></option>
                <option value="large" <?php selected('large', $instance['image_size']) ?>><?php esc_html_e( 'Large', 'siteorigin-panels' ) ?></option>
                <option value="medium" <?php selected('medium', $instance['image_size']) ?>><?php esc_html_e( 'Medium', 'siteorigin-panels' ) ?></option>
                <option value="thumbnail" <?php selected('thumbnail', $instance['image_size']) ?>><?php esc_html_e( 'Thumbnail', 'siteorigin-panels' ) ?></option>
                <option value="full" <?php selected('full', $instance['image_size']) ?>><?php esc_html_e( 'Full', 'siteorigin-panels' ) ?></option>
                <?php if(!empty($_wp_additional_image_sizes)) : foreach ( $_wp_additional_image_sizes as $name => $info ) : ?>
                    <option value="<?php echo esc_attr( $name ) ?>" <?php selected($name, $instance['image_size']) ?>><?php echo esc_html( $name ) ?></option>
                <?php endforeach; endif; ?>
            </select>
        </p>

        <p>
            <label for="<?php echo $this->get_field_id( 'columns' ) ?>"><?php _e( 'Columns', 'siteorigin-panels' ) ?></label>
            <input type="text" class="regular" value="<?php echo esc_attr($instance['columns']) ?>" name="<?php echo $this->get_field_name('columns') ?>" />
        </p>

        <p>
            <label for="<?php echo $this->get_field_id( 'link' ) ?>"><?php _e( 'Link To', 'siteorigin-panels' ) ?></label>
            <select name="<?php echo $this->get_field_name( 'link' ) ?>" id="<?php echo $this->get_field_id( 'link' ) ?>">
                <option value="" <?php selected('', $instance['link']) ?>><?php esc_html_e('Attachment Page', 'siteorigin-panels') ?></option>
                <option value="file" <?php selected('file', $instance['link']) ?>><?php esc_html_e('File', 'siteorigin-panels') ?></option>
                <option value="none" <?php selected('none', $instance['link']) ?>><?php esc_html_e('None', 'siteorigin-panels') ?></option>
            </select>
        </p>

        <?php
    }
}

class SiteOrigin_Panels_Widgets_Clients extends WP_Widget {
    function __construct() {
        parent::__construct(
            'siteorigin-panels-clients',
            __( 'Clients Carousel (Builder)', 'siteorigin-panels' ),
            array(
                'description' => __( 'Displays a clients carousel.', 'siteorigin-panels' ),
            )
        );
    }

    function widget( $args, $instance ) {
    

        $shortcode_attr = array();
        foreach($instance as $k => $v){
            if(empty($v)) continue;
            $shortcode_attr[] = $k.'="'.esc_attr($v).'"';
        }

        echo do_shortcode('[clients '.implode(' ', $shortcode_attr).']');

    }

    function update( $new, $old ) {
        return $new;
    }

    function form( $instance ) {
        global $_wp_additional_image_sizes;

        $types = apply_filters('siteorigin_panels_gallery_types', array());

        $instance = wp_parse_args($instance, array(
            'ids' => '',
            'image_size' => apply_filters('siteorigin_panels_gallery_default_size', ''),
            'type' => apply_filters('siteorigin_panels_gallery_default_type', ''),
            'columns' => 3,
            'link' => '',

        ));

        ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'ids' ) ?>"><?php _e( 'Clients carousel', 'siteorigin-panels' ) ?></label>
            <a href="#" onclick="return false;" class="so-gallery-widget-select-attachments hidden"><?php _e('edit cleints carousel', 'siteorigin-panels') ?></a>
            <input type="text" class="widefat" value="<?php echo esc_attr($instance['ids']) ?>" name="<?php echo $this->get_field_name('ids') ?>" />
        </p>
        <p class="description">
            <?php _e("Comma separated attachment IDs. Defaults to all current page's attachments.") ?>
        </p>

        <p>
            <label for="<?php echo $this->get_field_id( 'size' ) ?>"><?php _e( 'Image Size', 'siteorigin-panels' ) ?></label>
            <select name="<?php echo $this->get_field_name( 'size' ) ?>" id="<?php echo $this->get_field_id( 'size' ) ?>">
                <option value="" <?php selected(empty($instance['image_size'])) ?>><?php esc_html_e('Default', 'siteorigin-panels') ?></option>
                <option value="large" <?php selected('large', $instance['image_size']) ?>><?php esc_html_e( 'Large', 'siteorigin-panels' ) ?></option>
                <option value="medium" <?php selected('medium', $instance['image_size']) ?>><?php esc_html_e( 'Medium', 'siteorigin-panels' ) ?></option>
                <option value="thumbnail" <?php selected('thumbnail', $instance['image_size']) ?>><?php esc_html_e( 'Thumbnail', 'siteorigin-panels' ) ?></option>
                <option value="full" <?php selected('full', $instance['image_size']) ?>><?php esc_html_e( 'Full', 'siteorigin-panels' ) ?></option>
                <?php if(!empty($_wp_additional_image_sizes)) : foreach ( $_wp_additional_image_sizes as $name => $info ) : ?>
                    <option value="<?php echo esc_attr( $name ) ?>" <?php selected($name, $instance['image_size']) ?>><?php echo esc_html( $name ) ?></option>
                <?php endforeach; endif; ?>
            </select>
        </p>

        

        <p>
            <label for="<?php echo $this->get_field_id( 'link' ) ?>"><?php _e( 'Link To', 'siteorigin-panels' ) ?></label>
            <select name="<?php echo $this->get_field_name( 'link' ) ?>" id="<?php echo $this->get_field_id( 'link' ) ?>">
                <option value="" <?php selected('', $instance['link']) ?>><?php esc_html_e('Attachment Page', 'siteorigin-panels') ?></option>
                <option value="file" <?php selected('file', $instance['link']) ?>><?php esc_html_e('File', 'siteorigin-panels') ?></option>
                <option value="none" <?php selected('none', $instance['link']) ?>><?php esc_html_e('None', 'siteorigin-panels') ?></option>
            </select>
        </p>

        <?php
    }
}


/**
 * A panel that lets you embed video.
 */
class SiteOrigin_Panels_Widgets_EmbeddedVideo extends WP_Widget {
    function __construct() {
        parent::__construct(
            'siteorigin-panels-embedded-video',
            __( 'Embedded Video (Builder)', 'siteorigin-panels' ),
            array(
                'description' => __( 'Embeds a video.', 'siteorigin-panels' ),
            )
        );
    }

    /**
     * Display the video using
     *
     * @param array $args
     * @param array $instance
     */
    function widget( $args, $instance ) {
        $embed = new WP_Embed();

        if(!wp_script_is('fitvids'))
            wp_enqueue_script('fitvids', plugin_dir_url(SITEORIGIN_PANELS_BASE_FILE) . 'widgets/js/jquery.fitvids.min.js', array('jquery'), SITEORIGIN_PANELS_VERSION);

        if(!wp_script_is('siteorigin-panels-embedded-video'))
            wp_enqueue_script('siteorigin-panels-embedded-video', plugin_dir_url(SITEORIGIN_PANELS_BASE_FILE) . 'widgets/js/embedded-video.min.js', array('jquery', 'fitvids'), SITEORIGIN_PANELS_VERSION);

        echo $args['before_widget'];
        ?><div class="siteorigin-fitvids"><?php echo  $instance['video'];  ?></div><?php
        echo $args['after_widget'];
    }

    /**
     * Display the embedded video form.
     *
     * @param array $instance
     * @return string|void
     */
    function form( $instance ) {
        $instance = wp_parse_args( $instance, array(
            'video' => '',
        ) )

        ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'video' ) ?>"><?php _e( 'Video', 'siteorigin-panels' ) ?></label>
            <input type="text" class="widefat" name="<?php echo $this->get_field_name( 'video' ) ?>" id="<?php echo $this->get_field_id( 'video' ) ?>" value="<?php echo esc_attr( $instance['video'] ) ?>" />
        </p>
    <?php
    }

    function update( $new, $old ) {
        $new['video'] = str_replace( 'https://', 'http://', $new['video'] );
        return $new;
    }
}


class SiteOrigin_Panels_Widgets_Portfolio extends WP_Widget {
    function __construct() {
        parent::__construct(
            'siteorigin-panels-portfolio',
            __( 'Portfolio (Builder)', 'siteorigin-panels' ),
            array(
                'description' => __( 'Displays a Portfolio block.', 'siteorigin-panels' ),
            )
        );
    }

    /**
     * Display the video using
     *
     * @param array $args
     * @param array $instance
     */
    function widget( $args, $instance ) {
        $embed = new WP_Embed();
        
        echo $args['before_widget'];
        ?>
        <?php echo do_shortcode('[cubeportfolio id='.$instance['cubeid'].']');?>
        <?php
        echo $args['after_widget'];
    }

    function update( $new, $old ) {
        return $new;
    }

    function form( $instance ) {
        global $wpdb;
        $instance = wp_parse_args( $instance, array(
            'cubeid' => '',
        ) );
        $cubefolios = $wpdb->get_results('SELECT id,name FROM '.$wpdb->prefix.'cubeportfolio');
        ?>

        <p>
            <label for="<?php echo $this->get_field_id( 'cubeid' ) ?>"><?php _e( 'Choose a Portfolio :', 'siteorigin-panels' ) ?></label>
            <select name="<?php echo $this->get_field_name( 'cubeid' ) ?>" id="<?php echo $this->get_field_id( 'cubeid' ) ?>">

                <?php foreach($cubefolios as $cubefolio) : ?>
                <option value="<?php echo esc_attr($cubefolio->id); ?>" <?php selected($cubefolio->id, $instance['cubeid']) ?>><?php echo esc_attr($cubefolio->name); ?></option>
                <?php endforeach; ?>
            </select>
        </p>
    <?php
    }   
}

class SiteOrigin_Panels_Widgets_Contact extends WP_Widget {
    function __construct() {
        parent::__construct(
            'siteorigin-panels-contact',
            __( 'Contact Form (Builder)', 'siteorigin-panels' ),
            array(
                'description' => __( 'Displays a cotact form.', 'siteorigin-panels' ),
            )
        );
    }

    /**
     * Display the video using
     *
     * @param array $args
     * @param array $instance
     */
    function widget( $args, $instance ) {
        
        echo $args['before_widget'];
        

        $shortcode_attr = array();
        foreach($instance as $k => $v){
            if(empty($v)) continue;
            $shortcode_attr[] = $k.'="'.esc_attr($v).'"';
        }

        echo do_shortcode('[contact-form-7 '.implode(' ', $shortcode_attr).']');
    
        echo $args['after_widget'];
    }

    function update( $new, $old ) {
        return $new;
    }

    function form( $instance ) {
        global $wpdb;
        $instance = wp_parse_args( $instance, array(
            'id' => '',
        ) );
        $contacts = $wpdb->get_results('SELECT id,post_name FROM '.$wpdb->posts.' where post_type="wpcf7_contact_form"');
        ?>

        <p>
            <label for="<?php echo $this->get_field_id( 'id' ) ?>"><?php _e( 'Choose a Portfolio :', 'siteorigin-panels' ) ?></label>
            <select name="<?php echo $this->get_field_name( 'id' ) ?>" id="<?php echo $this->get_field_id( 'id' ) ?>">

                <?php foreach($contacts as $contact) : ?>
                <option value="<?php echo esc_attr($contact->id); ?>" <?php selected($contact->id, $instance['id']) ?>><?php echo esc_attr($contact->post_name); ?></option>
                <?php endforeach; ?>
            </select>
        </p>
    <?php
    }   
}


class SiteOrigin_Panels_Widgets_Video extends WP_Widget {
    function __construct() {
        parent::__construct(
            'siteorigin-panels-video',
            __( 'Self Hosted Video (Builder)', 'siteorigin-panels' ),
            array(
                'description' => __( 'A self hosted video player.', 'siteorigin-panels' ),
            )
        );
    }

    function widget( $args, $instance ) {
        if (empty($instance['url'])) return;
        static $video_widget_id = 1;

        $instance = wp_parse_args($instance, array(
            'url' => '',
            'poster' => '',
            'skin' => 'siteorigin',
            'ratio' => 1.777,
            'autoplay' => false,
        ));

        // Enqueue jPlayer scripts and intializer
        wp_enqueue_script( 'siteorigin-panels-video-jplayer', plugin_dir_url(SITEORIGIN_PANELS_BASE_FILE) . 'video/jplayer/jquery.jplayer.min.min.js', array('jquery'), SITEORIGIN_PANELS_VERSION, true);
        wp_enqueue_script( 'siteorigin-panels-video', plugin_dir_url(SITEORIGIN_PANELS_BASE_FILE) . 'video/panels.video.jquery.min.js', array('jquery'), SITEORIGIN_PANELS_VERSION, true);

        // Enqueue the SiteOrigin jPlayer skin
        $skin = sanitize_file_name($instance['skin']);
        wp_enqueue_style('siteorigin-panels-video-jplayer-skin', plugin_dir_url(SITEORIGIN_PANELS_BASE_FILE).'video/jplayer/skins/'.$skin.'/jplayer.'.$skin.'.css', array(), SITEORIGIN_PANELS_VERSION);

        $file = $instance['url'];
        $poster = !empty($instance['poster']) ? $instance['poster'] :  plugin_dir_url(SITEORIGIN_PANELS_BASE_FILE).'video/poster.jpg';
        $instance['ratio'] = floatval($instance['ratio']);
        if(empty($instance['ratio'])) $instance['ratio'] = 1.777;

        echo $args['before_widget'];

        ?>
        <div class="jp-video" id="jp_container_<?php echo $video_widget_id ?>">
            <div class="jp-type-single" id="jp_interface_<?php echo $video_widget_id ?>">
                <div id="jquery_jplayer_<?php echo $video_widget_id ?>" class="jp-jplayer"
                     data-video="<?php echo esc_url($file) ?>"
                     data-poster="<?php echo esc_url($poster) ?>"
                     data-ratio="<?php echo floatval($instance['ratio']) ?>"
                     data-autoplay="<?php echo esc_attr($instance['autoplay']) ?>"
                     data-swfpath="<?php echo plugin_dir_url(SITEORIGIN_PANELS_BASE_FILE).'video/jplayer/' ?>"
                     data-mobile="<?php echo wp_is_mobile() ? 'true' : 'false' ?>"></div>

                <?php $this->display_gui($instance['skin']) ?>
            </div>
        </div>
        <?php

        $video_widget_id++;
        echo $args['after_widget'];
    }

    function display_gui($skin){
        $file = plugin_dir_path(SITEORIGIN_PANELS_BASE_FILE).'video/jplayer/skins/'.$skin.'/gui.php';
        if(file_exists($file)) include plugin_dir_path(SITEORIGIN_PANELS_BASE_FILE).'video/jplayer/skins/'.$skin.'/gui.php';
    }

    function update( $new, $old ) {
        $new['skin'] = sanitize_file_name($new['skin']);
        $new['ratio'] = floatval($new['ratio']);
        $new['autoplay'] = !empty($new['autoplay']) ? 1 : 0;
        return $new;
    }

    function form( $instance ) {
        $instance = wp_parse_args($instance, array(
            'url' => '',
            'poster' => '',
            'skin' => 'siteorigin',
            'ratio' => 1.777,
            'autoplay' => false,
        ));

        ?>
        <p>
            <label for="<?php echo $this->get_field_id('url') ?>"><?php _e('Video URL', 'siteorigin-panels') ?></label>
            <input id="<?php echo $this->get_field_id('url') ?>" name="<?php echo $this->get_field_name('url') ?>" type="text" class="widefat" value="<?php echo esc_attr($instance['url']) ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('poster') ?>"><?php _e('Poster URL', 'siteorigin-panels') ?></label>
            <input id="<?php echo $this->get_field_id('poster') ?>" name="<?php echo $this->get_field_name('poster') ?>" type="text" class="widefat" value="<?php echo esc_attr($instance['poster']) ?>" />
            <small class="description"><?php _e('An image that displays before the video starts playing.', 'siteorigin-panels') ?></small>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('skin') ?>"><?php _e('Skin', 'siteorigin-panels') ?></label>
            <select id="<?php echo $this->get_field_id('skin') ?>" name="<?php echo $this->get_field_name('skin') ?>">
                <option value="siteorigin" <?php selected($instance['skin'], 'siteorigin') ?>><?php esc_html_e('SiteOrigin', 'siteorigin-panels') ?></option>
                <option value="premium" <?php selected($instance['skin'], 'premium') ?>><?php esc_html_e('Premium Pixels', 'siteorigin-panels') ?></option>
            </select>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('ratio') ?>"><?php _e('Aspect Ratio', 'siteorigin-panels') ?></label>
            <input id="<?php echo $this->get_field_id('ratio') ?>" name="<?php echo $this->get_field_name('ratio') ?>" type="text" class="widefat" value="<?php echo esc_attr($instance['ratio']) ?>" />
            <small class="description"><?php _e('1.777 is HD standard.', 'siteorigin-panels') ?></small>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('autoplay') ?>">
                <input id="<?php echo $this->get_field_id('autoplay') ?>" name="<?php echo $this->get_field_name('autoplay') ?>" type="checkbox" value="1" />
                <?php _e('Auto Play Video', 'siteorigin-panels') ?>
            </label>
        </p>
        <?php
    }
}

/**
 * A shortcode for self hosted video.
 *
 * @param array $atts
 * @return string
 */
function siteorigin_panels_video_shortcode($atts){
    /**
     * @var string $url
     * @var string $poster
     * @var string $skin
     */
    $instance = shortcode_atts( array(
        'url' => '',
        'src' => '',
        'poster' => plugin_dir_url(SITEORIGIN_PANELS_BASE_FILE).'video/poster.jpg',
        'skin' => 'siteorigin',
        'ratio' => 1.777,
        'autoplay' => 0,
    ), $atts );

    if(!empty($instance['src'])) $instance['url'] = $instance['src'];
    if(empty($instance['url'])) return;

    ob_start();
    the_widget('SiteOrigin_Panels_Widgets_Video', $instance);
    return ob_get_clean();

}
add_shortcode('self_video', 'siteorigin_panels_video_shortcode');


class SiteOrigin_Panels_Widgets_PostLoop extends WP_Widget{
    function __construct() {
        parent::__construct(
            'siteorigin-panels-postloop',
            __( 'Post Loop (Builder)', 'siteorigin-panels' ),
            array(
                'description' => __( 'Displays a post loop.', 'siteorigin-panels' ),
            )
        );
    }

    /**
     * @param array $args
     * @param array $instance
     */
    function widget( $args, $instance ) {
        if( empty( $instance['template'] ) ) return;
        if( is_admin() ) return;

        $template = $instance['template'];
        $query_args = $instance;
        unset($query_args['template']);
        unset($query_args['additional']);
        unset($query_args['sticky']);
        unset($query_args['title']);

        $query_args = wp_parse_args($instance['additional'], $query_args);

        global $wp_rewrite;

        if( $wp_rewrite->using_permalinks() ) {

            if( get_query_var('paged') ) {
                // When the widget appears on a sub page.
                $query_args['paged'] = get_query_var('paged');
            }
            elseif( strpos( $_SERVER['REQUEST_URI'], '/page/' ) !== false ) {
                // When the widget appears on the home page.
                preg_match('/\/page\/([0-9]+)\//', $_SERVER['REQUEST_URI'], $matches);
                if(!empty($matches[1])) $query_args['paged'] = intval($matches[1]);
                else $query_args['paged'] = 1;
            }
            else $query_args['paged'] = 1;
        }
        else {
            // Get current page number when we're not using permalinks
            $query_args['paged'] = isset($_GET['paged']) ? intval($_GET['paged']) : 1;
        }

        switch($instance['sticky']){
            case 'ignore' :
                $query_args['ignore_sticky_posts'] = 1;
                break;
            case 'only' :
                $query_args['post__in'] = get_option( 'sticky_posts' );
                break;
            case 'exclude' :
                $query_args['post__not_in'] = get_option( 'sticky_posts' );
                break;
        }
        $categories=$instance['categories'];

        $categories=implode(',',$instance['categories']);
        if($categories!=''){
            $query_args['cat'] = $categories;
        }

        // Exclude the current post to prevent possible infinite loop

        global $siteorigin_panels_current_post;

        if( !empty($siteorigin_panels_current_post) ){
            if(!empty($query_args['post__not_in'])){
                $query_args['post__not_in'][] = $siteorigin_panels_current_post;
            }
            else {
                $query_args['post__not_in'] = array( $siteorigin_panels_current_post );
            }
        }

        if( !empty($query_args['post__in']) && !is_array($query_args['post__in']) ) {
            $query_args['post__in'] = explode(',', $query_args['post__in']);
            $query_args['post__in'] = array_map('intval', $query_args['post__in']);
        }

        // Create the query
        query_posts($query_args);
        echo $args['before_widget'];

        // Filter the title
        $instance['title'] = apply_filters('widget_title', $instance['title'], $instance, $this->id_base);
        if ( !empty( $instance['title'] ) ) {
            echo $args['before_title'] . $instance['title'] . $args['after_title'];
        }

        add_filter( 'siteorigin_panels_filter_content_enabled', array( 'SiteOrigin_Panels_Widgets_PostLoop', 'remove_content_filter' ) );

        global $more; $old_more = $more; $more = empty($instance['more']);

        if(strpos('/'.$instance['template'], '/content') !== false) {
            while( have_posts() ) {
                the_post();
                locate_template($instance['template'], true, false);
            }
        }
        else {
            locate_template($instance['template'], true, false);
        }

        $more = $old_more;
        remove_filter( 'siteorigin_panels_filter_content_enabled', array( 'SiteOrigin_Panels_Widgets_PostLoop', 'remove_content_filter' ) );

        echo $args['after_widget'];

        // Reset everything
        wp_reset_query();
    }

    /**
     * @return bool
     */
    static function remove_content_filter(){
        return false;
    }

    /**
     * Update the widget
     *
     * @param array $new
     * @param array $old
     * @return array
     */
    function update($new, $old){
        $new['more'] = !empty( $new['more'] );
        return $new;
    }

    /**
     * Get all the existing files
     *
     * @return array
     */
    function get_loop_templates(){
        $templates = array();

        $template_files = array(
            'loop*.php',
            '*/loop*.php',
            'content*.php',
            '*/content*.php',
        );

        $template_dirs = array(get_template_directory(), get_stylesheet_directory());
        $template_dirs = array_unique($template_dirs);
        foreach($template_dirs  as $dir ){
            foreach($template_files as $template_file) {
                foreach((array) glob($dir.'/'.$template_file) as $file) {
                    if( file_exists( $file ) ) $templates[] = str_replace($dir.'/', '', $file);
                }
            }
        }

        $templates = array_unique($templates);
        $templates = apply_filters('siteorigin_panels_postloop_templates', $templates);
        sort($templates);

        return $templates;
    }

    /**
     * Display the form for the post loop.
     *
     * @param array $instance
     * @return string|void
     */
    function form( $instance ) {
        $instance = wp_parse_args($instance, array(
            'title' => '',
            'template' => 'loop-post.php',

            // Query args
            'post_type' => 'post',
            'posts_per_page' => '',

            'order' => 'DESC',
            'orderby' => 'date',

            'sticky' => '',

            'additional' => '',
            'categories' => array(''),
            'more' => false,
        ));
        $categories= get_categories( 'type=post' );
        $templates = $this->get_loop_templates();
        if( empty($templates) ) {
            ?><p><?php _e("Your theme doesn't have any post loops.", 'siteorigin-panels') ?></p><?php
            return;
        }
        // Get all the loop template files
        $post_types = get_post_types(array('public' => true));
        $post_types = array_values($post_types);
        $post_types = array_diff($post_types, array('attachment', 'revision', 'nav_menu_item'));

        ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'title' ) ?>"><?php _e( 'Title', 'siteorigin-panels' ) ?></label>
            <input type="text" class="widefat" name="<?php echo $this->get_field_name( 'title' ) ?>" id="<?php echo $this->get_field_id( 'title' ) ?>" value="<?php echo esc_attr( $instance['title'] ) ?>">
        </p>
        <p>
            <input type="hidden" id="<?php echo $this->get_field_id( 'template' ) ?>" name="<?php echo $this->get_field_name( 'template' ) ?>" value="loop-post.php">
              
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('categories') ?>"><?php _e('In Categories ', 'siteorigin-panels') ?></label></br>
                <?php foreach($categories as $category) : ?>            
                    <input type="checkbox" class="widefat" id="<?php echo $this->get_field_id( 'categories' ) ?>" name="<?php echo $this->get_field_name( 'categories' ) ?>[<?php echo $category->cat_ID; ?>]" value="<?php echo $category->cat_ID; ?>" <?php echo (in_array($category->cat_ID,$instance['categories'])) ? 'checked="checked"' : ''; ?> /> <?php checked( $instance['categories'] ,$category->cat_ID) ?> <?php echo $category->name; ?><br/>
                <?php endforeach; ?>
            </select>
        </p>


        <p>
            <input type="hidden" id="<?php echo $this->get_field_id( 'post_type' ) ?>" name="<?php echo $this->get_field_name( 'post_type' ) ?>" value="post">
                
        </p>

        <p>
            <label for="<?php echo $this->get_field_id('posts_per_page') ?>"><?php _e('Posts Per Page', 'siteorigin-panels') ?></label>
            <input type="text" class="small-text" id="<?php echo $this->get_field_id( 'posts_per_page' ) ?>" name="<?php echo $this->get_field_name( 'posts_per_page' ) ?>" value="<?php echo esc_attr($instance['posts_per_page']) ?>" />
        </p>

        <p>
            <label <?php echo $this->get_field_id('orderby') ?>><?php _e('Order By', 'siteorigin-panels') ?></label>
            <select id="<?php echo $this->get_field_id( 'orderby' ) ?>" name="<?php echo $this->get_field_name( 'orderby' ) ?>" value="<?php echo esc_attr($instance['orderby']) ?>">
                <option value="none" <?php selected($instance['orderby'], 'none') ?>><?php esc_html_e('None', 'siteorigin-panels') ?></option>
                <option value="ID" <?php selected($instance['orderby'], 'ID') ?>><?php esc_html_e('Post ID', 'siteorigin-panels') ?></option>
                <option value="author" <?php selected($instance['orderby'], 'author') ?>><?php esc_html_e('Author', 'siteorigin-panels') ?></option>
                <option value="name" <?php selected($instance['orderby'], 'name') ?>><?php esc_html_e('Name', 'siteorigin-panels') ?></option>
                <option value="name" <?php selected($instance['orderby'], 'name') ?>><?php esc_html_e('Name', 'siteorigin-panels') ?></option>
                <option value="date" <?php selected($instance['orderby'], 'date') ?>><?php esc_html_e('Date', 'siteorigin-panels') ?></option>
                <option value="modified" <?php selected($instance['orderby'], 'modified') ?>><?php esc_html_e('Modified', 'siteorigin-panels') ?></option>
                <option value="parent" <?php selected($instance['orderby'], 'parent') ?>><?php esc_html_e('Parent', 'siteorigin-panels') ?></option>
                <option value="rand" <?php selected($instance['orderby'], 'rand') ?>><?php esc_html_e('Random', 'siteorigin-panels') ?></option>
                <option value="comment_count" <?php selected($instance['orderby'], 'comment_count') ?>><?php esc_html_e('Comment Count', 'siteorigin-panels') ?></option>
                <option value="menu_order" <?php selected($instance['orderby'], 'menu_order') ?>><?php esc_html_e('Menu Order', 'siteorigin-panels') ?></option>
                <option value="menu_order" <?php selected($instance['orderby'], 'menu_order') ?>><?php esc_html_e('Menu Order', 'siteorigin-panels') ?></option>
                <option value="post__in" <?php selected($instance['orderby'], 'post__in') ?>><?php esc_html_e('Post In Order', 'siteorigin-panels') ?></option>
            </select>
        </p>

        <p>
            <label for="<?php echo $this->get_field_id('order') ?>"><?php _e('Order', 'siteorigin-panels') ?></label>
            <select id="<?php echo $this->get_field_id( 'order' ) ?>" name="<?php echo $this->get_field_name( 'order' ) ?>" value="<?php echo esc_attr($instance['order']) ?>">
                <option value="DESC" <?php selected($instance['order'], 'DESC') ?>><?php esc_html_e('Descending', 'siteorigin-panels') ?></option>
                <option value="ASC" <?php selected($instance['order'], 'ASC') ?>><?php esc_html_e('Ascending', 'siteorigin-panels') ?></option>
            </select>
        </p>

        <p>
            <label for="<?php echo $this->get_field_id('sticky') ?>"><?php _e('Sticky Posts', 'siteorigin-panels') ?></label>
            <select id="<?php echo $this->get_field_id( 'sticky' ) ?>" name="<?php echo $this->get_field_name( 'sticky' ) ?>" value="<?php echo esc_attr($instance['sticky']) ?>">
                <option value="" <?php selected($instance['sticky'], '') ?>><?php esc_html_e('Default', 'siteorigin-panels') ?></option>
                <option value="ignore" <?php selected($instance['sticky'], 'ignore') ?>><?php esc_html_e('Ignore Sticky', 'siteorigin-panels') ?></option>
                <option value="exclude" <?php selected($instance['sticky'], 'exclude') ?>><?php esc_html_e('Exclude Sticky', 'siteorigin-panels') ?></option>
                <option value="only" <?php selected($instance['sticky'], 'only') ?>><?php esc_html_e('Only Sticky', 'siteorigin-panels') ?></option>
            </select>
        </p>

        <p>
            <label for="<?php echo $this->get_field_id('more') ?>"><?php _e('More Link ', 'siteorigin-panels') ?></label>
            <input type="checkbox" class="widefat" id="<?php echo $this->get_field_id( 'more' ) ?>" name="<?php echo $this->get_field_name( 'more' ) ?>" <?php checked( $instance['more'] ) ?> /><br/>
            <small><?php _e('If the template supports it, cut posts and display the more link.', 'siteorigin-panels') ?></small>
        </p>

        <p>
            <input type="hidden" class="widefat" id="<?php echo $this->get_field_id( 'additional' ) ?>" name="<?php echo $this->get_field_name( 'additional' ) ?>" value="<?php echo esc_attr($instance['additional']) ?>" />
        </p>

    <?php
    }
}

/**
 * Register the widgets.
 */
function siteorigin_panels_widgets_init(){
    register_widget('SiteOrigin_Panels_Widgets_Gallery');
    register_widget('SiteOrigin_Panels_Widgets_Portfolio');
    register_widget('SiteOrigin_Panels_Widgets_Contact');
    register_widget('SiteOrigin_Panels_Widgets_Clients');   
    register_widget('SiteOrigin_Panels_Widgets_EmbeddedVideo');
    register_widget('SiteOrigin_Panels_Widgets_Video');
    register_widget('SiteOrigin_Panels_Widgets_PostLoop');

}
add_action('widgets_init', 'siteorigin_panels_widgets_init');

/**
 * Enqueue widget compatibility files.
 */



/* GALLERY SHORTCODE FILTER FOR CAROUSEL

Usage: [dikka_carousel include="123,456,789"]content[/dikka_carousel]
(*) 123,456,789 are the Media attachments IDs you want to be displayed

*/
add_shortcode('clients','clients_carousel');
function clients_carousel ($attr, $content) {

    global $post;

    // Little fix as the order of arguments is not the same when
    // in "gallery" post formats
    if (!empty($content) && is_array($content)) {
        $attr = $content;
        if (!empty($attr[0])) $content = $attr[0];
        else $content = '';
    }

    $output = $content;

    // OrderBy
    $orderby = 'post__in';
    if (!empty($attr['orderby']))
        $orderby = sanitize_sql_orderby ($attr['orderby']);

    // If we got an include attr
    if (!empty($attr['ids']))
        $images = get_posts(array('include' => $attr['ids'], 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => 'ASC'));
        
    // If we do not have images yet...
    if (empty($images)) :
        // Get Post Images
        $images = get_children(array(
            'post_parent' => $post->ID,
            'post_type' => 'attachment',
            'post_mime_type' => 'image',
            'numberposts' => 100,
            'orderby' => $orderby,
            'order' => 'DESC'
        ));
    endif;

    // If images are found, proceed
    if (!empty($images)) :

        $indicators = '';
        $items = '';

        $i=0; foreach ($images as $image) :

            $act = ($i==0) ? 'active' : '';
            $rand=rand();
            if(get_post_meta( $image->ID, 'destination_url', true )) :
            $items .= '
            <div class="carousel-item">
                <a href="'.esc_url(get_post_meta( $image->ID, 'destination_url', true )).'"><img alt="" src="'. $image->guid.'"></a>
            </div>
            ';
            else :
                $items .= '
            <div class="carousel-item">
                <img alt="" src="'. $image->guid.'">
            </div>
            ';
            endif;

        $i++; endforeach;

        // BEGIN OUTPUT

        $output .= '<div class="container-logos"> ';

            // ITEMS
            $output .= '<div id="logos-carousel" class="owl-carousel light-text">' .$items. '</div>
            ';

      
 
        // END OUTPUT

        return $output;

    endif;

    // Return nothing
    return;
}

add_shortcode('dikka_carousel','dikka_shortcode_carousel');
function dikka_shortcode_carousel ($attr, $content) {

    global $post;

    // Little fix as the order of arguments is not the same when
    // in "gallery" post formats
    if (!empty($content) && is_array($content)) {
        $attr = $content;
        if (!empty($attr[0])) $content = $attr[0];
        else $content = '';
    }

    $output = $content;

    // OrderBy
    $orderby = 'post__in';
    if (!empty($attr['orderby']))
        $orderby = sanitize_sql_orderby ($attr['orderby']);

    // If we got an include attr
    if (!empty($attr['ids']))
        $images = get_posts(array('include' => $attr['ids'], 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => 'ASC', 'orderby' => $orderby));

    // If we do not have images yet...
    if (empty($images)) :
        // Get Post Images
        $images = get_children(array(
            'post_parent' => $post->ID,
            'post_type' => 'attachment',
            'post_mime_type' => 'image',
            'numberposts' => 100,
            'orderby' => $orderby,
            'order' => 'DESC'
        ));
    endif;

    // If images are found, proceed
    if (!empty($images)) :

        $indicators = '';
        $items = '';

        $i=0; foreach ($images as $image) :

            $act = ($i==0) ? 'active' : '';
            $rand=rand();
            

            $items .= '

            <li><img src="'. $image->guid.'" alt="'.get_the_title($image->ID).'"/></li>
            ';

        $i++; endforeach;

        // BEGIN OUTPUT

        $output .= '<div id="slider2" class="flexslider">';
        // ITEMS
        $output .= '<ul class="slides">' .$items. '</ul>';

        $output .= '</div>';

        // END OUTPUT

        return $output;

    endif;

    // Return nothing
    return;
}

/* To automatically execute carousel shortcode when post type is "gallery" */
add_action('post_gallery', 'dikka_shortcode_carousel', 10, 2);



if ( ! function_exists( 'testimonial_shortcode' ) ) {
 
    function testimonial_shortcode( $atts ) {
        $test=extract( shortcode_atts(
                array(
                    // category slug attribute - defaults to blank
                    'category' => '',
                    // full content or excerpt attribute - defaults to full content
                    'excerpt' => 'false',
                ), $atts )
        );
         
        $output = '';
         
        // set the query arguments
        $query_args = array(
            // show all posts matching this query
            'posts_per_page'    =>   -1,
            // show the 'testimonial' custom post type
            'post_type'         =>   'testimonial',
            // tell WordPress that it doesn't need to count total rows - this little trick reduces load on the database if you don't need pagination
            'no_found_rows'     =>   true,
        );
         
        // get the posts with our query arguments
        $testimonial_posts = get_posts( $query_args );
        $output .= '<div id="testimonials-slider" class="flexslider '.$atts['layout'].'"><ul class="slides styled-list">';
       

         
        // handle our custom loop
        foreach ( $testimonial_posts as $post ) {
            setup_postdata( $post );
            $testimonial_item_title = get_the_title( $post->ID );
            $testimonial_item_name =esc_attr(get_post_meta( $post->ID, 'testimonial_person_name', true ));
            $testimonial_item_post =esc_attr(get_post_meta( $post->ID, 'testimonial_person_post', true ));
            $testimonial_item_image =esc_url(get_post_meta( $post->ID, 'testimonial_person_image', true ));
            $testimonial_item_url =esc_url(get_post_meta( $post->ID, 'testimonial_person_url', true ));
            
            $testimonial_item_content = get_the_content();
            $output .= '
                                
                                        <li class="testimonials-slide">
                                            <div class="testimonials-slide-content container">';
                                                if(isset($testimonial_item_image) && $testimonial_item_image!='') {
                                                $output.='<div class="img-container">
                                                <img title="" src="' . $testimonial_item_image . '" alt="">
                                                </div>';
                                                }
                                                $output.='                                               
                                                    <div class="text-container">
                                                    <p><i class="fa fa-quote-left"></i> ' . $testimonial_item_content . ' <i class="fa fa-quote-right"></i></p>
                                                </div>
                                                
                                                <div class="t-author"><p><a href="'.$testimonial_item_url.'">' . $testimonial_item_name . '</a>, ' . $testimonial_item_post . '</p></div>
                                            </div>
                                        </li>
                                   ';
               
        }
         
        wp_reset_postdata();
        $output .= ' </ul></div>';      
         
        return $output;
    }
 
    add_shortcode( 'testimonial_slider', 'testimonial_shortcode' );
}