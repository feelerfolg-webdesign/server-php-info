<?php
/**
* Plugin Name: WP PHP Server Info
*
* Description: Displays server information like php version & configuration, webserver and operating software and more in your wordpress dashboard.
* Version: 1.3
* Author: feelErfolg webdesign
* Author URL: https://feelerfolg-webdesign.de
* License: GPLv2 or later
* License URI: http://www.gnu.org/licenses/gpl-2.0.html
* GitHub Plugin URI: https://github.com/feelerfolg-webdesign/wp-php-server-info
* Text Domain: wp-php-server-info
**/

add_action('wp_dashboard_setup', 'wp_php_server_info_add_dashboard_widget');

function wp_php_server_info_add_dashboard_widget() {
    if (current_user_can('manage_options')) {
        wp_add_dashboard_widget(
            'wp_php_server_info_dashboard_widget',
            'WP PHP Server Info',
            'wp_php_server_info_display'
        );
    }
}

function wp_php_server_info_display() {

    // Check if the user has admin privileges before displaying information.
    if (!current_user_can('manage_options')) {
        echo 'You do not have permission to view this information.';
        return;
    }

    echo '<ul>';

    // Display Webserver info
    echo '<li><strong>Webserver:</strong> ' . htmlentities($_SERVER['SERVER_SOFTWARE'], ENT_QUOTES, 'UTF-8') . '</li>';

    // Display Operating System info 
    echo '<li><strong>Operating System:</strong> ' . htmlentities(php_uname('s'), ENT_QUOTES, 'UTF-8') . '</li>';

     // Display Server Architecture info 
     echo '<li><strong>Server Architecture:</strong> ' . htmlentities(php_uname('m'), ENT_QUOTES, 'UTF-8') . '</li>';

     // Display PHP Version 
     echo '<li><strong>PHP Version:</strong> ' . htmlentities(phpversion(), ENT_QUOTES, 'UTF-8') . '</li>';

     // Display PHP SAPI 
     echo '<li><strong>PHP SAPI:</strong> '.htmlentities(php_sapi_name(), ENT_QUOTES, "UTF-8").'</li>';
    
     // Display PHP memory limit  
     echo '<li><strong>PHP Memory Limit:</strong> '.ini_get('memory_limit').'</li>';

     // Display PHP time limit  
     echo '<li><strong>PHP Time Limit:</strong> '.ini_get('max_execution_time').'</li>';

     // Display PHP max input variables  
     echo '<li><strong>PHP Max Input Variables:</strong> '.ini_get('max_input_vars').'</li>';

     // Display Max input time  
     echo '<li><strong>Max Input Time:</strong> '.ini_get('max_input_time').'</li>';

     // Display Upload max filesize  
     echo '<li><strong>Upload Max Filesize:</strong> '.ini_get('upload_max_filesize').'</li>';

      // Display PHP post max size  
      echo '<li><strong>Post Max Size:</strong> '. ini_get ('post_max_size').'</li>';

      $curl_version = curl_version();
      if($curl_version) {  
          printf('<li><strong>cURL version</strong>: %s</li>', htmlentities($curl_version['version'], ENT_QUOTES, "UTF-8"));  
       }

       if(extension_loaded ('suhosin'))
       {
           echo "<li><strong>SUHOSIN Status</strong>: Enabled</li>";
       } else {
           echo "<li><strong>SUHOSIN Status</strong>: Disabled</li>";
       }


       if (extension_loaded ('imagick')) {
           $imagick = new Imagick();

           printf('<li><strong>Imagick status</strong>: Enabled<br/>Version: %s<br/></li>', htmlentities ($imagick->getVersion()['versionString'], ENT_QUOTES, "UTF-8"));


       } else {
           echo "<li><strong>Imagick status</strong>: Disabled </li>";
       }


      if(function_exists ('gzclose')) {  
          echo "<li><b>Gzip status</b>: Enabled</li>"; 
      } else {  
          printf("<li><b>Gzip status</ b>: Not Installed</li>");
      }  

      
echo '</ul>';
}
?>