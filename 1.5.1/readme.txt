Theme Name: Tiny Forge  
Theme URI: http://mtomas.com/1/tiny-forge-free-mobile-first-wordpress-theme  
Author: Tomas Mackevicius  
Author URI: http://mtomas.com  
Contributors: TomasM  
Version: 1.5.1  
Requires at least: 3.6  
Tested up to: 3.6  
Copyright: based on theme Twenty Twelve by WordPress.org  
License: GNU General Public License v2 or later  
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Description
===========

Tiny Forge theme encompass all the best features of the default WordPress themes in one place, plus more usability and code improvements!

It features elegant mobile-first HTML5 ready structure of Twenty Twelve, custom per-post headers and three footer widgets from Twenty Eleven
(plus forth footer widget to insert your copyright information), icon webfont support from Twenty Thirteen, Google Fonts support and Schema.org microdata format support.
It's all there, you have everything in one neat package. Also you can upload your custom Header Logo to display it next to Site Title and Description.

Along with the main theme you will find an example of a child theme - an easy way to start developing with child themes! Tiny Forge can be used as 
a learning tool or your own little web development "framework". 

With its unique "Coding Tips system" Tiny Forge helps to understand how to extend parent themes and build your own child themes, hacking them the way you want it. 
You get the best coding examples from default WordPress themes and the best hacks from the child theme.

I recommend hosting your WordPress site with [DowntownHost.com][1]. Using this referral link allows you to support future development of this theme.
Alternatively, you can contribute directly by donating with [PayPal][2] (if you prefer, you can visit PayPal.com directly and send a payment to services@mtomas.com).

[1]: https://www.downtownhost.com/affiliates/jrox.php?id=2199
[2]: https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=CYA7XMLU8ENS2&lc=US&item_name=Free%20WordPress%20themes%20by%20TomasM&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted

Quick overview of main theme features
=====================================

- All features that come with Twenty Twelve theme (Tiny Forge is based on it)
- Elegant, readable and fully responsive theme built on HTML5
- Fully responsive, mobile-first layout
- Front page template with its own widgets
- An optional "Open Sans" display font (enabled by default) and Google Fonts support (optional)
- Styling for post formats on both index and single views
- An optional no-sidebar page template
- Custom headers for posts and pages (including random header rotator) - ported from Twenty Eleven
- Custom Header Logo to display it next to Site Title and Description
- 3 footer widgets - ported from Twenty Eleven (plus forth footer widget to insert your copyright information)
- Icon webfont support - as seen in Twenty Thirteen, only better!
- Schema.org microdata format support
- Included a starter child theme - easy way to make it your own!
- Page template to display a list of links (blogroll). Blogroll feature is available as a plugin Link Manager: http://wordpress.org/plugins/link-manager/
- LESS dynamic stylesheet language support! Welcome to rapid development age - change the look and feel of your site in minutes! (provided via child themes)
- Table of contents for style.css - as seen in Twenty Thirteen, also for functions.php!
- Usability, security and other improvements

Full overview of Tiny Forge theme
=================================

[Tiny Forge – free responsive WordPress theme for learning and site building][3]

[3]: http://mtomas.com/1/tiny-forge-free-mobile-first-wordpress-theme

Tiny Forge theme at WordPress.org
=================================

http://wordpress.org/themes/tiny-forge

Showcase your Tiny Forge site or mod!
=====================================

http://mtomas.com/363/showcase-tiny-forge-theme-site-mod

Support
=======

- WordPress.org - very limited support forum, that deals only with the issues of existing theme code:

	- http://wordpress.org/support/theme/tiny-forge

- If you need a help extending or modifying this theme, you can always contact me for commercial support:

	- Tomas Mackevicius - http://mtomas.com - services@mtomas.com - @TomasMack

- Tiny Forge theme is based on default WordPress theme Twenty Twelve. If you have any general support questions, good place to start is Twenty Twelve support forum:

	- http://wordpress.org/support/theme/twentytwelve/

Theme localization (Translations)
=================================

Attention Tiny Forge translators! Tiny Forge is based on Twenty Twelve code. If you want to prepare a translation for your language, 
use Tiny Forge POT file and as a reference for the translation of text strings use Twenty Twelve translation POT file. 
Twenty Twelve is part of default WordPress installation package so you might find it here:

http://codex.wordpress.org/WordPress_in_Your_Language

http://translate.wordpress.org/projects/wp/3.6.x/twentytwelve

Quick start guide
=================

1. To make it easy for you to change the look of your website and to retain the ability to update Tiny Forge theme, I recommend using Tiny Forge as a parent theme. 
New WordPress users do not know how to create a child theme, so for that purpose I included an example of Tiny Forge child theme (inc/tinyforge-child-theme-example.zip). 
Unzip that file and upload this child theme as a separate theme alongside with Tiny Forge parent theme. Activate Child theme and you're ready to go! From that point 
all of your changes will be done in the child theme. If you need to modify a file, but it isn't present in your child theme folder, just copy it there from the Tiny Forge theme. 
As bonus Tiny Forge child theme has very nice search field in the top menu area (ported from Twenty Thirteen theme) and two new header images to give you an example on how 
to change the default header images in the child theme.

Read more about child themes:

http://codex.wordpress.org/Child_Themes

2. In WordPress Admin panel go to Appearance/Widgets, 
expand Footer Copyright Widget Area on the right side,
drag standard Text widget from the left side to the widget area, 
enter your coyright text in the text field (you may leave the title field empty), something like:

	`
    &copy; 2013 Your Name. All rights reserved
	`

	P.S. please do not copy backticks - they are here to make this document compatible with Markdown syntax.

3. Go to Theme Customizer (Admin Panel Menu > Appearance > Customize) and see if you need to change any visual aspects of your site.

	- If you will choose to upload custom Header Logo (display it next to Site Title and Description), I recommend to size its height to 85px.

4. Next, open functions.php file in a text editor and find sections:

	- 5.9 - Add optional meta tags, scripts to head (2.2 - in child themes)

	- 12.0 - Other functions (3.0 - in child themes)

	- Check if you need to enable (uncomment) any of the functions there.

	- If you enabled human.txt meta tag, open human.txt file and update it with your information.

5. Make it look clean :) Personally I'm not a fan of displaying a bunch of meta data on index page or on archive pages. But I had to enable it to pass theme evaluation.  
However it is very easy to fix it. Open style.css and search for Tip30 then uncomment next CSS block to hide entry meta section (with author, categories, tags) in the Index page and archive listings.

6. If you want to use icon webfont for social networks (as you can see in the screenshot), use standard text widget in the Main Sidebar Widget 
(same as with Footer Copyright Widget) with text like this:

	```    
	<a href="http://address-to-about-me-page" class="icon-webfont icon-user" title="Contact me"></a> 
	<a href="http://address-to-facebook-account" class="icon-webfont icon-facebook" title="Facebook"></a> 
	<a href="http://www.linkedin.com/in/your-profile/" class="icon-webfont icon-linkedin" title="LinkedIn"></a> 
	<a href="http://profiles.wordpress.org/your-wp-name" class="icon-webfont icon-wordpress" title="WordPress.org"></a> 
	<a href="http://twitter.com/your-twitter-handle" class="icon-webfont icon-twitter" title="Twitter"></a> 
	<a href="https://plus.google.com/your-g-plus-account-number" class="icon-webfont icon-googleplus" title="Google+" rel="author"></a> 
	<a href="http://github.com/your-github-name" class="icon-webfont icon-github-text" title="Github"></a>
	```

	P.S. please do not copy backticks - they are here to make this document compatible with Markdown syntax.

Tips and Tricks
===============

1. Tiny Forge is a mobile-first theme, that means main part of the style.css describes the overall mobile look.
Styles provided in media queries at the end of style.css introduce changes for other (larger) screen sizes. So don't be puzled ;)
Try to resize your browser window to see how the theme changes its look in relation to screen/browser window size.

2. If you want to remove a sidebar (have a full width site) - remove all widgets from the sidebar widget areas (Admin Panel Menu > Appearance > Widgets) and sidebar will disappear.

3. In the theme files I provided some examples on how to use icon webfont. CSS class names for other icons may be found at: http://shoestrap.org/downloads/elusive-icons-webfont/

4. If you want to have a rotating header images, upload several images (Admin Panel Menu > Appearance > Header > Select Image) and then select "Random: Show a different image on each page."

5. In case you need to display an image without any borders or shadows, include "no-border" class for the desired post image.

6. If your'e posting code in the post, first it should be escaped (use: http://www.elliotswan.com/postable/), then wrap it in <code> for inline usage and <pre><code> for blocks of code.

7. Don't know how to use LESS dynamic stylesheet language? Read css/readme.txt

8. Here are some resources, that you might find useful:

	- How to Modify the Parent Theme Behavior Within the Child Theme - http://wp.tutsplus.com/tutorials/creative-coding/how-to-modify-the-parent-theme-behavior-within-the-child-theme/

	- Twenty Twelve – Three Column Layout Tutorial - http://zeaks.org/2012/twenty-twelve-theme-three-column-layout

Coding tips you will find in Tiny Forge theme and related child themes
======================================================================

(Just open related to the tip files in a text editor and search for a tip number, for example "Tip03" to find the code)

Head, header (01-20)
--------------------

- Tip01 - Properly include CSS and JavaScript files via functions.php (in child themes) - http://mtomas.com/27/
- Tip02 - Optional code to enable favicon (functions.php, favicon.ico) (also in child themes)
- Tip03 - We are people, not machines. Read more at: humanstxt.org. Put this file to the root folder of your website e.g. /public_html (header.php, humans.txt) (also in child themes)
- Tip04 - Reminder to enable JavaScript. Tiny Forge uses icon webfont, which will not be rendered properly if JavaScript is disabled (header.php, style.css)
- Tip05 - Mark main navigation menu items, containing children with special css class .dropdown (functions.php, style.css)
- Tip06 - Custom headers for posts and pages (header.php, style.css, also see Tip07)
- Tip07 - Add new image size for custom post/page headers and select default header image (functions.php) (also in child themes)
- Tip08 - Remove junk from head - disabled by default (functions.php) (also in child themes)
- Tip09 - Remove WordPress version info from head and feeds - disabled by default (functions.php) (also in child themes)
- Tip10 - Add Twenty Thirteen search form to WordPress nav menu (functions.php, style.css) (in child themes)
- Tip11 - Make site title and site description float (style.css) (in child themes)
- Tip12 - Disable header image for the Front Page Template to have classic Twenty Twelve front page look (style.css) (also in child themes)

Content (21-40)
---------------

- Tip21 - Icon webfont support implementation and examples (style.css, category.php, footer.php)
- Tip22 - Improve font rendering and fallback in Linux - http://www.onedesigns.com/tutorials/font-families-for-cross-compatible-typography (style.css)
- Tip23 - Properly resize videos, inserted with oembed - http://wordpress.org/support/topic/properly-resizing-videos-possible-code-addition (functions.php, style.css)
- Tip24 - .no-border CSS class - use it in case you need to display an image without any borders or shadows, include "no-border" class for the desired post image (style.css)
- Tip25 - Mark the links that will open in a new window with special icon, usually these are the links to external resources (style.css)
- Tip26 - Print HTML bellow post title with meta information for the current post date/time and author (functions.php, content.php)
- Tip27 - Hide previous article - next article navigation below the content of a post (style.css)
- Tip28 - Remove curly quotes in WordPress (functions.php)
- Tip29 - Style navigation arrows for post listing (next/previous page navigation) (functions.php) (in child themes)
- Tip30 - Hide entry meta section (with author, categories, tags) in the Index page and archive listing (style.css or content.php)
- Tip31 - Google Fonts support - disabled by default (functions.php) (also in child themes)

Sidebar (41-60)
---------------

- Tip41 - Show children items of sidebar category/page menu for selected parent category/page only (style.css)

Footer (61-80)
--------------

- Tip61 - Discreet link to WordPress Admin panel in the footer (footer.php, style.css)
- Tip62 - Add side borders for the middle footer widget - to better separate widgets visually (style.css) (also in child themes)

Additional tips (81-100)
------------------------

- Tip81 - Completely disable the Post Formats UI in the post editor screen - disabled by default (functions.php) (also in child themes)
- Tip82 - No more jumping for read more link - disabled by default (functions.php) (also in child themes)
- Tip83 - Make focused input fields glow (style.css)

Special thanks and credits
==========================

- Tiny Forge integrates Schema.org microdata format directly into each page. By Joshua Lyman:

	- http://github.com/jlyman/Twenty-Twelve-Schema.org-Child-Theme

	- http://www.joshualyman.com/twenty-twelve-schema-org-child-theme/

	Info about Schema.org microdata format initiative:

	- http://schema.org/docs/gs.html

	- http://googlewebmastercentral.blogspot.com/2011/06/introducing-schemaorg-search-engines.html

- Elusive-Icons webfont:

	- http://shoestrap.org/downloads/elusive-icons-webfont/

- Theme improvements:

	- Theme evaluation - Zulfikar Nore (ZGani) http://wpstrapcode.com , http://profiles.wordpress.org/ZGani

	- French translation - Dolordo http://wordpress.org/support/profile/dolordo

	- Swedish translation - tommywik http://profiles.wordpress.org/tommywik

	- Tip on wrong Child Theme reference to Parent - David Radovanovic http://wordpress.org/support/profile/dpaule

	- Idea on footer widget stacking improvement and tip to code example, ie.css fix - leejosepho http://wordpress.org/support/profile/leejosepho

	- Footer widget stacking improvement by Steven Stern: http://www.sterndata.com/blog/responsive-design-css-stacking-columns

- Mobile menu ported from the Theme Expound. By Konstantin Kovshenin:

	- http://wordpress.org/themes/expound/

- Properly resize videos, inserted with oembed. By Marty Kokes:

	- http://wordpress.org/support/topic/properly-resizing-videos-possible-code-addition

- Set default Tiny Forge header image. By Paulwpxp:

	- http://wordpress.org/support/topic/setting-default-header-image-in-child-theme

- Upload custom Header Logo via Theme Customizer. By Kirk Wight:

	- http://kwight.ca/2012/12/02/adding-a-logo-uploader-to-your-wordpress-site-with-the-theme-customizer/

- Default Tiny Forge header images:

	- http://pixabay.com/en/bee-pollen-nectar-yellow-flower-170551/ (Public Domain CC0)
	
	- http://pixabay.com/en/bird-animal-birds-africa-safari-171215/ (Public Domain CC0)
	
	- http://pixabay.com/en/ladybird-leaf-green-white-red-163480/ (Public Domain CC0)

- Default Tiny Forge Child theme header images:

	- http://pixabay.com/en/bee-pollen-nectar-yellow-flower-170551/ (Public Domain CC0)

	- http://pixabay.com/en/sunset-poppy-backlight-174276/ (Public Domain CC0)

	- http://pixabay.com/en/aoraki-mount-cook-mountain-90388/ (Public Domain CC0)

- External link icon:

	- http://commons.wikimedia.org/wiki/File:Icon_External_Link.png (Public Domain CC0)

Version history (changelog)
===========================

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

[Tomas Mackevicius](http://mtomas.com) - services@mtomas.com - @TomasMack