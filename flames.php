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
  	<link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
	<link href="assets/css/l-style.css" rel="stylesheet">
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

  </head>

  <body>
  <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="index.html">FLAMES</a>
          <div class="nav-collapse">
            <ul class="nav">
              <li><a href="index.html"><i class="icon-home"></i> Home</a></li>
              <li><a href="about.html"><i class="icon-tag"></i> About</a></li>
              <li><a href="http://facebook.com/shibu.lijack"><i class="icon-bullhorn"></i> Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
          </div>
      </div>
    </div>
    
    <div class="container-fluid">
    
    <header class="jumbotron masthead">
  <div class="inner">
    <h1>F.L.A.M.E.S</h1>
    <p><span class="badge badge-important">Friends</span> <span class="badge badge-warning">Lovers</span> <span class="badge badge-success">Affectionate</span> <span class="badge badge-info">Married</span> <span class="badge">Enemies</span> <span class="badge badge-inverse">Siblings</span></p>
    
  </div>
</header>

<?php
$flames_text = array( 
        "F" => "Friends", 
        "L" => "Lovers", 
        "A" => "Affectionate", 
        "M" => "Married", 
        "E" => "Enemies", 
        "S" => "Siblings" 
    );
$mname1=strtolower($_POST["mname1"]);
$mname2=strtolower($_POST["mname2"]);
$fname1=strtolower($_POST["fname1"]);
$fname2=strtolower($_POST["fname2"]);
$name1=$mname1.$mname2;
$name2=$fname1.$fname2;
$name1=str_replace(' ','',$name1);
$name2=str_replace(' ','',$name2);
if(($name1!=NULL) && ($name2!=NULL))
{
for($i=0;$i<strlen($name1);$i++)
{
	for($j=0;$j<strlen($name2);$j++)
	{
		if($name1[$i]==$name2[$j])
		{
			$name1[$i]='?';
			$name2[$j]='?';
		}
	}
}
$name1=str_replace('?','',$name1);
$name2=str_replace('?','',$name2);
$sum=strlen($name1)+strlen($name2);
$flames="flames";
$l=strlen($flames);
$pos=0;
while($l>1)
{
	$pos=($sum+$pos)%$l;
	if($pos == 0)
        $pos=$l-1;  
    else
        $pos--;
	$flames[$pos] = "/"; 
    $flames= str_replace("/", "", $flames);
    
	$l=strlen($flames);
}
$result=strtoupper($flames);
?>
<div class="row-fluid" style="min-height: 250px;">
<div class="span12 k-border well">

<div class="span3">
<center>
<?php 
switch($result)
{
	case 'F': echo "<img src=assets/images/friend.png style=float:left;>"; break;
	case 'L': echo "<img src=assets/images/love.png style=float:left;>"; break;
	case 'A': echo "<img src=assets/images/affectionate.png>"; break;
	case 'M': echo "<img src=assets/images/marriage.png style=float:left;>"; break;
	case 'E': echo "<img src=assets/images/enemy.png style=float:left;>"; break;
	case 'S': echo "<img src=assets/images/sibling.png style=float:left;>"; break;
}
?>
</center>
</div>
<div class="span9 l-text">
<p><h2><?php echo ucfirst($mname1);?></h2> &amp; <h2><?php echo ucfirst($fname1);?></h2> are <h2><span class="result"><?php echo $flames_text[$result];?></span></h2></p>
</div>
</div>
</div>
<?php } 
else
{
?>
<div class="hero-unit k-border">
<p>Please enter a valid input.</p>
</div>
<?php } ?>
<p><a href="index.html" class="btn btn-primary">Go Back</a></p>
</div>
<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap-collapse.js"></script>
</body>
</html>