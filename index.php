<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>FLAMES</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="FLAMES | Friendship, Love, Affection, Marriage, Enemy, Sibling Calculator">
    <meta name="author" content="Shibu Lijack">
    <meta name="keywords" content="flames, love, friendship, calculator, shibu lijack">
    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/docs.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
  	<link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
	
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

  </head>

  <body>

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="http://facebook.com/shibu.lijack">CyberJack</a>
          <div class="nav-collapse">
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="about.php">About</a></li>
              <li><a href="http://shibulijack.wordpress.com">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">
    
    <header class="jumbotron masthead">
  <div class="inner">
    <h1>F.L.A.M.E.S</h1>
    <p><span class="badge badge-important">Friends</span> <span class="badge badge-warning">Lovers</span> <span class="badge badge-success">Affectionate</span> <span class="badge badge-info">Married</span> <span class="badge">Enemies</span> <span class="badge badge-inverse">Siblings</span></p>
    
  </div>
</header>
	    
    <form action="flames.php" method="post">
    <fieldset>
    <div class="row well">
    <span class="span2"><img src="assets/images/m-icon.png" style="float:left;"></span>
	<span class="span3"><p>His First name<br> 
	<input type="text" name="mname1"> </p>
	<p>His Second name<br>
	<input type="text" name="mname2"> </p></span>
	<span class="span2"><img src="assets/images/f-icon.png" style="float:left;"></span>
	<span class="span3"><p>Her First name<br> 
	<input type="text" name="fname1"> </p>
	<p>Her Second name<br>
	<input type="text" name="fname2"> </p></span>
	</div>
	
	<input class="btn-large btn-success" type="submit" value="Calculate!" style="width:49%; font-size:30px; float:left;"/>
	<input class="btn-large btn-inverse" type="reset" value="Reset" style="width:49%; font-size:30px; float: right;"/>
	
</fieldset>
</form>

	

    </div> <!-- /container -->
    
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap-collapse.js"></script>
  </body>
</html> 