

<!DOCTYPE html>
<html >
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>YOUR HOTEL</title>
    <link href="{{url('admin')}}/assets/css/bootstrap.css" rel="stylesheet" />
    <link href="{{url('admin')}}/assets/css/font-awesome.css" rel="stylesheet" />

	<link rel="stylesheet" href="{{url('admin')}}/assets/css/morris.css">
	<script src="{{url('admin')}}/assets/js/jquery.min.js"></script>
	<script src="{{url('admin')}}/assets/js//raphael-min.js"></script>
	<script src="{{url('admin')}}/assets/js/morris.min.js"></script>


    <link href="{{url('admin')}}/assets/css/custom-styles.css" rel="stylesheet" />
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link href="{{url('admin')}}/assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
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
                <a class="navbar-brand" href="{{url('admin')}}/home">{{auth()->guard('admin')->user()->name}} </a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="{{url('admin')}}/usersetting"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="{{url('admin')}}/settings"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="{{url('admin')}}/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a href="{{url('admin')}}/home"><i class="fa fa-dashboard"></i> Status</a>
                    </li>
                    <li>
                        <a  href="{{url('admin')}}/messages"><i class="fa fa-desktop"></i> News Letters</a>
                    </li>
					<li>
                        <a href="{{url('admin')}}/roombook"><i class="fa fa-bar-chart-o"></i>Room Booking</a>
                    </li>
                    <li>
                        <a  href="{{url('admin')}}/payment"><i class="fa fa-qrcode"></i> Payment</a>
                    </li>
					 <li>
                        <a class="active-menu" href="{{url('admin')}}/profit"><i class="fa fa-qrcode"></i> Profit</a>
                    </li>

                    <li>
                        <a href="{{url('admin')}}/logout" ><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>

                </ul>

            </div>

        </nav>
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="result">
                    <div class="col-md-12">
                        <h1 class="page-header">
                           Profit Details<small> </small>
                        </h1>
                    </div>
                </div>


            <div class="result">


				<br>
				<br>
				<br>
				<br><div id="chart"></div>
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
											<th>ID</th>
                                            <th>Name</th>
                                            <th>Check in</th>
											<th>Check out</th>
                                            <th>Room Rent</th>
											<th>Bed Rent</th>
											<th>Meals </th>
											<th>Gr.Total</th>
											<th>Profit</th>


                                        </tr>
                                    </thead>
                                    <tbody>

									<?php

                                        foreach ($pay as $result)
										{

											$id = $result['id'];

											if($id % 2 ==1 )
											{
												echo"<tr class='gradeC'>
													<td>".$result['id']." </td>
													<td>".$result['title']." ".$result['firstName']." ".$result['lastName']."</td>
													<td>".$result['wantedAt']."</td>
													<td>".$result['leftAt']."</td>


													<td>$".$result['ttot']."</td>
													<td>$".$result['mepr']."</td>
													<td>$".$result['btot']."</td>
													<td>$".$result['fintot']."</td>
													<td>$".$result['fintot']*10/100 ."</td>
													</tr>";
											}
											else
											{
												echo"<tr class='gradeU'>
													<td>".$result['id']." </td>
													<td>".$result['title']." ".$result['firstName']." ".$result['lastName']."</td>

													<td>".$result['wantedAt']."</td>
													<td>".$result['leftAt']."</td>


													<td>$".$result['ttot']."</td>
													<td>$".$result['mepr']."</td>
													<td>$".$result['btot']."</td>
													<td>$".$result['fintot']."</td>
													<td>$".$result['fintot']*10/100 ."</td>
													</tr>";

											}

										}

									?>

                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

                </div>

            </div>


    </div>
            </div>
    <script src="{{url('admin')}}/assets/js/jquery-1.10.2.js"></script>
    <script src="{{url('admin')}}/assets/js/bootstrap.min.js"></script>
    <script src="{{url('admin')}}/assets/js/jquery.metisMenu.js"></script>
    <script src="{{url('admin')}}/assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="{{url('admin')}}/assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
    <script src="{{url('admin')}}/assets/js/custom-scripts.js"></script>


</body>
</html>

