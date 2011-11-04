Kickoff Theme for Wordpress
---------------------------

This theme is a starting point for creating multi-column, responsive designs in Wordpress with HTML5. If this theme were Voltron; Paul Irish and __ would be the Blue and Yellow Lions for laying the foundation with the html5 Boilerplate (), Richard Clark and Andy Clark make up the Red and Green Lions (with their html5 reset, and 320andup stylesheets, respectively), Making up the Red Lion is zencoder, for the light-weight html5 boilerplate theme. Tim Murtaugh is the sword, for a few of the sharp edges.

Built in Functions
------------------

The Below functions are located in the functions file, and are ones I use in almost all of my custom wordpress installs.
 1. Remove the <p> tag from excerpts and add <p> to the content.
 2. custom excerpt length is set to 40 words, feel free to change it to whatever you like.
 3. Remove remove unsupported rel's for happy HTML5
 4. Remove Image Sizes from Mark-Up for fluid grid compatibility. This helps to make the images responsive for all screen sizes.
 5. Add Theme Support for standard wordpress features.
	a. Four menus are created, I find that I rarely need more then four. And a filter is added to remove supurfuous mark-up from the templates.
	b. Basic Sidebar. If you need more, just copy/paste and rename as needed.
	c. Thumbnails, gotta have thumbnails.
 6. Custom Styles identified by Post ID. This creates a custom stylesheet for individual posts. Upload a stylesheet into the /_/css/ directory with the name style-[your post id].css to use.
 7. Clean up the <head>. This cleans up some of the unused junk in the head of the document.

Stylesheets
-----------
We have our own veriation on the html5 reset.css, and the commonly used .clearfix is included so there is no need to add it to the main style.

ie6 is handled through Andy Clarke's Beautiful Universal Stylesheet for ie6 (http://www.stuffandnonsense.co.uk/blog/about/universal_internet_explorer_6_css) and any other variation of ie can be called through a class via Paul Irish's inventive technique (http://paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/)

Colors - If you're super organized, you can do a find/replace for the following colors:
#000, #fff, #555, #eee, and #666. Links are blue, purple and red.