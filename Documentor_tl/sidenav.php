 <?php
 $user=$_SESSION['sid'];
include("../config/database.php");
$sql=mysqli_query($conn,"select sidenav from admin where usename='$user'");
$sql_fetch=mysqli_fetch_array($sql);
$sidenav=$sql_fetch['sidenav'];
 ?>
 <div class="side-nav">
     <ul class="list-group">
	<li class="list-group-item  text-light" style="background: <?php echo $sidenav; ?>;">
		<a href="documentor-tl-dashboard.php">
			<i class="glyphicon glyphicon-tasks"></i>
			<span class="text-light">Dashboard</span>
		</a>
	</li>
	<li class="list-group-item text-light" style="background: <?php echo $sidenav; ?>;">
		<a href="tl-documentor.php">
			<i class="glyphicon glyphicon-user"></i>
			<span class="text-light">Documentors</span>
		</a>
	</li>
	<li class="list-group-item text-light" style="background: <?php echo $sidenav; ?>;">
		<a href="total-lead.php">
			<i class="glyphicon glyphicon-tags"></i>
			<span class="text-light">Total Leads</span>
		</a>
	</li>
  <li class="list-group-item  text-light" style="background: <?php echo $sidenav; ?>;">
    <a href="callerwise.php">
      <i class="glyphicon glyphicon-time"></i>
      <span class="text-light">Callerwise Lead</span>
    </a>
  </li>
    <li class="list-group-item  text-light" style="background: <?php echo $sidenav; ?>;">
    <a href="add-target.php">
      <i class="glyphicon glyphicon-time"></i>
      <span class="text-light">Add Target</span>
    </a>
  </li>
    <li class="list-group-item text-light" style="background: <?php echo $sidenav; ?>;">
    <a href="change-theme.php">
      <i class="glyphicon glyphicon-fire"></i>
      <span class="text-light">Change Theme</span>
    </a>
  </li>
  
      <li class="list-group-item text-light" style="background: <?php echo $sidenav; ?>;">
    <a href="change-password.php">
      <i class="glyphicon glyphicon-cog"></i>
      <span class="text-light">Change Password</span>
    </a>
  </li>
	<li class="list-group-item text-light" style="background: <?php echo $sidenav; ?>;">
		<a href="logout.php">
			<i class="glyphicon glyphicon-off"></i>
			<span class="text-light">Logout</span>
		</a>
	</li>
</ul>
</div>