960bc WordPress Theme by Troy Dean (http://www.guardianwebdesign.com.au)

This WordPress Theme is designed for developers who require a blank canvas with no styling or images to begin developing their WordPress sites. It is built using the 960 12 column grid system (http://www.960.gs). Please read up on the 960 12 column grid system. It's pretty easy to understand and start using.

Unzip and install into wp-content/themes/960bc as per normal theme installation and activate this theme in the wp-admin section of your installation.

Make sure the 960bc folder contains a subfolder called "css". This is where the 960 grid system files live. Do not remove, rename or change the structure of this directory otherwise the 960 grid system will break.

In the header.php file in the 960bc folder you will find a link to the two css files provided by the 960 grid system. (reset.css and 960.css) Do not remove, rename or edit these files otherwise the 960 grid sytem will break.

Place your custom CSS in the style.css, colours.css and typography.css files in the 960bc directory.

The grid system will make your site 960px wide with padding of 10px left and right.

To view the grid columns while your designing simply uncomment line 39 - 44 in header.php.

To use the grid system simply assign a div the appropriate class as required. EG: If you need a seven column div assign the class "grid_7" to the div. It's a good idea to still use semantic naming for div id's.

EG: <div id="content" class="grid_12"> would give you a div called "content" seven columns wide.

If you want the div to float right assign it an additional class of "omega" (last) and to float a div left assign a class of "alpha" (first).

EG: <div id="sidebar" class="grid_4 omega"> would give you a four column div called "sidebar" floated right.

To clear floats simply add "<div class="clear">&nbsp;</div>".

To leave blank columns for spacing assign a "prefix" or "suffix" class according to the number of blank columns you need.

EG: <div id="sidebar" class="grid_4 prefix_1"> will give you a 4 column div called "sidebar" with one blank column to the left of it. Alternatively <div id="sidebar" class="grid_4 suffix_1"> will give you a 4 column div called "sidebar" with one blank column to the right of it.

The theme also comes with a search engine optimised <title> tag providing dynamic page titles based on the content. The <h1> tag is also assigned to the page/post title for further SEO. Subheadings should be allocated an <h2> tag while the sidebar headings have been assigned an <h3> tag in the theme's sidebar.php file and widget headings an <h3> tag in the functions.php file.

This theme is released under GPL:
	http://www.opensource.org/licenses/gpl-license.php
	
This theme is unsupported and therefore further reading should be undertaken at the WordPress codex at http://codex.wordpress.org or by studying the 960 grid system at http://www.960.gs

Have fun!