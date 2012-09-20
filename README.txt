Kickoff Theme for Wordpress
---------------------------

This theme is a starting point for creating multi-column, responsive designs in Wordpress with HTML5. If this theme were Voltron; Michael Pick and Tim Murtaugh would be the Blue and Yellow Lions for laying the foundation with the html5-Reset theme for wordpress, and the yellow lion goes to Nathan Staines (for his Starkers theme). Richard Clark and Andy Clark make up the Red and Green Lions (with their html5 reset, and 320andup stylesheets, respectively), Making up the Red Lion is Paul Irish and the html5 boilerplate team, for the light-weight html5 boilerplate.


3/08/12
-------
Header - Cleaned up the header, 
	Added head_top to handle doctype
	Added head_bottom to handle everything else.

style.css - Refined
	Added elements from html5 boilerplate for mobile
	Added clearfix support.
	Added responsive images & embeds
		
	STYLESHEETS FOR RESPONSIVE GRIDS
	------------------
	1196 / 12 column
	------------------
	.col1{	width:7.107%;		/* 85 / 1196 = 0.071070234113712 */}
	.col2{	width:15.5518%;		/* 186 / 1196 = 0.155518394648829 */}
	.col3{	width:23.9966%;		/* 287 / 1196 = 0.239966555183946 */}
	.col4{	width:32.4414%;		/* 388 / 1196 = 0.324414715719064 */}
	.col5{	width:40.8862%;		/* 489 / 1196 = 0.408862876254181 */}
	.col6{	width:49.3311%;		/* 590 / 1196 = 0.493311036789298 */}
	.col7{	width:57.7759%;		/* 691 / 1196 = 0.577759197324415 */}
	.col8{	width:66.2207%;		/* 792 / 1196 = 0.662207357859532 */}
	.col9{	width:74.6655%;		/* 893 / 1196 = 0.746655518394649 */}
	.col10{	width:83.1103%;		/* 994 / 1196 = 0.831103678929766 */}
	.col11{	width:91.5551%;		/* 1095 / 1196 = 0.915551839464883 */}

	.ml{	margin-left:1.3377%;}		/* 16 / 1196 = 0.013377926421405 */
		
	.ml1{	margin-left:8.4448%;	/* 101 / 1196 = 0.084448160535117 */}
	.ml2{	margin-left:16.8896%;	/* 202 / 1196 = 0.168896321070234 */}
	.ml3{	margin-left:25.3344%;	/* 303 / 1196 = 0.253344481605351 */}
	.ml4{	margin-left:33.7792%;	/* 404 / 1196 = 0.337792642140468 */}
	.ml5{	margin-left:42.224%;	/* 505 / 1196 = 0.422240802675585 */}
	.ml6{	margin-left:50.6688%;	/* 606 / 1196 = 0.506688963210702 */}

	.mr{	margin-right:1.3377%;}		/* 16 / 1196 = 0.013377926421405 */

	.mr1{	margin-right:8.4448%;	/* 101 / 1196 = 0.084448160535117 */}
	.mr2{	margin-right:16.8896%;	/* 202 / 1196 = 0.168896321070234 */}
	.mr3{	margin-right:25.3344%;	/* 303 / 1196 = 0.253344481605351 */}
	.mr4{	margin-right:33.7792%;	/* 404 / 1196 = 0.337792642140468 */}
	.mr5{	margin-right:42.224%;	/* 505 / 1196 = 0.422240802675585 */}
	.mr6{	margin-right:50.6688%;	/* 606 / 1196 = 0.506688963210702 */}

	------------------
	1200 / 16 column
	------------------
	.col1{	width:5%;	/* 60 / 1200 = 0.05 */ }
	.col2{	width:12.6667%;	/* 136 / 1200 = 0.113333333333333 */}
	.col3{	width:17.6667%;	/* 212 / 1200 = 0.176666666666667 */}
	.col4{	width:24%;		/* 288 / 1200 = 0.24 */}
	.col5{	width:30.3333%;	/* 364 / 1200 = 0.303333333333333 */}
	.col6{	width:36.6667%;	/* 440 / 1200 = 0.366666666666667 */}
	.col7{	width:43%;		/* 516 / 1200 = 0.43 */}
	.col8{	width:49.3333%;	/* 592 / 1200 = 0.493333333333333 */}
	.col9{	width:55.6667%;	/* 668 / 1200 = 0.556666666666667 */}
	.col10{	width:62%;		/* 744 / 1200 = 0.62 */}
	.col11{	width:68.3333%;	/* 820 / 1200 = 0.683333333333333 */}
	.col12{	width:74.6667%;	/* 896 / 1200 = 0.746666666666667 */}
	.ml1{	margin-left:6.3333%;	/*  76 / 1200 = 0.063333333333333 */}
	.ml2{	margin-left:12.6667%;	/* 152 / 1200 = 0.126666666666667 */}
	.ml3{	margin-left:19%;		/* 228 / 1200 = 0.19 */}
	.ml4{	margin-left:25.3333%;	/* 304 / 1200 = 0.253333333333333 */}
	.ml5{	margin-left:30.3333%;	/* 364 / 1200 = 0.303333333333333 */}
	.ml6{	margin-left:36.6667%;	/* 440 / 1200 = 0.366666666666667 */}
	.mr1{	margin-right:6.3333%;	/*  76 / 1200 = 0.063333333333333 */}
	.mr2{	margin-right:12.6667%;	/* 152 / 1200 = 0.126666666666667 */}
	.mr3{	margin-right:19%;		/* 228 / 1200 = 0.19 */}
	.mr4{	margin-right:25.3333%;	/* 304 / 1200 = 0.253333333333333 */}


Includes
------------------
Created _/inc/ in the theme directory with support files frequently used on wordpress sites.
Use include (TEMPLATEPATH . '/_/inc/SUPPORT-FILE NAME.php' ); to call any of the templates.
	
	browse.php - Calls the Previous/next for single posts and multiple posts. 
	Use inside the loop
	
	meta.php - Calls meta info such as author, date, categories, tags and number of comments for a given post.
	Use inside the loop

	video.php - Calls a video wrapped in the mark-up needed to make it responsive
	
	slider.php - Uses flexslider for a video slideshow.
	
JS
------------------
Jquery 1.7.1
Modernizr 2.5.3

Plugins
------------------
Respond.js
flexslider.js

Scripts
------------------
Activate Flexslider
Add support for input placeholder text for old browsers.

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

Colors - If you're super organized, you can do a find/replace for the following colors:
#000, #fff, #555, #eee, and #666. Links are blue, purple and red.