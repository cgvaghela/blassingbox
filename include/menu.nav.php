<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><img src="images/logo.png"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li ><a href="index.php">Home</a></li>
					<li <?php echo $currentPageName=="prayer.php" ? 'class="active"' : '';?>><a href="prayer.php">Add New Prayer Request</a></li>
					<li <?php echo $currentPageName=="prayer-list.php" ? 'class="active"' : '';?> <?php echo $currentPageName=="view.php" ? 'class="active"' : '';?>><a href="prayer-list.php">Pray For Someone</a></li>
					<li <?php echo $currentPageName=="praise.php" ? 'class="active"' : '';?>><a href="praise.php">Praise Reports</a></li>                           
				</ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>