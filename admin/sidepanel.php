  <?php
 $user=$_SESSION['sid'];
include("../config/database.php");
$sql=mysqli_query($conn,"select sidenav from admin where usename='$user'");
$sql_fetch=mysqli_fetch_array($sql);
$sidenav=$sql_fetch['sidenav'];
 ?>
 <div class="side-nav">
     <ul class="list-group">
	<li class="list-group-item text-light" style="background: <?php echo $sidenav; ?>;">
		<a href="admin.php">
			<i class="glyphicon glyphicon-dashboard"></i>
			<span class="text-light">Dashboard</span>
		</a>
	</li>
	<li class="dropdown list-group-item dropright" style="background: <?php echo $sidenav; ?>;">
		<a href="#" class="dropdown-toggle text-light" data-toggle='dropdown' style="font-size: 20px;">
			<span class="glyphicon glyphicon-ok"></span>
			Varified Leads
		</a>
		<div class="dropdown-menu bg-dark">
			<a href="admin-documentor.php" class="dropdown-item text-light bg-dark">
			Documenter Lead
		    </a>
		<a href="varified-lead.php" class="dropdown-item text-light bg-dark">
			Varified Lead
		</a>
		<a href="admin-linker.php" class="dropdown-item text-light bg-dark">
			Linker lead
		</a>
		 <a href="admin-paymentor.php" class="dropdown-item text-light bg-dark">
      Balance maintainer lead
    </a>
		</div>
	</li>
		<li class="dropdown list-group-item dropright" style="background: <?php echo $sidenav; ?>;">
		<a href="#" class="dropdown-toggle text-light" data-toggle='dropdown' style="font-size: 20px;">
			<span class="glyphicon glyphicon-remove"></span>
			Not Varified Leads
		</a>
		<div class="dropdown-menu bg-dark">
		<a href="not-varified-lead.php" class="dropdown-item text-light bg-dark">
			Not Varified Lead
		</a>
		<a href="not-interested-linker.php" class="dropdown-item text-light bg-dark">
			Not Interested Linker lead
		</a>
		 <a href="not-interested-paymentor.php" class="dropdown-item text-light bg-dark">
       Not Interested Balance maintainer lead
    </a>
		</div>
	</li>
			<li class="dropdown list-group-item dropright" style="background: <?php echo $sidenav; ?>;">
		<a href="#" class="dropdown-toggle text-light" data-toggle='dropdown' style="font-size: 20px;">
			<span class="glyphicon glyphicon-dashboard"></span>
			Follow Up Leads
		</a>
		<div class="dropdown-menu bg-dark">
	    <a href="follow-up-varifier.php" class="dropdown-item text-light bg-dark">
			Follow Up Varifier lead
		</a>
		<a href="follow-up-linker.php" class="dropdown-item text-light bg-dark">
			Follow Up Linker lead
		</a>
		 <a href="follow-up-paymentor.php" class="dropdown-item text-light bg-dark">
       Follow Up Balance maintainer lead
    </a>
		</div>
	</li>
	<li class="dropdown list-group-item text-light dropright" style="background: <?php echo $sidenav; ?>;">
		<a href="#" class="dropdown-toggle text-light" data-toggle='dropdown' style="font-size: 20px;">
			<i class="glyphicon glyphicon-user"></i>
			Documentor
		</a>
		<div class="dropdown-menu bg-dark">
			<a href="add-documentor.php" class="dropdown-item text-light bg-dark">Add Documentor</a>
		    <a href="view-documentor.php" class="dropdown-item text-light bg-dark">
			View Documentor
		</a>
		</div>
	</li>
	<li class="dropdown list-group-item text-light dropright" style="background: <?php echo $sidenav; ?>;">
		<a href="#" class="dropdown-toggle text-light" data-toggle='dropdown' style="font-size: 20px;">
			<i class="glyphicon glyphicon-user"></i>
			Linker
		</a>
		<div class="dropdown-menu bg-dark">
			<a href="add-linker.php" class="dropdown-item text-light bg-dark">Add Linker</a>
		    <a href="view-linker.php" class="dropdown-item text-light bg-dark">
			View Linker
		</a>
		</div>
	</li>
	<li class="dropdown list-group-item text-light dropright" style="background: <?php echo $sidenav; ?>;">
		<a href="#" class="dropdown-toggle text-light" data-toggle='dropdown' style="font-size: 20px;">
			<i class="glyphicon glyphicon-user"></i>
			Balance Maintainer
		</a>
		<div class="dropdown-menu bg-dark">
			<a href="add_paymentor.php" class="dropdown-item text-light bg-dark">Add Balance Maintainer</a>
		    <a href="view-paymentor.php" class="dropdown-item text-light bg-dark">
			View Balance Maintainer
		</a>
		</div>
	</li>
	<li class="dropdown list-group-item text-light dropright" style="background: <?php echo $sidenav; ?>;">
		<a href="#" class="dropdown-toggle text-light" data-toggle='dropdown' style="font-size: 20px;">
			<i class="glyphicon glyphicon-user"></i>
			Varifier
		</a>
		<div class="dropdown-menu bg-dark">
			<a href="add_varifier.php" class="dropdown-item text-light bg-dark">Add Varifier</a>
		    <a href="view_varifier.php" class="dropdown-item text-light bg-dark">
			View Varifier
		</a>
		</div>
	</li>
	<li class="dropdown list-group-item text-light dropright" style="background: <?php echo $sidenav; ?>;">
		<a href="#" class="dropdown-toggle text-light" data-toggle='dropdown' style="font-size: 20px;">
			<i class="glyphicon glyphicon-user"></i>
			Team Leader
		</a>
		<div class="dropdown-menu bg-dark">
			<a href="add-tl.php" class="dropdown-item text-light bg-dark">Add TL</a>
		    <a href="view-team-leader.php" class="dropdown-item text-light bg-dark">
			View TL
		</a>
		</div>
	</li>
			<li class="dropdown list-group-item dropright" style="background: <?php echo $sidenav; ?>;">
		<a href="#" class="dropdown-toggle text-light" data-toggle='dropdown' style="font-size: 20px;">
			<span class="glyphicon glyphicon-signal"></span>
			Performance
		</a>
		<div class="dropdown-menu bg-dark">
		<a href="documentor-performance.php" class="dropdown-item text-light bg-dark">
			Documentor Department
		</a>
		<a href="varifier-performance.php" class="dropdown-item text-light bg-dark">
			Varifier Department
		</a>
		 <a href="linkup-performance.php" class="dropdown-item text-light bg-dark">
           Linkup Department
    </a>
    		 <a href="balance-performance.php" class="dropdown-item text-light bg-dark">
           Balance Department
    </a>
     		 <a href="tl-performance.php" class="dropdown-item text-light bg-dark">
           Team Leader
    </a>
		</div>
	</li>
				<li class="dropdown list-group-item dropright" style="background: <?php echo $sidenav; ?>;">
		<a href="#" class="dropdown-toggle text-light" data-toggle='dropdown' style="font-size: 20px;">
			<span class="glyphicon glyphicon-send"></span>
			Add Target
		</a>
		<div class="dropdown-menu bg-dark">
		<a href="documentor-tl-target.php" class="dropdown-item text-light bg-dark">
			Documentor TL
		</a>
		<a href="linker-tl-target.php" class="dropdown-item text-light bg-dark">
			Linker TL
		</a>
		 <a href="balance-tl-target.php" class="dropdown-item text-light bg-dark">
           Balance TL
    </a>
		</div>
	</li>
		<li class="list-group-item text-light" style="background: <?php echo $sidenav; ?>;">
		<a href="stats.php">
			<i class="glyphicon glyphicon-stats"></i>
			<span class="text-light">Statistics</span>
		</a>
	</li>
	<li class="list-group-item text-light" style="background: <?php echo $sidenav; ?>;">
		<a href="dsr.php">
			<i class="glyphicon glyphicon-screenshot"></i>
			<span class="text-light">DSR</span>
		</a>
	</li>
	<li class="list-group-item text-light" style="background: <?php echo $sidenav; ?>;">
		<a href="admin-page-change-password.php">
			<i class="glyphicon glyphicon-cog"></i>
			<span class="text-light">Change Password</span>
		</a>
	</li>
		<li class="list-group-item text-light" style="background: <?php echo $sidenav; ?>;">
		<a href="change-theme.php">
			<i class="glyphicon glyphicon-fire"></i>
			<span class="text-light">Change Theme</span>
		</a>
	</li>
		<li class="list-group-item text-light" style="background: <?php echo $sidenav; ?>;">
		<a href="shutdown-site.php">
			<i class="glyphicon glyphicon-lock"></i>
			<span class="text-light">Shutdown CRM</span>
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