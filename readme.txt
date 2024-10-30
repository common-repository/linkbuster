=== Plugin Name ===
Contributors: brianmyrick
Link: http://www.interversant.com/
Tags: link, css
Requires at least: 3.0.1
Tested up to: 3.4
Stable tag: 4.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Creates a widget that allows an admin to specify a CSS Path. In that CSS Path all links will be disabled.

== Description ==

There are plenty of occasions where I'd love to use a plugin from another developer, but I need to disable links that the plugin creates. For instance, Genesis Responsive Slider is awesome, but sometimes I don't want the links to be active. I just want to show the slider content. LinkBuster will allow you to specify a CSS Path (a div class or ID, etc) and will replace all the hrefs with # so they links are effectively disabled.

The plugin creates a widget. That widget can be placed in any widget area. Multiple LinkBuster widgets can be used to disable links in separate CSS paths.

== Installation ==

1. Upload to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Use Firebug or similar tool to identify the CSS Path that contains the links you want to disable.
4. Drag the LinkBuster widget to a widget area, and enter that CSS Path.

== Changelog ==

= 0.1 =
* Initial release.
