<?php

class Social_Links_Widget extends WP_Widget {

	/**
	 * Sets up the widgets name etc
	 */
	public function __construct() {
		parent::__construct(
			'social_links_widget',
			__('Social Links Widget', 'sl domain'),
			array('description' => __('Outputs social icons linked to profiles', 'sl_domain'), )
		);
	}

	/**
	 * Outputs the content of the widget
	 *
	 * @param array $args
	 * @param array $instance
	 */
	public function widget( $args, $instance ) {
		?>
		Test Frontend
		<?php
	}

	/**
	 * Outputs the options form on admin
	 *
	 * @param array $instance The widget options
	 */
	public function form( $instance ) {
        // Call Form Function
        $this->getForm($instance); // when calling another function within the same class, use $this


	}

	/**
	 * Processing widget options on save
	 *
	 * @param array $new_instance The new options
	 * @param array $old_instance The previous options
	 *
	 * @return array
	 */
	public function update( $new_instance, $old_instance ) { // Update Links for Form
		// processes widget options to be saved
        $instance = array(
          'facebook_link' => (!empty($new_instance['facebook_link'])) ? strip_tags($new_instance['facebook_link']) : '',
          'twitter_link' => (!empty($new_instance['twitter_link'])) ? strip_tags($new_instance['twitter_link']) : '',
          'linkedin_link' => (!empty($new_instance['linkedin_link'])) ? strip_tags($new_instance['linkedin_link']) : '',
          'facebook_icon' => (!empty($new_instance['facebook_icon'])) ? strip_tags($new_instance['facebook_icon']) : '',
          'twitter_icon' => (!empty($new_instance['twitter_icon'])) ? strip_tags($new_instance['twitter_icon']) : '',
          'linkedin_icon' => (!empty($new_instance['linkedin_icon'])) ? strip_tags($new_instance['linkedin_icon']) : '',
          'icon_width' => (!empty($new_instance['icon_width'])) ? strip_tags($new_instance['icon_width']) : ''
        );

        return $instance;

	}

	/**
	 * Sets and Displays Form
	 *
	 * @param array $instance The widget options
	 */
	public function getForm( $instance ) {
	    // Get Facebook Link
        if(isset($instance['facebook_link'])){ // if facebook link exists
            $facebook_link = esc_attr($instance['facebook_link']);
        } else {
            $facebook_link = 'http://www.facebook.com'; // if no link exists, default to FB homepage
        }

		// Get Twitter Link
		if(isset($instance['twitter_link'])){ // if twitter link exists
			$twitter_link = esc_attr($instance['twitter_link']);
		} else {
			$twitter_link = 'http://www.twitter.com'; // if no link exists, default to twitter homepage
		}

		// Get LinkedIn Link
		if(isset($instance['linkedin_link'])){ // if linkedin link exists
			$linkedin_link = esc_attr($instance['linkedin_link']);
		} else {
			$linkedin_link = 'http://www.linkedin.com'; // if no link exists, default to FB homepage
		}

		// ICONS

        // Get Facebook Icon
        if (isset($instance['facebook_icon'])) {
            $facebook_icon = esc_attr($instance['facebook_icon']);
        }
        else{
            $facebook_icon = plugins_url() . '/social-links/img/facebook.png';
        }

		// Get Twitter Icon
		if (isset($instance['twitter_icon'])) {
			$twitter_icon = esc_attr($instance['twitter_icon']);
		}
		else{
			$twitter_icon = plugins_url() . '/social-links/img/twitter.png';
		}

		// Get LinkedIn Icon
		if (isset($instance['linkedin_icon'])) {
			$linkedin_icon = esc_attr($instance['linkedin_icon']);
		}
		else{
			$linkedin_icon = plugins_url() . '/social-links/img/linkedin.png';
		}

		// Get Icon Size
        if (isset($instance['icon_width'])) {
            $icon_width = esc_attr($instance['icon_width']);
        }
        else{
            $icon_width = 32;
        }

        ?>

        <h4>Facebook</h4>
        <p>
        <label for="<?php echo $this->get_field_id('facebook_link'); ?>"><?php _e('Link:'); ?></label>
           <input class="widefat" id="<?php echo $this->get_field_id('facebook_link'); ?>" name="<?php echo $this->get_field_name('facebook_link'); ?>" type="text" value="<?php echo esc_attr($facebook_link); ?>">
        </p>
        <p>
        <label for="<?php echo $this->get_field_id('facebook_icon'); ?>"><?php _e('Icon:'); ?></label>
           <input class="widefat" id="<?php echo $this->get_field_id('facebook_icon'); ?>" name="<?php echo $this->get_field_name('facebook_icon'); ?>" type="text" value="<?php echo esc_attr($facebook_icon); ?>">
        </p>
        <h4>Twitter</h4>
        <p>
        <label for="<?php echo $this->get_field_id('twitter_link'); ?>"><?php _e('Link:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('twitter_link'); ?>" name="<?php echo $this->get_field_name('twitter_link'); ?>" type="text" value="<?php echo esc_attr($twitter_link); ?>">
        </p>
        <p>
        <label for="<?php echo $this->get_field_id('twitter_icon'); ?>"><?php _e('Icon:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('twitter_icon'); ?>" name="<?php echo $this->get_field_name('twitter_icon'); ?>" type="text" value="<?php echo esc_attr($twitter_icon); ?>">
        </p>
        <h4>LinkedIn</h4>
        <p>
        <label for="<?php echo $this->get_field_id('linkedin_link'); ?>"><?php _e('Link:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('linkedin_link'); ?>" name="<?php echo $this->get_field_name('linkedin_link'); ?>" type="text" value="<?php echo esc_attr($linkedin_link); ?>">
        </p>
        <p>
        <label for="<?php echo $this->get_field_id('linkedin_icon'); ?>"><?php _e('Icon:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('linkedin_icon'); ?>" name="<?php echo $this->get_field_name('linkedin_icon'); ?>" type="text" value="<?php echo esc_attr($linkedin_icon); ?>">
        </p>
        <?php
	}
}