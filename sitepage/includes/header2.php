<header>
		<nav class="navbar navbar-default header-color" role="navigation">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand logo" href="index.php">The Underground</a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <form class="navbar-form navbar-right" role="search">
		        <div class="form-group">
		        	<input type="text" id="search" autocomplete="off">

					<!-- Show Results -->
					<h4 id="results-text">Showing results for: <b id="search-string">Array</b></h4>
					<ul id="results"></ul>	
		        </div>
		      </form>
		      <ul class="nav navbar-nav navbar-right">
		        <li><a href="index.php">Home</a></li>
		        <li><a href="about.php">About</a></li>
		        <li><a href="chat/index.php">Chat</a></li>
		        <li><a href="shop.php">Shop</a></li>
		        <?php 
				if (!empty($_SESSION)) {
					echo('<li class="dropdown"><a href="profile.php" class="dropdown-toggle" data-toggle="dropdown">'.$username.'<b class="caret"></b></a>');
					echo<<<MENU

			          <ul class="dropdown-menu">
			          	<li><a href="profile.php">View Profile</a></li>
			            <li><a href="signup.php">Edit Profile</a></li>
			            <li><a href="logout.php">Logout</a></li>

			          </ul>
			          </li>
MENU;

				}else{
					echo('<li><a href="index.php">Login</a></li>');
				}
			?>
		        
		      </ul>

		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
	</header>