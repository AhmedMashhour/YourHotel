
<!DOCTYPE html>

<head>
      <meta charset="utf-8" />

    <title>YOUR HOTEL</title>
    <link href="{{url('admin/')}}/assets/css/bootstrap.css" rel="stylesheet" />
    <link href="{{url('admin/')}}/assets/css/font-awesome.css" rel="stylesheet" />
    <link href="{{url('admin/')}}/assets/css/custom-styles.css" rel="stylesheet" />
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{url('admin/')}}/home">MAIN MENU </a>
            </div>

            <ul class="nav navbar-top-links navbar-right">

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        </li>
                        <li><a href="{{url('admin/')}}/settings"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="{{url('admin/')}}/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>

                </li>
            </ul>
        </nav>
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a class="active-menu" href="{{url('admin/')}}/settings"><i class="fa fa-dashboard"></i>Room Status</a>
                    </li>
					<li>
                        <a  href="{{url('admin/')}}/room"><i class="fa fa-plus-circle"></i>Add Room</a>
                    </li>
                    <li>
                        <a   href="{{url('admin/')}}/roomdel"><i class="fa fa-pencil-square-o"></i> Delete Room</a>
                    </li>


</ul>
            </div>

        </nav>

        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                           Available <small> Rooms</small>
                        </h1>
                    </div>
                </div>

                <div class="row">


				<?php
										foreach ($rooms as $room)
										{
												$type = $room['type'];
											if($type == "Superior Room")
											{
												echo"<div class='col-md-3 col-sm-12 col-xs-12'>
													<div class='panel panel-primary text-center no-boder bg-color-blue'>
														<div class='panel-body'>
															<i class='fa fa-users fa-5x'></i>
															<h3>".$room['bedding']."</h3>
														</div>
														<div class='panel-footer back-footer-blue'>
															".$room['type']."

														</div>
													</div>
												</div>";
											}
											else if ($type == "Deluxe Room")
											{
												echo"<div class='col-md-3 col-sm-12 col-xs-12'>
													<div class='panel panel-primary text-center no-boder bg-color-green'>
														<div class='panel-body'>
															<i class='fa fa-users fa-5x'></i>
															<h3>".$room['bedding']."</h3>
														</div>
														<div class='panel-footer back-footer-green'>
															".$room['type']."

														</div>
													</div>
												</div>";

											}
											else if($type =="Guest House")
											{
												echo"<div class='col-md-3 col-sm-12 col-xs-12'>
													<div class='panel panel-primary text-center no-boder bg-color-brown'>
														<div class='panel-body'>
															<i class='fa fa-users fa-5x'></i>
															<h3>".$room['bedding']."</h3>
														</div>
														<div class='panel-footer back-footer-brown'>
															".$room['type']."

														</div>
													</div>
												</div>";

											}
											else if($type =="Single Room")
											{
												echo"<div class='col-md-3 col-sm-12 col-xs-12'>
													<div class='panel panel-primary text-center no-boder bg-color-red'>
														<div class='panel-body'>
															<i class='fa fa-users fa-5x'></i>
															<h3>".$room['bedding']."</h3>
														</div>
														<div class='panel-footer back-footer-red'>
															".$room['type']."

														</div>
													</div>
												</div>";

											}
										}
									?>

                </div>



</div>
            </div>
        </div>
    <script src="{{url('admin/')}}/assets/js/jquery-1.10.2.js"></script>
    <script src="{{url('admin/')}}/assets/js/bootstrap.min.js"></script>
    <script src="{{url('admin/')}}/assets/js/jquery.metisMenu.js"></script>
    <script src="{{url('admin/')}}/assets/js/custom-scripts.js"></script>


</body>
</html>
