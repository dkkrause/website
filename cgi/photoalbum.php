<!-- 

photoalbum.php

Creates a photo album from a set of images and thumbnails.

Prerequisites:
1) The following files must exist in /cgi-bin/js:
	- jquery-1.7.2.min.js
	- jquery-ui-1.8.18.custom.min.js
	- jquery.smooth-scroll.min.js
	- lightbox.js
	
2) The root of the web site tree must be …./html/. If it isn't, modify the script to look for the
   appropriate directory.
   
3) 

Requirements: from the directory this script is run:

Create the following directories:
	/<album name>/images
	/<album name>/tn
	
The put the images in /<album name>/images
Put the thumbnails in /<album name>/tn with the same name as the image preceded by 'tn'

Include this script by using the following code (remove the space between the < and the ?):

< ? (*** remove the space between the < and the ? ***)

	$cwd = getcwd();
	$album = "<album name>";    *** replace <album name> with the name of the album directory ***
	include $_SERVER['DIRECTORY_ROOT'] . '/cgi-bin/photoalbum.php';
	
? >   (*** remove the space between the ? and the > ***)

 -->


<?php

	$dirs = explode( "/", $cwd );
	$pos = 0;
	foreach ($dirs as $dir) {
		if ($dir == "html")
			break;
		else
		    $pos++;
	}
	for ($j=0; $j<=$pos; $j++) unset ($dirs[$j]);
	$location = ltrim( implode( "/", $dirs ) );
	
	$iterator = new DirectoryIterator($cwd . '/' . $album . '/images');
	foreach ($iterator as $fileinfo) {
		if ($fileinfo->isFile()) {
			$fname = $fileinfo->getFilename();
	    	if (file_exists($cwd . '/' . $album . '/tn/tn' . $fname)) {
	    		echo '<li> <a href="' . $album . '/images/' . $fname . '" rel="lightbox[' . $album . ']">' .
		             '<img src="' . $album . '/tn/tn' . $fname . '"  /></a></li>';
	
			}
    	}
	}

?>