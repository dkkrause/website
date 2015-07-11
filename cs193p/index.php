<!doctype html>
<html lang="en-us">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="Product Development  Executive with strength in Leadership, Teamwork, Results, Technology">
	<title>Donald Krause -  Product Development Executive with strength in Leadership, Teamwork, Results, Technology</title>

    <meta name="viewport" content="width=device-width">

	<link rel="shortcut icon" type="image/ico" href="images/favicon.gif" />	
	<link rel="stylesheet" href="/css/dkkrause.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="/css/screen.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="/css/lightbox.css" type="text/css" media="screen" />

</head>

<body>

	<div id="wrapper">

        <div id="header">
            <h1>Donald Krause</h1>
            <h2>Product Development Executive</h2>
            <hr>
            <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/menu.html'; ?>
        </div> <!-- #header -->
			
	    <div id="content">
			<h2>Graphing Calculator</h2>
			<p>This assignment had us create an RPN graphing calculator. In addition to graphing, we had to be able to store favorites persistently
			in UserDefaults. I added a link to <a href="http://www.wolframalpha.com">Wolfram Alpha</a> so that the user could get additional information
			on their formulas. The full set of requirements can be found at <a href="GraphCalc/Assignment 1.pdf">Assignment 1</a>,
			<a href="GraphCalc/Assignment 2.pdf">Assignment 2</a> and <a href="GraphCalc/Assignment 3.pdf">Assignment 3</a>.</p>
	        <ul id="gallery">
	        	<?
	        		$album = "GraphCalc";
	        		$cwd = getcwd();
	        		include $_SERVER['DOCUMENT_ROOT'] . '/cgi/photoalbum.php';
				?>
	        </ul>
	    </div>
	    
        <div id="content">
        	<h2>Flickr Map Places</h2>
        	<p>This assignment required us to create a TableViewController and fill the rows with information queried from 
        	<a href="http://www.flickr.com">Flickr</a>. First we get
        	the top places from which Flickr users are posting photos. Then, when a place is selected, we get the top 50 photos from that place.
        	Finally, when a photo is selected we show the photo, allowing resizing and scrolling. Some of the requirements:</p>
        	<ul class="list">
	        	<li>Maps can be used to select places or photos</li>
	        	<li>Each place selected creates a &quot;recent&quot;, maximum size of 20.</li>
	        	<li>Note the thumbnails in the list of photos and on the map callouts when photos can be selected.</li>
	        	<li>Grand Central Dispatch (GCD) was used to create threads that get the Flickr info to keep the UI unblocked and responsive.</li>
	        	<li>The full set of requirements can be found at <a href="MapPlaces/Assignment 4.pdf">Assignment 4</a> and 
	        	<a href="MapPlaces/Assignment 5.pdf">Assignment 5</a>. Screen shots: </li>
        	</ul>
	        <ul id="gallery">
	        	<?
	        		$album = "MapPlaces";
	        		$cwd = getcwd();
	        		include $_SERVER['DOCUMENT_ROOT'] . '/cgi/photoalbum.php';
				?>
	        </ul>
        </div>
        
        <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.html'; ?>

    </div> <!-- end #wrapper -->
    
    <script src="/js/jquery-1.7.2.min.js"></script>;
    <script src="/js/jquery-ui-1.8.18.custom.min.js"></script>;
    <script src="/js/jquery.smooth-scroll.min.js"></script>;
    <script src="/js/lightbox.js"></script>;
    
</body>
</html>