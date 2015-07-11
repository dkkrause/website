<? $cwd = getcwd();
	$imageDir = "./album/images";
	$tnDir = "./album/tn";
	echo $imageDir . '   ' . $tnDir;
	$iterator = new DirectoryIterator($imageDir);
	foreach ($iterator as $fileinfo) {
		if ($fileinfo->isFile()) {
			$fname = $fileinfo->getFilename();
			echo $fname;
	    	if (file_exists($tnDir . '/tn' . $fname)) {
	    		echo '<li> <a href="' . $imageDir . '/ ' . $fname . '" rel="lightbox[graphcalc]">' .
		             '<img src="' . $tnDir . '/tn' . $fname . '"  /></a></li>';
	
			}
    	}
	}
?>
