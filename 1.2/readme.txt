Theme Name: Tiny Forge  
Theme URI: http://mtomas.com/1/tiny-forge-free-mobile-first-wordpress-theme  
Author: Tomas Mackevicius  
Author URI: http://mtomas.com  
Contributors: TomasM  
Version: 1.2  
Requires at least: 3.6  
Tested up to: 3.6  
License: GNU General Public License v2 or later  
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Description
===========

Tiny Forge theme encompass all the best features of the default WordPress themes in one place, plus more usability and code improvements! 

It features elegant mobile-first HTML5 ready structure of Twenty Twelve, custom per-post headers and three footer widgets from Twenty Eleven, 
icon webfont support from Twenty Thirteen and Schema.org microdata format support. It's all there, you have everything in one neat package. 
Tiny Forge can be used as a learning tool or your own little web development "framework". 

With its unique "Coding Tips system" Tiny Forge helps to understand how to extend parent themes and build your own child themes, hacking them the way you want it. 
You get the best coding examples from default WordPress themes and the best hacks from the child theme.

I recommend hosting your WordPress site with [DowntownHost.com][1]. Using this referral link allows you to support future development of this theme.
Alternatively, you can contribute directly by donating with [PayPal][2] (if you prefer, you can visit PayPal.com directly and send a payment to services@mtomas.com).

[1]: https://www.downtownhost.com/affiliates/jrox.php?id=2199
[2]: https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=CYA7XMLU8ENS2&lc=US&item_name=Free%20WordPress%20themes%20by%20TomasM&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted

Quick overview of main theme features
=====================================

- All features that come with Twenty Twelve theme (Tiny Forge is based on it):
	- elegant, readable and fully responsive theme built on HTML5
	- fully responsive, mobile-first layout
	- front page template with its own widgets
	- an optional "Open Sans" display font (enabled by default)
	- styling for post formats on both index and single views
	- an optional no-sidebar page template
- Custom headers for posts and pages - ported from Twenty Ten, Twenty Eleven
- 3 footer widgets - ported from Twenty Eleven (plus forth footer widget to insert your copyright information)
- Icon webfont support - as seen in Twenty Thirteen, only better!
- Schema.org microdata format support
- Page template to display a list of links (blogroll). Blogroll feature is available as a plugin Link Manager: http://wordpress.org/plugins/link-manager/
- LESS dynamic stylesheet language support (provided via child themes)! Welcome to rapid development age - change the look and feel of your site in minutes!
- Table of contents for style.css - as seen in Twenty Thirteen, also for functions.php!
- Usability, security and other improvements

Full overview of Tiny Forge theme
=================================

[Tiny Forge – free responsive WordPress theme for learning and site building][3]

[3]: http://mtomas.com/1/tiny-forge-free-mobile-first-wordpress-theme

Tiny Forge theme at WordPress.org
=================================

(to be added later)

Support
=======

- WordPress.org - very limited support forum, that deals only with the issues of existing theme code:

	- (to be added later)

- If you need a help extending or modifying this theme, you can always contact me for commercial support:

	- Tomas Mackevicius - http://mtomas.com - services@mtomas.com - @TomasMack

- Tiny Forge theme is based on default WordPress theme Twenty Twelve. If you have any general support questions, good place to start is Twenty Twelve support forum:

	- http://wordpress.org/support/theme/twentytwelve/

Quick start guide
=================

1. In WordPress Admin panel go to Appearance/Widgets, 
expand Footer Copyright Widget Area on the right side,
drag standard Text widget from the left side to the widget area, 
enter your coyright text in the text field (you may leave the title field empty), something like:

	`
    &copy; 2013 Your Name. All rights reserved
	`

	P.S. please do not copy backticks - they are here to make this document compatible with Markdown syntax.

2. If you want to use icon webfont for social networks (as you can see in the screenshot), use standard text widget in the Main Sidebar Widget (same as with Footer Copyright Widget) with text like this:

	```    
	<a href="http://address-to-about-me-page" class="icon-webfont icon-user" title="Contact me"></a> 
	<a href="http://address-to-facebook-account" class="icon-webfont icon-facebook" title="Facebook"></a> 
	<a href="http://www.linkedin.com/in/your-profile/" class="icon-webfont icon-linkedin" title="LinkedIn"></a> 
	<a href="http://profiles.wordpress.org/your-wp-name" class="icon-webfont icon-wordpress" title="WordPress.org"></a> 
	<a href="http://twitter.com/your-twitter-handle" class="icon-webfont icon-twitter" title="Twitter"></a> 
	<a href="https://plus.google.com/u/0/your-g-plus-account-number" class="icon-webfont icon-googleplus" title="Google+"></a> 
	<a href="http://github.com/your-github-name" class="icon-webfont icon-github-text" title="Github"></a>
	```

	P.S. please do not copy backticks - they are here to make this document compatible with Markdown syntax.

3. Next, open functions.php file in a text editor and find sections:

- 5.7 - Add optional meta tags, scripts to head (2.2 - in child themes)

- 12.0 - Other functions (3.0 - in child themes)

Check if you need to uncomment any of the functions there.

Tips and Tricks
===============

1. Tiny Forge is a mobile-first theme, that means main part of the style.css describes the overall mobile look.
Styles provided in media queries at the end of style.css introduce changes for other screen sizes. So don't be puzled ;)
Try to resize your browser window to see how the theme changes its look in relation to screen/browser window size.

2. In the theme files I provided some examples on how to use icon webfont. CSS class names for other icons may be found at: http://shoestrap.org/downloads/elusive-icons-webfont/

3. Don't know how to use LESS dynamic stylesheet language? Start reading here:	http://webdesign.tutsplus.com/tutorials/htmlcss-tutorials/get-into-less-the-programmable-stylesheet-language/

4. In case you need to display an image without any borders or shadows, include "no-border" class for the desired post image.

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

Sidebar (41-60)
---------------

- Tip41 - Show children items of sidebar category/page menu for selected parent category/page only (style.css)

Footer (61-80)
--------------

- Tip61 - Discreet link to WordPress Admin panel in the footer (footer.php, style.css)

Additional tips (81-100)
------------------------

- Tip81 - Completely disable the Post Formats UI in the post editor screen - disabled by default (functions.php) (also in child themes)
- Tip82 - No more jumping for read more link - disabled by default (functions.php) (also in child themes)
- Tip83 - Make focused input fields glow (style.css)

Version history (changelog)
===========================

Tiny Forge v1.2 (2013-08-??)
----------------------------

	- Theme name change from 2012-XTended to Tiny Forge.
	- Theme becomes parent theme with several bundled child themes to have an example on how to extend it. 
	  So it's still based on the Twenty Twelve, but I will not have to maintain the relation to it. 
	  That became very important with evolution of HTML5 elements and the fact, that WordPress team is not interested in evolving older default themes.
	- Fixed the bug in sidebar that caused select element with very long value to overflow theme boundaries.
	- Added Twitter Bootstrap code class.
	- Added Twitter Bootstrap button styles: class="btn" class="btn btn-custom", check style.css file for more button styles.

2012-XTended v1.1 (2013-06-16)
------------------------------

	- Improve icon webfont rendering for a:hover state (style.css)
	- Updated .clear class - taken from Twitter Bootstrap (style.css)
	- Improved icon webfont ul and li styling in widgets (style.css)
	- Declutter post listing for index page and archives - top and bottom meta is visible only for single posts (content.php)
	- Added Tip13 - Add Twenty Thirteen search form to WordPress nav menu (functions.php, style.css)
	- Added theme support for default core markup for forms to output valid HTML5 (functions.php)
	- Non-existing HTML5 element hgroup replaced with div.site-branding (taken from _s) (header.php).</li>

2012-XTended v1.0 (2013-06-06)
------------------------------

	- Initial release

Special thanks and credits
==========================

- Tiny Forge integrates Schema.org microdata format directly into each page. By Joshua Lyman:

	- http://github.com/jlyman/Twenty-Twelve-Schema.org-Child-Theme

	- http://www.joshualyman.com/twenty-twelve-schema-org-child-theme/

	Info about Schema.org microdata format initiative:

	- http://schema.org/docs/gs.html

	- http://googlewebmastercentral.blogspot.com/2011/06/introducing-schemaorg-search-engines.html

- Properly resize videos, inserted with oembed. By Marty Kokes:

	- http://wordpress.org/support/topic/properly-resizing-videos-possible-code-addition

- Set default Tiny Forge header image. By Paulwpxp:

	- http://wordpress.org/support/topic/setting-default-header-image-in-child-theme

- Default Tiny Forge header image:

	- http://pixabay.com/en/bee-pollen-nectar-yellow-flower-170551/ (Public Domain CC0)

- External link icon:

	- http://commons.wikimedia.org/wiki/File:Icon_External_Link.png

- Elusive-Icons webfont:

	- http://shoestrap.org/downloads/elusive-icons-webfont/

- Theme evaluation, suggestions for improvement:

	- [Zulfikar Nore (ZGani)](http://wpstrapcode.com)

Happy coding!

[Tomas Mackevicius](http://mtomas.com) - services@mtomas.com - @TomasMack