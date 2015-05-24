Theme Name: Tiny Forge
Theme URI: http://mtomas.com/1/tiny-forge-free-mobile-first-wordpress-theme
Author: Tomas Mackevicius
Author URI: http://mtomas.com
Donate link: http://mtomas.com/about-me/
Contributors: TomasM
Version: 1.6.1
Requires at least: 3.6
Tested up to: 4.2.2
Copyright: Tomas Mackevicius (see Copyright section below for more details)
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html


IMPORTANT!
==========

Tiny Forge was succeeded by Tiny Framework theme, please use Tiny Framework for all new projects! For more information please see:

	https://wordpress.org/support/topic/important-use-tiny-framework-theme-for-all-new-projects


How to use Tiny Forge and its child themes: a comprehensive guide
=================================================================

Tiny Forge was succeeded by Tiny Framework. Main guide was rewritten for the new theme, but many concepts remain the same for both themes:

http://mtomas.com/389/tiny-forge-framework-child-themes-comprehensive-guide

Older articles, related only to Tiny Forge:

http://mtomas.com/284/tiny-forge-user-guide


Support
=======

Need personalized (paid) support? If you need a help extending or modifying this theme, you can always contact me for a commercial support:

	http://mtomas.com/wordpress-theme-support-consultation/

	Tomas Mackevicius - http://mtomas.com - services@mtomas.com - @TomasMack
	
WordPress.org - free, but very limited support forum, that deals only with the issues of existing theme code:

	http://wordpress.org/support/theme/tiny-forge

Tiny Forge theme is based on default WordPress theme Twenty Twelve. If you have any general support questions, good place to start is Twenty Twelve support forum:

	http://wordpress.org/support/theme/twentytwelve/


Description
===========

Tiny Forge theme encompass all the best features of the default WordPress themes in one place, plus more usability and code improvements!

It features elegant mobile-first HTML5 ready structure of Twenty Twelve, custom per-post headers and three footer widgets from Twenty Eleven,
icon webfont support from Twenty Thirteen, Google Fonts support and Schema.org microdata format support. It's all there, you have everything in one neat package. Also you can upload your custom Header Logo to display it next to Site Title and Description.

Along with the main theme you will find an example of a child theme - an easy way to start developing with child themes! Tiny Forge can be used as a learning tool or your own little web development "framework". 

With its unique "Coding Tips system" Tiny Forge helps to understand how to extend parent themes and build your own child themes, hacking them the way you want it. You get the best coding examples from default WordPress themes and the best hacks from the child theme.

To support future development of this theme you can contribute directly by donating with PayPal (if you prefer, you can visit PayPal.com directly and send a payment to services@mtomas.com):

https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=CYA7XMLU8ENS2&lc=US&item_name=Free-WordPress-themes-by-TomasM&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted


Overview of main theme features
===============================

- Elegant, readable and fully responsive theme built on HTML5 and mobile-first layout
- Integrated Schema.org microdata format support - good for Google index and rank building
- Custom Headers for posts and pages (including random header rotator) - ported from Twenty Eleven
- Custom Header Logo to display it next to Site Title and Description
- Styling for post formats on both index and single views
- An optional "Open Sans" display font (enabled by default) and Google Fonts support (optional)
- Icon webfont support - as seen in Twenty Thirteen, only better - using Elusive Icons!
- Front page template with its own widgets
- Full-width (no-sidebar) page template
- Page template to display a list of links (blogroll). Blogroll feature is available as a plugin: Link Manager
- 3 footer widgets - ported from Twenty Eleven
- Included a starter child theme - easy way to make it your own!
- LESS dynamic stylesheet language support! Welcome to rapid development age - change the look and feel of your site in minutes! (provided via child themes)


Full overview of Tiny Forge theme
---------------------------------

http://mtomas.com/1/tiny-forge-free-mobile-first-wordpress-theme


Theme localization (Translations)
=================================

Attention Tiny Forge translators! Most likely you will be using Poedit software to prepare the translation files. When you will be updating your translation, please use the menu option:

Top menu > Catalog > Update from POT file...

and select included tinyforge.pot file. This is necessary, because just by scanning sources you will not get all strings that are required for the full theme translation. Read more about translating Tiny Forge theme:

http://mtomas.com/389/tiny-forge-framework-child-themes-comprehensive-guide#Theme-localization-translations


Quick start guide
=================

1. To make it easy for you to change the look of your website and to retain the ability to update Tiny Forge parent theme, I recommend using Tiny Forge bundled child theme. New WordPress users do not know how to create a child theme, so for that purpose I included an example of Tiny Forge child theme. You will find it under inc/tinyforge-child-theme-example.zip

Before activating child theme, you have two options: retain the ability to update the child theme or not. Child themes receive updates less frequently, but sometimes they may have new useful functions implemented. First choice (retain the ability to update) will be good for people who change things using only CSS styles. In this case you would activate child theme, but you would not change any actual theme file, but append new CSS styles with the help of plugin, like:

	http://wordpress.org/plugins/imporved-simpler-css/

	http://wordpress.org/plugins/simple-custom-css/

	http://wordpress.org/plugins/my-custom-css/

	http://wordpress.org/plugins/custom-css-manager-plugin/

	http://wordpress.org/plugins/pc-custom-css/

With the arrival of new theme version, you could overwrite (or auto-update) theme files, because all your custom CSS styles would be safely stored in the database.

If you plan to make more considerable changes to the theme, I would suggest changing the child theme name, to avoid it to be auto-updated by mistake (in this case all theme files would be overwritten and you would loose all your changes). Open style.css file and change this line:

	Theme Name: Tiny Forge Child

to something like:

	Theme Name: Tiny Forge Child Custom

To install child theme, unzip file (inc/tinyforge-child-theme-example.zip) and upload this child theme as a separate theme alongside with Tiny Forge parent theme (both themes should be uploaded for child theme to work). 

Activate Child theme and you're ready to go! From that point all of your changes will be done in the child theme. If you need to modify a file, but it isn't present in your child theme's folder, just copy it there from the Tiny Forge theme. 

As a bonus Tiny Forge child theme has very nice search field in the top menu area (ported from Twenty Thirteen theme) and two new header images to give you an example on how to change the default header images in the child theme. To activate search field you have to create a menu and assign it as primary:

Admin. panel > Appearance > Menus

At the top see: "Edit your menu below, or create a new menu." and create a menu if it's a fresh WordPress install. Then at the bottom check "Theme locations: Primary Menu" and save the menu.

Read more about child themes:

http://codex.wordpress.org/Child_Themes

2. In WordPress Admin panel go to Appearance/Widgets, 
expand Footer Copyright Widget Area on the right side,
drag standard Text widget from the left side to the widget area, 
enter your copyright text in the text field (you may leave the title field empty), something like:

	`
    &copy; 2015 Your Name. All rights reserved
	`
	If you would like to support this project, you can add the link to Tiny Forge theme:
	
	`
	&copy; 2015 Your Name. All rights reserved. Using <a href="http://mtomas.com/1/twentytwelve-xtended-wordpress-theme-for-learning-and-site-building">Tiny Forge theme</a>.
	`

	P.S. please do not copy backticks - they are here to make this document compatible with Markdown syntax.

3. Go to Theme Customizer (Admin Panel Menu > Appearance > Customize) and see if you need to change any visual aspects of your site.

	- If you already created menu, assign it as primary in Navigation. You can create a menu and also assign it as primary in:
	
		Admin. panel > Appearance > Menus
		
		At the top see: "Edit your menu below, or create a new menu." and create a menu if it's a fresh WordPress install. Then at the bottom check "Theme locations: Primary Menu" and save the menu.

	- If you will choose to upload custom Header Logo (display it next to Site Title and Description), I recommend to size its height to 85px.

4. Next, open functions.php file in a text editor and find sections:

	- 5.9 - Add optional meta tags, scripts to head (2.2 - in child themes)

	- 12.0 - Other functions (3.0 - in child themes)

	- Check if you need to enable (uncomment) any of the functions there.

	- If you enabled human.txt meta tag, open human.txt file in text editor and update it with your information.

5. Make it look clean (optional) Personally I'm not a fan of displaying a bunch of meta data on index page or on archive pages. I try to keep it as clean as possible 
to not mess with readers attention. But I had to enable all that meta info to pass theme evaluation. However it is very easy to fix it. To disable entry meta, located below the post in index/archive view, open style.css file in a text editor 
and search for Tip30, then uncomment next CSS block to hide entry meta section (with author, categories, tags) in the Index page and archive listings.

6. If you want to use icon webfont for social networks (as you can see it in the theme screenshot), use standard text widget in the Main Sidebar Widget 
(same instructions as with Footer Copyright Widget) with text like this:

	```    
	<a href="http://address-to-about-me-page" class="icon-webfont el-icon-user" title="Contact me"></a> 
	<a href="http://address-to-facebook-account" class="icon-webfont el-icon-facebook" title="Facebook"></a> 
	<a href="http://www.linkedin.com/in/your-profile/" class="icon-webfont el-icon-linkedin" title="LinkedIn"></a> 
	<a href="http://profiles.wordpress.org/your-wp-name" class="icon-webfont el-icon-wordpress" title="WordPress.org"></a> 
	<a href="http://twitter.com/your-twitter-handle" class="icon-webfont el-icon-twitter" title="Twitter"></a> 
	<a href="https://plus.google.com/your-g-plus-account-number" class="el-icon-webfont icon-googleplus" title="Google+" rel="author"></a> 
	<a href="http://github.com/your-github-name" class="icon-webfont el-icon-github-text" title="Github"></a>
	```

	P.S. please do not copy backticks - they are here to make this document compatible with Markdown syntax.

For more information please see - How to use Tiny Forge and its child themes: a comprehensive guide:

http://mtomas.com/389/tiny-forge-framework-child-themes-comprehensive-guide


Tiny Forge theme at WordPress.org
=================================

http://wordpress.org/themes/tiny-forge


Showcase your Tiny Forge site or mod!
=====================================

http://mtomas.com/363/showcase-tiny-forge-theme-site-mod


Coding tips you will find in Tiny Forge theme and related child themes
======================================================================

Just open related to the tip files in a text editor and search for a tip number, for example "Tip03" to find the code.

For more information please see - How to use Tiny Forge and its child themes: a comprehensive guide:

http://mtomas.com/389/tiny-forge-framework-child-themes-comprehensive-guide


Head, header (01-20)
--------------------

- Tip01 - Properly include CSS and JavaScript files via functions.php (in child themes) - http://mtomas.com/27/
- Tip02 - Optional code to enable favicon (functions.php, favicon.ico) (also in child themes)
- Tip03 - We are people, not machines. Read more at: humanstxt.org. If you enabled humans.txt meta tag, open /inc/humans.txt file in text editor and update it with your own information (functions.php, inc/humans.txt) (also in child themes)
- Tip04 - Reminder to enable JavaScript. Tiny Forge uses icon webfont, which will not be rendered properly if JavaScript is disabled (header.php, style.css)
- Tip05 - 
- Tip06 - Custom headers for posts and pages (header.php, style.css, also see Tip07)
- Tip07 - Add new image size for custom post/page headers and select default header image (functions.php) (also in child themes)
- Tip08 - Remove junk from head - disabled by default (functions.php) (also in child themes)
- Tip09 - Remove WordPress version info from head and feeds - better for security reasons - disabled by default (functions.php) (also in child themes)
- Tip10 - Add Twenty Thirteen search form to WordPress nav menu (functions.php, style.css) (in child themes)
- Tip11 - Make site title and site description float (style.css) (in child themes)
- Tip12 - Disable header image for the Front Page Template to have classic Twenty Twelve front page look (style.css) (also in child themes)
- Tip13 - Remove Open Sans (from Google Fonts) as default font (functions.php) (in child themes)


Content (21-50)
---------------

- Tip21 - Icon webfont support implementation and examples (style.css, category.php, footer.php)
- Tip22 - Improve font rendering and fallback in Linux - http://www.onedesigns.com/tutorials/font-families-for-cross-compatible-typography (style.css)
- Tip23 - Properly resize videos, inserted with oembed - http://wordpress.org/support/topic/properly-resizing-videos-possible-code-addition (functions.php, style.css)
- Tip24 - .no-border CSS class - use it in case you need to display an image without any borders or shadows, include "no-border" class for the desired post image (style.css)
- Tip25 - Mark the links that will open in a new window with special icon, usually these are the links to external resources (style.css)
- Tip25b - Disable special icons, that marks the links that will open in a new window (style.css) (only in child themes)
- Tip25c - .no-link-icon CSS class - use it to disable special icon, that marks the links that will open in a new window for an individual link, include "no-link-icon" class for the desired link (style.css)
- Tip26 - Print HTML bellow post title with meta information for the current post date/time and author (functions.php, content.php)
- Tip26b - Print HTML bellow post title with meta information (date/time and author) for the index/archive views in MOBILE and/or NORMAL view (style.css) (also in child themes)
- Tip27 - Hide previous article - next article navigation below the content of a post (style.css)
- Tip28 - Remove curly quotes in WordPress (functions.php)
- Tip28b - Enable curly quotes in WordPress (functions.php) (only in child themes)
- Tip29 - Style navigation arrows for post listing (next/previous page navigation) (functions.php) (in child themes)
- Tip30 - Hide entry meta section, located below the post (with author, categories, tags) in the Index page and archive listing (style.css)
- Tip31 - Google Fonts support - disabled by default (functions.php) (also in child themes)
- Tip32 - Add shadow to post/page title (style.css) (also in child themes)
- Tip33 - Enable hyphenation of text for <article>. Please note that automatic hyphenation can reduce accesibility of the theme - it can cause strange pronunciation with screen readers (style.css) (also in child themes)
- Tip34 - Display author info card at the bottom of posts on a single author website - disabled by default (functions.php, style.css) (also in child themes)


Sidebar (51-60)
---------------

- Tip51 - Show children items of Sidebar category/page menu for selected parent category/page only (style.css)


Footer (61-80)
--------------

- Tip61 - Discreet link to WordPress Admin panel in the footer (footer.php, style.css)
- Tip62 - Add side borders for the middle footer widget - to better separate widgets visually (style.css) (also in child themes)
- Tip63 - Disable footer widgets for the Front Page Template to have classic Twenty Twelve front page look (style.css) (also in child themes)


Additional tips (81-100)
------------------------

- Tip81 - Completely disable the Post Formats UI in the post editor screen - disabled by default (functions.php) (also in child themes)
- Tip82 - No more jumping for read more link - disabled by default (functions.php) (also in child themes)
- Tip83 - Make focused input fields glow (style.css)
- Tip84 - Remove error message on the login page - better for security reasons - disabled by default (functions.php) (also in child themes)

For more information please see - How to use Tiny Forge and its child themes: a comprehensive guide:

http://mtomas.com/389/tiny-forge-framework-child-themes-comprehensive-guide


Copyright information
=====================

Tiny Forge WordPress Theme, Copyright (C) 2013-2014 Tomas Mackevicius.
Tiny Forge is distributed under the terms of the GNU GPL v2 or later.

This program is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License 
as published by the Free Software Foundation, either version 2 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with this program (license.txt). If not, see URI: http://www.gnu.org/licenses/gpl-2.0.html.

Tiny Forge WordPress Theme is derived from Twenty Twelve WordPress Theme, Copyright (C) the WordPress team.
Twenty Twelve WordPress Theme is distributed under the terms of the GNU GPL v2 or later.
http://wordpress.org/themes/twentytwelve


Third-party code
----------------

Tiny Forge WordPress Theme incorporates code from:

Twenty Twelve Schema.org Child Theme, Copyright (C) Joshua Lyman.
Twenty Twelve Schema.org Child Theme is distributed under the terms of the GNU GPL v2 or later.
http://github.com/jlyman/Twenty-Twelve-Schema.org-Child-Theme

Expound WordPress Theme, Copyright (C) Konstantin Kovshenin.
Expound WordPress Theme is distributed under the terms of the GNU GPL v2 or later.
http://wordpress.org/themes/expound


Third-party resources
---------------------

Tiny Forge WordPress Theme bundles the following third-party resources:

Elusive-Icons webfont, Copyright (C) Aristeides Stathopoulos
Elusive-Icons are licensed under the terms of the SIL http://scripts.sil.org/OFL
Source: http://shoestrap.org/downloads/elusive-icons-webfont/

Default Tiny Forge header images:

	http://pixabay.com/en/bee-pollen-nectar-yellow-flower-170551/
	License: Public Domain CC0

	http://pixabay.com/en/bird-animal-birds-africa-safari-171215/
	License: Public Domain CC0

	http://pixabay.com/en/ladybird-leaf-green-white-red-163480/
	License: Public Domain CC0

Default Tiny Forge Child theme header images:

	http://pixabay.com/en/bee-pollen-nectar-yellow-flower-170551/
	License: Public Domain CC0

	http://pixabay.com/en/sunset-poppy-backlight-174276/
	License: Public Domain CC0

	http://pixabay.com/en/aoraki-mount-cook-mountain-90388/
	License: Public Domain CC0

External link icon:

	http://commons.wikimedia.org/wiki/File:Icon_External_Link.png
	License: Public Domain CC0


Special thanks and credits
==========================

Theme improvements
------------------

Theme evaluation - Zulfikar Nore (ZGani) http://wpstrapcode.com , http://profiles.wordpress.org/ZGani

Tip on wrong Child Theme reference to Parent - David Radovanovic http://wordpress.org/support/profile/dpaule

Idea on footer widget stacking improvement and tip to code example, ie.css fix - leejosepho http://wordpress.org/support/profile/leejosepho

Footer widget stacking improvement by Steven Stern: http://www.sterndata.com/blog/responsive-design-css-stacking-columns

Fix for elusive icon webfont with CDN caching by Martin Hawksey: http://mashe.hawksey.info
	
Help implementing theme accessibility features - Joe Dolson: http://www.joedolson.com

Properly resize videos, inserted with oembed. By Marty Kokes: http://wordpress.org/support/topic/properly-resizing-videos-possible-code-addition

Set default Tiny Forge header image. By Paulwpxp: http://wordpress.org/support/topic/setting-default-header-image-in-child-theme

Upload custom Header Logo via Theme Customizer. By Kirk Wight: http://kwight.ca/2012/12/02/adding-a-logo-uploader-to-your-wordpress-site-with-the-theme-customizer/


Theme translations
------------------

French translation - Dolordo http://wordpress.org/support/profile/dolordo

German translation - Ralph Stieber http://www.ankestieber.de
	
Japanese translation - Ishikawa Koutarou @stein2nd
	
Lithuanian translation - Mantas Malcius http://mantas.malcius.lt
	
Russian translation - Pavel Kanyshev a.k.a. veshinak

Swedish translation - tommywik http://profiles.wordpress.org/tommywik


== Changelog ==

Also available at: http://mtomas.com/392/tiny-forge-wordpress-theme-version-history

Tiny Forge v1.6.1 (2015-05-24)
----------------------------

- Bug fix: removed jQuery dependence from the navigation.js launch function.


Tiny Forge v1.6.0 (2015-05-23)
----------------------------

- Added new file: js/html5shiv.js - to also have unminified version.
- Added new file: inc/back-compat.php - back-compatibility.

- Enhancement: updated html5shiv.
- Enhancement: replaced div id="content" with main id="content" to increase HTML5 compatibility.
- Enhancement: improved blockquote, logo and top navigation CSS styling for RTL languages.
- Enhancement: added an alt attribute with the site title for header images linked to the home page (via Twenty Twelve).
- Enhancement: using proper way to get customizer settings values (via Twenty Twelve).
- Enhancement: menu on touch devices: fixed jQuery selector for menu items with submenus (via Twenty Twelve).
- Enhancement: added Tip25c - .no-link-icon CSS class - use it to disable special icon, that marks the links that will open in a new window for an individual link, include "no-link-icon" class for the desired link (style.css)
- Enhancement: added CSS styles to remove special external link icon for certain social sharing plugins: Share Buttons by AddToAny.
- Enhancement: added Tip63 - Disable footer widgets for the Front Page Template to have classic Twenty Twelve front page look (style.css) (also in child themes).
- Enhancement: replaced JavaScript for handling the navigation menu accessible tabbing from jQuery solution to vanilla JavaScript (via Underscores).
- Enhancement: prevented the arrow in "Continue reading" links from wrapping to a second line (via Twenty Twelve).
- Enhancement: added a sanitization callback function for call to the add_setting() method.
- Enhancement: added theme support for title-tag - let WordPress manage the document title.

- Accessibility: improved keyboard accessibility on Custom Header and Custom Background screen (via Twenty Twelve).
- Accessibility: Improve menu toggle accessibility. Makes it a little easier to use the primary navigation with assistive devices (via Undersocres).
- Accessibility: updated CSS rules for .screen-reader-text to be consistent with current accessibility guidelines (via Twenty Twelve).
- Accessibility: added CSS rules to mark links on focus.

- Bug fix: fixed the positioning of Front Page template widgets for older Internet Explorer versions.
	Big thanks to Scotm ( http://wordpress.org/support/profile/scotm ) for the tip and 
	Scott Dixon ( http://www.zeaks.org/2012/twenty-plus-lite-twenty-twelve-child-theme ) for the solution.
	Reported upstream to improve Twenty Twelve: https://core.trac.wordpress.org/ticket/28938
- Bug fix: fixed add_query_arg() and remove_query_arg() usage, that could pose security issues:
	https://make.wordpress.org/plugins/2015/04/20/fixing-add_query_arg-and-remove_query_arg-usage/

- Translation: made the text for Site Logo upload translatable - BIG thanks to Dolordo - http://wordpress.org/support/profile/dolordo
- Translation: updated French translation - BIG thanks to Dolordo - http://wordpress.org/support/profile/dolordo


Tiny Forge v1.5.9 (2014-07-15)
------------------------------

- Enhancement: make sub-menu links work correctly on tablets (via Twenty Twelve).
- Enhancement: bump JS version (via Twenty Twelve).
- Enhancement: some of the links/buttons in the footer were too small for a user to easily tap on a touchscreen. Made these tap targets larger to provide a better user experience on mobile devices.
- Enhancement: improved line spacing for post titles.
- Enhancement: new tutorial added: Set Next and Previous post links to be from the same category as current post.
- Enhancement: new tutorial added: Display posts on front page only from a featured category.

- Bug fix: fixed old variable names in style.less of child theme example.
- Bug fix: .aligncenter image with caption was not centered.

- Translation: added Japanese translation - BIG thanks to ISHIKAWA Koutarou ( @stein2nd ).
- Translation: updated German translation - BIG thanks to Ralph Stieber.


Tiny Forge v1.5.8 (2014-06-05)
------------------------------

- Enhancement: improved Tip28 and added Tip28b - Enable curly quotes in WordPress (functions.php) (only in child themes). Although it looks that things might change in WP v4.0: https://core.trac.wordpress.org/ticket/19550
- Enhancement: updated colors for custom button styles, added orange custom button.
- Enhancement: added "...continue reading" link for the Excerpts.
- Enhancement: added function to control the length of Excerpts.
- Enhancement: new tutorial added: Display full posts on front page only (Excerpts for Search, Archives and additional pages of Index view).

- Bug fix: use correct logic in IE conditional comments in header template (via Twenty Twelve).
- Bug fix: avoid a PHP notice if no images were found (via Twenty Twelve).


Tiny Forge v1.5.7 (2014-05-05)
------------------------------

- Enhancement: implemented WordPress 3.9 HTML5 Galleries & Captions ( http://make.wordpress.org/core/2014/04/15/html5-galleries-captions-in-wordpress-3-9/ ). Gallery got slicker thumbnails.
- Enhancement: increased image caption font size.
- Enhancement: added temporary function to let older WP installations use HTML5 galleries. Will be removed later. Thanks to ThemeShaper guys: http://themeshaper.com/2014/03/04/html5-galleries-in-wordpress-3-9/
- Enhancement: removed .dropdown CSS class from top navigation opting for WordPress native CSS class .menu-item-has-children, also removed Tip05 from functions.php 
that was used to generate .dropdown CSS class.
- Enhancement: increased allowed depth of top navigation to 4.
- Enhancement: added CSS style for cite.
- Enhancement: updated LESS style sheet for child theme, added rules for easy customization of mobile nav menu.
- Enhancement: new tutorial added: Footer - Hide "Log in" link ( http://mtomas.com/389/tiny-forge-framework-child-themes-comprehensive-guide#Hide-Log-in-link ).

- Bug fix: fixed Front Page Template widget's CSS style bleeding to footer widgets.
- Bug fix: prevent 'Page %s' from being added to page title on 404 error pages in bundled themes (via Twenty Twelve).
- Bug fix: restored default behaviour for .custom-background-empty.


Tiny Forge v1.5.6 (2014-03-27)
------------------------------

- Enhancement: updated mobile menu (via theme Expound 2.0.1). IMPORTANT: some CSS class names changed! If you use custom mobile menu styles, please check the new CSS code in Child Theme Example to update your child theme.
- Enhancement: realized that people DO NOT read readme.txt :) so added a non-disruptive admin notice to inform users about additional resources. Big thanks to Konstantin Kovshenin for the code ( http://kovshenin.com ).
- Enhancement: changed media query's (section 12.1) minimum targeted width from 600px => 770px. This way I'm targeting 7" tablets in Portrait view.
- Enhancement: increased z-index of top menu drop down, to keep it on top of other elements (like galleries, sliders, etc.).
- Enhancement: added bottom margin for the Recent Comments widget entries in Sidebar.
- Enhancement: increased avatar sizes for author byline and comments, increased text size for comment author name.
- Enhancement: added bold style to post author's name in comments (via Twenty Twelve).
- Enhancement: increased font size for the comment box.
- Enhancement: updated the HTML5 Shiv to 3.7.0 (via Twenty Twelve).
- Enhancement: styled select element (via Twenty Twelve).
- Enhancement: removed doc block comments for @return void (via Twenty Twelve).
- Enhancement: on attachment pages for audio and video, display players. Currently, only a link is displayed. Add minimal CSS rules for compatibility (via Twenty Twelve).
- Enhancement: new tutorial added: Display featured image thumbnail in archive views (index page, categories, etc.) ( http://mtomas.com/389/tiny-forge-framework-child-themes-comprehensive-guide#Display-featured-image-thumbnail-in-archive-views )
- Enhancement: new tutorial added: Enable Site Logo for mobile view ( http://mtomas.com/389/tiny-forge-framework-child-themes-comprehensive-guide#Enable-Site-Logo-for-mobile-view )

- Accessibility: improved menu navigation for keyboard and voice-over interactions by properly focusing on submenu items when they are open (via Twenty Twelve).

- Bug fix: small Schema.org implementation bug in functions.php ( https://github.com/jlyman/Twenty-Twelve-Schema.org-Child-Theme/issues/4 ).
- Bug fix: hide mobile menu in IE compatibility mode.

- Translation: updated Tiny Forge POT file.
- Translation: added Lithuanian translation - BIG thanks to Mantas Malcius ( http://mantas.malcius.lt ).
- Translation: added Russian translation - BIG thanks to Pavel Veshinak.
- Translation: added several expressions used in Tiny Forge Child Theme example.
- Translation: modified functions.php of Tiny Forge Child Theme example to correct name space for the function that is overwriting parent theme's function.
- Translation: added admin panel notice string.
- Translation: updated German translation - BIG thanks to Ralph Stieber. Now de_DE-Du version will be activated by default.


Tiny Forge v1.5.5 (2014-02-17)
------------------------------

- Enhancement: highlight calendar widget dates containing an article with bold font. Thanks Pascal46 ( http://wordpress.org/support/profile/pascal46 ) for the idea!
- Enhancement: Improved printing CSS styles: removed videos, changed blockqoute color, enabled visible URLs for the content links, other small aesthetic improvements.
- Enhancement: corrected function name for remove_post_formats.
- Enhancement: updated code for Tip24 - now no-border CSS class can also be used for images in widgets.
- Enhancement: added more options for the Tip08 - Remove junk from head.
- Enhancement: updated editor-style.css to better reflect Tiny Forge CSS style.
- Enhancement: enclosed function tinyforge_the_title_trim (the one that changes a title for protected and private posts) in if ! function_exists, 
to make it easy to replace this function in child themes in case you want to disable sanitizing of title, etc. (functions.php). 
Also added modified function to the child theme example, see section 1.3 in its functions.php. Big thanks to Brett Holman @ http://airminded.org for the idea how to fix it!
- Enhancement: use the 'display' filter for get_bloginfo( 'name' ) attached to the wp_title filter (via Twenty Twelve: https://core.trac.wordpress.org/changeset/27091/trunk/src/wp-content/themes/twentytwelve/functions.php ).
- Enhancement: improved Tip02 - Optional code to enable favicon. Now favicon can be displayed not only for the website, but also for admin area and login page.
- Enhancement: wrapped tinyforge_content_width in if ! function_exists (functions.php).

- Translation: updated German translation - BIG thanks to Ralph Stieber.

- Bug fix: corrected small bug in Tip05. Now pages with subpages also get dropdown icon in top menu. Thanks Chris Urick ( http://www.belfastgardenclub.org ) for reporting.


Tiny Forge v1.5.4 (2014-01-17)
------------------------------

- Announcement: published "How to use Tiny Forge and its child themes: a comprehensive guide" at http://mtomas.com/389/tiny-forge-framework-child-themes-comprehensive-guide

- Enhancement: IMPORTANT - updated Elusive-Icons webfont. From now on Elusive-Icons webfont CSS styles start with .el-icon-* instead of an old .icon-*, also the individual icon codes changed, so please update with new ones. 
If you were using social icons, please check section "Quick start guide - 6." to get updated code. This update might break some of the websites, but it is not something I can control. 
If you had custom embed styles, please update them. More info on: http://shoestrap.org/downloads/elusive-icons-webfont/
- Enhancement: changed Child Theme Name: Tiny Forge Child => Tiny Forge Child Example. Preparing to publish Child theme example at WP.org.
- Enhancement: moved humans.txt to /inc folder.
- Enhancement: moved editor-style.css and editor-style-rtl.css to /css folder (functions.php, editor-style.css, editor-style-rtl.css).
- Enhancement: added Twitter Bootstrap alert CSS styles.
- Enhancement: changed title for protected and private posts - words "protected" and "private" are replaced by lock or lock + user symbols.
- Enhancement: for a cleaner look removed underline text decoration from meta links.
- Enhancement: in article meta author now stand first, followed by publishing date.
- Enhancement: show comments meta (comment count) even if commenting is disabled (via Twenty Fourteen).
- Enhancement: added additional body classes - category (or any other taxonomy) class for single posts, Page slug. Additional body classes ported from Twenty Fourteen - Index, archive views, Single views, Presence of header image, Presence of footer widget(s).
- Enhancement: added additional post classes - add a post class to denote Non-password protected page with a post thumbnail (ported from Twenty Fourteen).
- Enhancement: added specific CSS style for blockquote inside comments.
- Enhancement: wrapped tinyforge_setup in if ! function_exists (functions.php).
- Enhancement: decreased distance between articles in archive view.
- Enhancement: decreased top margin and added bottom margin for the UL and OL sublists.
- Enhancement: renamed some titles for theme customizer to make it more clear (ported from Twenty Fourteen).
- Enhancement: changed "if" statements for functions.php according to new WordPress coding standards (always require braces).
- Enhancement: added Tip25b - Disable special icons, that marks the links that will open in a new window (style.css) (only in child themes).
- Enhancement: added Tip26b - Print HTML bellow post title with meta information (date/time and author) for the index/archive views in MOBILE and/or NORMAL view (style.css) (also in child themes).
- Enhancement: simplified Tip30 (removed optional code from content.php).
- Enhancement: added Tip32 - Add shadow to post/page title (style.css) (also in child themes).
- Enhancement: disabled default hyphenation of text for <article>. Added Tip33 - Enable hyphenation of text for <article> (style.css) (also in child themes).
- Enhancement: added Tip34 - Display author info card at the bottom of posts on a single author website (functions.php) (also in child themes).
- Enhancement: updated code for Tip81 - Completely disable the Post Formats UI in the post editor screen - disabled by default (functions.php) (also in child themes).
- Enhancement: added Tip84 - Remove error message on the login page - better for security reasons.

- Bug fix: corrected the font size of comment meta next to entry title (only in child themes).

- Translation: new string to translate: "Site Title Color", "Display Site Title &amp; Tagline".


Tiny Forge v1.5.2-3 (2013-12-17)
--------------------------------

- Enhancement: increased bottom margin for the bottom navigation #nav-below of index and archive pages.
- Enhancement: increased the line-height (spacing between lines) of entry title in mobile view.
- Enhancement: commented out set_post_thumbnail_size in fuctions.php for the time being. Perhaps will use it to display featured posts in the index, when Featured Content functionality will be added to the WP core.
- Enhancement: some updates to child theme example (functions.php).
- Enhancement: updated child theme example design - made title bigger.
- Enhancement: added Tip13 - Remove Open Sans (from Google Fonts) as default font (functions.php) (in child themes).
- Enhancement: new screenshot at 880x660 to maximize theme goodness in the new theme viewer design (via Twenty Twelve).
- Enhancement: increased width of #site-generator to make enought room for text in localized versions of theme.
- Enhancement: updated theme tags for WP v3.8.
- Localization: added German translation - BIG thanks to Ralph Stieber.
- Bug fix: corrected the web-icon size for featured post title.


Tiny Forge v1.5.1 (2013-11-17)
------------------------------

- Enhancement: reverted the header image for the Front Page template - made it ON by default, but added Tip12 - Disable header image for the Front Page Template to have classic Twenty Twelve front page look (style.css) (also in child themes).
- Enhancement: added padding-top for #site-title-wrapper for the mobile view.


Tiny Forge v1.5 (2013-11-15)
----------------------------

- Enhancement: a BIG ONE! New mobile menu, ported from the Theme Expound. Big thanks to Konstantin Kovshenin ( http://wordpress.org/themes/expound/ ).
- Enhancement: a BIG ONE! Added LESS support to child theme template.
- Enhancement: added shadow to the top menu drop-down items.
- Enhancement: improved footer widget stacking and responsiveness. Thanks to leejosepho for the tip ( http://wordpress.org/support/profile/leejosepho ). Code by Steven Stern ( http://www.sterndata.com/blog/responsive-design-css-stacking-columns ).
- Enhancement: increased the content font size from 14px to 16px in posts and pages for better readability on high resolution screens.
- Enhancement: added input font for <IE9 Password Box to make the bullets show up. Thanks to leejosepho for the tip ( http://wordpress.org/support/profile/leejosepho ). Code by Srini G. ( http://srinig.com/wordpress/ ).
- Enhancement: implemented Microsoft-specific @viewport rules for better responsive styling in Windows 8 "snapped" views (via Twenty Twelve).
- Enhancement: added bottom margin for the oEmbedded videos.
- Enhancement: added Tip62 - Add side borders for the middle footer widget - to better separate widgets visually.
- Bug fix: corrected the parent theme template name in the child theme example: Template: tiny-forge. Thanks to David Radovanovic for the tip ( http://wordpress.org/support/profile/dpaule ).
- Bug fix: disabled (via style.css) header image for Front Page Template, to better reassemble the original idea from Twenty Twelve.
- Bug fix: replaced get_bloginfo('home') with new home_url() in the child theme example. Thanks to leejosepho for the tip ( http://wordpress.org/support/profile/leejosepho ).
- Enhancement: many small changes to the child theme template, so please cross check with yours.


Tiny Forge v1.4.1 (2013-10-15)
------------------------------

- Enhancement: added optional Google Fonts support (functions.php), search for Tip31.
- Localization: updated tinyforge.pot file for better localization.
- Localization: translated noscript warning.
- Localization: added Swedish translation - BIG thanks to tommywik - http://profiles.wordpress.org/tommywik
- Enhancement: updated colors for headers - post title is black, content headers - the same color as content text.
- Bug fix: single attachment page displays empty sidebar. Upstream to Twenty Twelve - http://core.trac.wordpress.org/ticket/25506
- Enhancement: do not show comment meta next to article title if there are no comments (in index and archive pages).
- Enhancement: added web font icons to the Tag archive title, Yearly, Monthly and Daily archive title, Author's archive title, Search results.
- Enhancement: made Search results title same color as of Archive title, added radial background to search results page (same as in archive pages).
- Enhancement: added Tip30 - Hide entry meta section (with author, categories, tags) in the Index page and archive listing.
- Enhancement: moved human.txt support option from header.php to functions.php. human.txt now will reside in the theme folder, no need to move to root.
- Enhancement: updated the way meta tags are inserted to make them better readable in the source code.


Tiny Forge v1.4 (2013-09-30)
----------------------------

- Enhancement: added an example of Tiny Forge child theme. This will make easy for users to modify the look of their website and retain the changes after update
of parent theme. It will also encourage users to start experimenting with the child theme idea (inc/tinyforge-child-theme-example.zip).
- Enhancement: display custom headers for posts and pages even if main header is disabled. Custom headers for posts and pages are assigned as a "Featured Image". 
This changes default behaviour, when removing header image (Admin Panel Menu > Appearance > Header) would disable header globaly.
- Enhancement: changed get_template_directory_uri() (%s) to get_stylesheet_directory_uri() (%2$s) in custom-header.php. This plays role in defining location of the default header images. 
It will make life easier for child theme creators, who can replicate default header images folder and replace default images with custom ones.
- Localization: updated tinyforge.pot file for better localization.
- Localization: added French translation - BIG thanks to Dolordo - http://wordpress.org/support/profile/dolordo
- Enhancement: updated code comments to reflect WP inline docs standards (via Twenty Twelve - http://core.trac.wordpress.org/ticket/25256 ).
- Enhancement: changed top menu dropdown arrow for items with submenus to less visually invasive type.
- Enhancement: removed bottom border from a single attachment page.
- Enhancement: updated code for inserting author avatar (via Twenty Twelve).
- Enhancement: added additional custom header images to make random image option more obvious.


Tiny Forge v1.3 (2013-09-08)
----------------------------

- Enhancement: added option to upload custom Header Logo via Theme Customizer (Admin Panel Menu > Appearance > Customize).
- Enhancement: increased body margin-top on white background picked via Theme Customizer.


Tiny Forge v1.2.2-4 (2013-09-05)
--------------------------------

- Enhancement: optimized header image.
- Enhancement: removed unnecessary comments.
- Bug fix: .entry-title text size styling.
- Bug fix: Schema.org implementation code for post meta in functions.php.


Tiny Forge v1.2.1 (2013-08-23)
------------------------------

- Theme name change from 2012-XTended to Tiny Forge.
- Theme becomes parent theme with several bundled child themes to have an example on how to extend it. 
  So it's still based on the Twenty Twelve, but I will not have to maintain the relation to it. 
  That became very important with evolution of HTML5 elements and the fact, that WordPress team is not interested in evolving older default themes.
- Bug fix: sidebar select element with very long value to overflow theme boundaries.
- Enhancement: added Twitter Bootstrap code class.
- Enhancement: added Twitter Bootstrap button styles: class="btn" class="btn btn-custom", check style.css file for more button styles.


2012-XTended v1.1 (2013-06-16)
------------------------------

- Enhancement: improve icon webfont rendering for a:hover state (style.css).
- Enhancement: updated .clear class - taken from Twitter Bootstrap (style.css).
- Enhancement: improved icon webfont ul and li styling in widgets (style.css).
- Enhancement: declutter post listing for index page and archives - top and bottom meta is visible only for single posts (only for certain child themes) (content.php).
- Enhancement: added Tip13 - Add Twenty Thirteen search form to WordPress nav menu (functions.php, style.css).
- Enhancement: added theme support for default core markup for forms to output valid HTML5 (functions.php).
- Enhancement: non-existing HTML5 element hgroup replaced with div.site-branding (taken from _s) (header.php).


2012-XTended v1.0 (2013-06-06)
------------------------------

- Initial release.


Happy coding!
=============

Tomas Mackevicius http://mtomas.com - services@mtomas.com - @TomasMack

"Ut In Omnibus Glorificetur Deus" ~Saint Benedict