<?php 
include($_SERVER['DOCUMENT_ROOT'].'/dashboard1/design.php');
include('../config/database.php');
session_start();
$sid=$_SESSION['sid'];
$sql=mysqli_query($conn,"select container,header from admin where usename='$sid'");
$sql_fetch=mysqli_fetch_array($sql);
$container=$sql_fetch['container'];
$header=$sql_fetch['header'];
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/header.css">
	<link rel="stylesheet" type="text/css" href="../css/sidenav.css">
  <link rel="stylesheet" type="text/css" href="../css/content.css">
	<title>AdminPanel</title>
        <style>
    .content{
  background: <?php echo $container; ?>;
  height: auto;
}
.content .card{
  margin-top: 20px;
  border-radius: 10px;
  box-shadow: 0px 0px 15px 0px;
}
  </style>
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark" style="margin-bottom: 10px; background: <?php echo $header; ?>">
  <a class="navbar-brand" href="#"><?php echo $sid;?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
   <!-- <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link " href="#" >Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>    
    </ul>-->
  </div>  
</nav>
</body>
</html>