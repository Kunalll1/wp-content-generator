<?php

/**
 * Fired during plugin activation
 *
 * @link       https://designomate.com/
 * @since      1.0.0
 *
 * @package    Foss Engine
 * @subpackage Foss_Engine/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Foss Engine
 * @subpackage Foss_Engine/includes
 */
class Foss_Engine_Activator
{

    /**
     * Set up the database tables and plugin options on activation.
     *
     * @since    1.0.0
     */
    public static function activate()
    {
        global $wpdb;

        $charset_collate = $wpdb->get_charset_collate();
        $table_name = $wpdb->prefix . 'foss_engine_topics';

        // Create the topics table
        $sql = "CREATE TABLE $table_name (
            id mediumint(9) NOT NULL AUTO_INCREMENT,
            topic text NOT NULL,
            content longtext,
            status varchar(20) DEFAULT 'pending' NOT NULL,
            created_at datetime DEFAULT CURRENT_TIMESTAMP NOT NULL,
            updated_at datetime DEFAULT CURRENT_TIMESTAMP NOT NULL,
            PRIMARY KEY  (id)
        ) $charset_collate;";

        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        dbDelta($sql);

        // Set default options
        add_option('foss_engine_openai_key', '');
        add_option('foss_engine_prompt_template', 'Write a comprehensive blog post about [TOPIC]. Include an introduction, several key points, and a conclusion. The content should be informative and engaging.');
        add_option('foss_engine_model', 'gpt-3.5-turbo');

        // Add new default options for Deepseek integration
        add_option('foss_engine_provider', 'openai');
        add_option('foss_engine_deepseek_key', '');
        add_option('foss_engine_deepseek_model', 'deepseek-chat');
    }
}
