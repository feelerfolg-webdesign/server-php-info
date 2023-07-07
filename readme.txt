=== WP PHP Server Info ===
Contributors: feelErfolg webdesign
Tags: PHP version, PHP information, Server Details, Dashboard Widget, Webserver Info, Server Information, Memory Limit, Max Execution Time, Input Variables Limit, Upload Max Filesize, Post Max Size, Gzip status

Requires at least: 4.6
Tested up to: 6.2.2
Stable tag: 1.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Get detailed insights about your server environment directly in your WordPress dashboard with WP PHP Server Info.

== Description ==

Discover key information about your server setup with ease! WP PHP Server Info is an essential tool for site administrators, developers or WordPress enthusiasts looking to stay informed about their hosting environment.

Features that come with WP PHP Server Info include:

* Display of webserver software.
* Display of operating system and architecture.
* Overview of PHP version and settings such as memory limit, time limit, max input variables, max input time, upload max file size and post max size.
* Information on other important server components like cURL version, SUHOSIN status, Imagick status and Gzip status.

Please note that only users with 'manage_options' permission can access this data to ensure security.

Plugin URL: https://wordpress.org/plugins/wp-php-server-info/

== Installation ==

1. Log into your WordPress admin dashboard.
2. Navigate to 'Plugins' > 'Add New'.
3. In the search bar, type 'WP PHP Server Info' and hit Enter.
4. Look for 'WP PHP Server Info' in the search results and click on the 'Install Now' button.
5. After installation, click on the 'Activate' button to enable the plugin on your site.

Or Manual Installation:

1. Download the plugin from WordPress.org to your computer.
2. Extract the zip file which should result in a directory named `wp-php-server-info`.
3. Upload this folder to `/wp-content/plugins/` directory of your WordPress installation using FTP or File Manager from hosting control panel.
4. Log into your WordPress admin dashboard.
5. Navigate to 'Plugins'.
6.Find 'WP PHP Server Info' in plugins list and click on 'Activate'.

After activation, a new widget will be added showcasing all server-related information in main WordPress dashboard.

== Frequently Asked Questions ==

= Who can view this information? =

Only users who have been granted the “manage_options” permission (usually administrators) can view this information due to its sensitive nature.

= Where is the server information displayed? =

The server-related information is displayed on your WordPress dashboard. Once the plugin is activated, a new widget named “WP PHP Server Info” will appear in the dashboard.

= What kind of server info does this plugin provide? =

The WP PHP Server Info plugin provides you with:

* Webserver software.
* Operating system and architecture.
* PHP version and settings like memory limit, max execution time, max input variables, max input time, upload max file size and post max size.
* Status of other important server components such as cURL version, SUHOSIN status, Imagick status, and Gzip status.

= Why am I seeing no information / empty widget? =

If you see an empty widget with no information on your dashboard, it’s likely that your user account doesn’t have the required administrator privileges (“manage_options” permission). Only administrators are able to view the server-related information.

= Is this plugin lightweight? =

Yes, the WP PHP Server Info plugin is designed to be lightweight. It provides essential server information without adding unnecessary overhead or impacting the performance of your WordPress site. The plugin aims to efficiently retrieve and display server details in a concise and user-friendly manner. It is optimized to minimize resource usage and ensure a smooth user experience.

= How do I uninstall the plugin? =

You can simply deactivate and delete the plugin by navigating to “Plugins” > “Installed Plugins” from your WordPress dashboard.

Please note: Uninstalling or deactivating the plugin removes the dashboard widget and stops displaying the server information. However, it does not affect your actual server settings or configurations. 

= Is it safe to display such detailed server information? =

Yes, it’s safe. The WP PHP Server Info plugin only displays this data for administrators - users with “manage_options” permission. This data is not made public or shared with third parties. Nevertheless, as an admin you should always ensure that your login is secure.

== Disclaimer ==

The use of this code is at your own risk. The developer provides no warranty or guarantee regarding the functionality or security of the code. Any damages that may arise from the use of the code are the responsibility of the user.


== Changelog ==
= 1.3 =
* Updated readme.txt file for better understanding of plugin's features and instructions.
