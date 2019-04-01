<?php
include "header.php";
?>
<div id="dashboard">
	<div class="container-fluid">
		<div class="row">
			
			<!--Dashboard left-->

			<div class="col-sm-12 col-md-3 col-lg-3 nav-side-menu">
				<div class="brand">
					<div class="logo1">
						<img src="assets/img/kadangkodinglogo.png" height="35px" width="170px;">
					</div>
					
					<div class="logo2">
						<img src="assets/img/kadangkodinglogo.png" height="35px" width="170px;">
					</div>

				</div>
				<i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>

				<div class="menu-list">
					<ul id="menu-content" class="menu-content collapse out">
						<li >
							<a  href="dashboard.php">
								<i class="fas fa-tachometer-alt"></i> Dashboard
							</a>
						</li>

						<li  data-toggle="collapse" data-target="#products" class="collapsed ">
							<a href="#"><i class="fas fa-desktop"></i> All Project <span class="arrow"></span></a>
						</li>
						<ul class="sub-menu collapse" id="products">
							<li class="active"><a href="#">Project 1</a></li>
							<li><a href="#">Project 2</a></li>
							<li><a href="#">Project 3</a></li>
							<li><a href="#">Project 4</a></li>
							<li><a href="#">Project 5</a></li>
							<li><a href="#">Project 6</a></li>
							<li><a href="#">Project 7</a></li>
							<li><a href="#">Project 8</a></li>
							<li><a href="#">Project 9</a></li>
							<li><a href="#">Project 10</a></li>
						</ul>


						<li data-toggle="collapse" data-target="#service" class="collapsed">
							<a href="#"><i class="fas fa-server"></i> Services <span class="arrow"></span></a>
						</li>  
						<ul class="sub-menu collapse" id="service">
							<li>New Service 1</li>
							<li>New Service 2</li>
							<li>New Service 3</li>
						</ul>


						<li data-toggle="collapse" data-target="#new" class="collapsed">
							<a href="#"><i class="fas fa-database"></i> Database <span class="arrow"></span></a>
						</li>
						<ul class="sub-menu collapse" id="new">
							<li>Database 1</li>
							<li>Database 2</li>
							<li>Database 3</li>
						</ul>


						<li class="active">
							<a href="#">
								<i class="fas fa-user"></i> Profile
							</a>
						</li>

						<li>
							<a href="#">
								<i class="fas fa-cog"></i> Setting
							</a>
						</li>
						<li class="logout_hide">
							<a href="#">
								<i class="fas fa-sign-in-alt"></i>  Log out
							</a>
						</li>


							<p align="center" class="footer_dashboard">
								<!--&copy 2019 Kadangkoding . All Rights Reserved.-->
							</p>
					</ul>
				</div>
			</div>

			<!-- Dashboard right -->

			<div class="col-sm-12 col-md-9 col-lg-9 dashboard_right">
				<div class="header_dashboard">
					<div class="container-fluid">
						<div class="row">
							<div class="col-6 col-sm-3  col-md-3 col-lg-3">
								<div class="search">
									<div class="input-group">           
										<input class="form-control form-control-sm" type="text" placeholder="Search....."  aria-describedby="sizing-addon2" value/>
									</div>
								</div>	
							</div>
							<div class="col-6 col-sm-9 col-md-9" align="right">
								<a href="">Log Out </a>
							</div>
						</div>
					</div>
				</div>
				<div class="dashboard_main">
					<div class="container">
						<div class="page">
							
						</div>						
					</div>
				</div>
			</div>
		</div>
	</div>

</div>
<?php
include "footer.php";
?>