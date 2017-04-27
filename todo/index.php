<!DOCTYPE html>
<html>         
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta content="width=device-width, initial-scale=1, user-scalable=no" name="viewport" />
	<title>To do!!!</title>
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
        <link rel="stylesheet" href="css/default.css" />
        <link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Gloria+Hallelujah' rel='stylesheet' type='text/css'>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.1/jquery.min.js"></script>
	<script src="js/scripts.js"></script>		
</head>
<body>
<div id="container">
<header>
<img class="headerimg" src="/todo/images/heading-trans.gif">
</header>
    
<ul id="tabs">
<li id="todo_tab" class="selected">
    <a href="#">To-Do</a>
</li>
</ul>

<div id="main">
<div id="todo">
            
<div class="item"><h4>Link</h4>
<p>asd</p>

<input type="hidden" name="id" id="id" value="351" required/>

<div class="options">
    <a class="deleteEntryAnchor" href="delete.php?id=351">Delete</a>
    <a class="editEntry" href="#">Edit</a>
    <a class="save-button" href="index.php">Save</a>
</div></div></div><!--end todo-->
		
<div id="addNewEntry">
	<h2>Add New Entry</h2>			
<form action="addItem.php" method="post">			
    <p><label for="title"> Title</label>
	<input type="text" name="title" id="title" class="input" required maxlength=48"/></p>                    			
    <p><label for="description"> Description</label>
	<textarea name="description" id="description" required ></textarea></p>                                   				
    <p><input type="submit" name="addEntry" id="addEntry" value="Add New Entry" /></p>                    
</form>
				
</div><!--end addNewEntry-->			
</div><!--end main-->
</div><!--end container-->	
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-37373746-3', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>
