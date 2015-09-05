### OOP-sidebar-generator
-----------------------------
Generate unlimited sidebars with a single array. List number of sidebars in an array and you are done.

### Usage.
----------------
Drop the file in your theme inc folder and add it in functions.php
```
require get_template_directory() . '/inc/oop-sidebar-generator.php';

```
Now put create a new function with an array of sidebar and pass it into the function to register sidebars.

```
/**
 * Number of sidebars to register. place each sidebar in a new line.
 * @type array
 */
$sidebars = array( 
	'Primary Sidebar',
	'Secondary Sidebar',
	'footer 1',
	'footer 2',
	'footer 3',
	'footer 4'
);
cft_register_sidebar( $sidebars );
```

### Authors and Contributors
----------------------------
OOP Post Type Generator is written by Aamer Shahzad @talentedamer a WordPress theme developer on WordPress.org and OOPthemes.com

### Support or Contact
----------------------
Please visit [OOPThemes](http://oopthemes.com) support forum if you have any issue regarding the use of OOP Post Type Genertator.