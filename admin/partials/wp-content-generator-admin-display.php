<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://designomate.com/
 * @since      1.0.0
 *
 * @package     Foss Engine
 * @subpackage WP_Content_Generator/admin/partials
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}
?>

<div class="wrap wp-content-generator-admin">
    <h1><?php echo esc_html(get_admin_page_title()); ?></h1>

    <div class="notice notice-info">
        <p><?php esc_html_e('Welcome to the WordPress Content Generator. This plugin helps you generate content using OpenAI based on topics from a CSV file.', 'foss_engine'); ?></p>
    </div>

    <div class="wp-content-generator-container">
        <div class="wp-content-generator-section">
            <h2><?php esc_html_e('Getting Started', 'foss_engine'); ?></h2>
            <ol>
                <li><?php
                    printf(
                        /* translators: %s: URL to settings page */
                        esc_html__('First, go to the %s page and enter your OpenAI API key.', 'foss_engine'),
                        '<a href="' . esc_url(admin_url('admin.php?page=wp-content-generator-settings')) . '">' . esc_html__('Settings', 'foss_engine') . '</a>'
                    );
                    ?></li>
                <li><?php esc_html_e('Prepare a CSV file with a list of topics. Each topic should be on a new line.', 'foss_engine'); ?></li>
                <li><?php
                    printf(
                        /* translators: %s: URL to topics page */
                        esc_html__('Upload your CSV file in the %s section.', 'foss_engine'),
                        '<a href="' . esc_url(admin_url('admin.php?page=wp-content-generator-topics')) . '">' . esc_html__('Topics', 'foss_engine') . '</a>'
                    );
                    ?></li>
                <li><?php esc_html_e('Generate content for each topic, review, edit, and publish as needed.', 'foss_engine'); ?></li>
            </ol>
        </div>

        <div class="wp-content-generator-section">
            <h2><?php esc_html_e('Features', 'foss_engine'); ?></h2>
            <ul>
                <li><?php esc_html_e('Import topics from a CSV file', 'foss_engine'); ?></li>
                <li><?php esc_html_e('Generate content using OpenAI for each topic', 'foss_engine'); ?></li>
                <li><?php esc_html_e('Edit generated content before publishing', 'foss_engine'); ?></li>
                <li><?php esc_html_e('Publish content as WordPress posts or pages', 'foss_engine'); ?></li>
                <li><?php esc_html_e('Regenerate content if needed', 'foss_engine'); ?></li>
                <li><?php esc_html_e('Track the status of each topic', 'foss_engine'); ?></li>
            </ul>
        </div>

        <div class="wp-content-generator-section">
            <h2><?php esc_html_e('CSV Format', 'foss_engine'); ?></h2>
            <p><?php esc_html_e('Your CSV file should have one topic per line. The first column will be used as the topic.', 'foss_engine'); ?></p>
            <p><?php esc_html_e('Example:', 'foss_engine'); ?></p>
            <pre>Best practices for WordPress security
How to improve website loading speed
Benefits of using a CDN for your website
Top WordPress plugins for SEO</pre>
            <p><?php esc_html_e('You can also include a header row if you prefer:', 'foss_engine'); ?></p>
            <pre>topic
Best practices for WordPress security
How to improve website loading speed
Benefits of using a CDN for your website
Top WordPress plugins for SEO</pre>
        </div>

        <div class="wp-content-generator-section">
            <h2><?php esc_html_e('Quick Access', 'foss_engine'); ?></h2>
            <div class="wp-content-generator-quick-access">
                <a href="<?php echo esc_url(admin_url('admin.php?page=wp-content-generator-settings')); ?>" class="button button-primary"><?php esc_html_e('Settings', 'foss_engine'); ?></a>
                <a href="<?php echo esc_url(admin_url('admin.php?page=wp-content-generator-topics')); ?>" class="button button-primary"><?php esc_html_e('Manage Topics', 'foss_engine'); ?></a>
            </div>
        </div>
    </div>
</div>