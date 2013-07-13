<!DOCTYPE HTML>
<html lang="en-ph">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="chrome=1">

<title>Prism v2</title>


<link rel="stylesheet" href="css/main-ui.css">

<script src="js/vendors/jquery-1.10.1.min.js"></script>
<script src="js/vendors/underscore-min.js"></script>
<script src="js/vendors/backbone-min.js"></script>
<script src="js/main-ui.js"></script>
<script src="js/app-ui.js"></script>

<script type="text/template" id="body-template">
<div id="container">
	<header id="h">
	
	</header>
	<div role="main" class="animated">
		<div role="navigation" class="animated">
	  	<h3>Navigation</h3>
	  	<ul>
	    	<li><a data-state="initial" href="#">Initial</a></li>
	  		<li><a data-state="pres" href="#">Presentation</a></li>
	  		<li><a data-state="sidebar" href="#">Sidebar</a></li>     
	  		<li data-state="initial">Initial</li>
	  		
	  	</ul>
	  	<p><a data-state="initial" href="#">Close</a></p>
	  	</div>
	  	
	  	<div role="sidebar" class="animated">
	  		<h3>Sidebar</h3>
	  		<p>This is the sidebar content.</p>
	  		<p class="close"><a data-state="initial" href="#">Close</a></p>
	  	</div>
	  	
	  	<div role="content" class="animated">
	  		<h3>Layout states using jQuery and Data Attributes</h3>
	  		<p>A simple yet flexible method for showing and hiding content based on layout 'states'. Works with media queries.</p>
	  		<p>This is not intended to present a solid UI pattern, just a simple methodology for handling layout.</p>
	          <p><a data-state="initial" href="#">Switch to 'initial' state</a></p>
	  		<p><a data-state="nav" href="#">Switch to 'nav' state</a></p>
	  		<p><a data-state="sidebar" href="#">Switch to 'sidebar' state</a></p>
	  		<p><a data-state="pres" href="#">Switch to 'presentation' state</a></p>
			<p><a href="#" class="splitter">Splitter</a></p>
	  	</div>
	</div>
	  
	<div role="presentation" class="padded animated">
	  	<h3>Presentation</h3>
	  	<p>This is the presentation content.</p>
	  	<p><a data-state="initial" href="#">Switch to 'Initial' state</a></p>
	</div>
</div>
</script>

<script type="text/template" id="header-tpl">
<div="h-main">
	<div id="h-main-logo">
		<img src="images/75x75.png">
		<h1>Header</h1>
		<h2>System</h2>
	</div>
	<div id="h-main-user">
		<div>
			<a href="#"><%=state%></a>
			<a class="logout" href="logout">Log out</a>
		</div>
		<img src="images/silhouette36.png">
	</div>
	</div>
</div>
<div style="clear: both; ">
	<div id="h-nav">
		<div id="h-nav-container"></div>
	</div>
	<div id="h-subnav">
		<div id="h-subnav-container"></div>
	</div>
</div>
</script>
</head>
<body id="app-body" class="state-nav">

</body>
</html>