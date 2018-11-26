
<!DOCTYPE html>
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>YOUR HOTEL</title>
    <link href="{{url('admin')}}/assets/css/bootstrap.css" rel="stylesheet" />
    <link href="{{url('admin')}}/assets/css/font-awesome.css" rel="stylesheet" />
    <link href="{{url('admin')}}/assets/css/custom-styles.css" rel="stylesheet" />
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
                <a class="navbar-brand" href="{{url('admin')}}/home">MAIN MENU </a>
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
                        <li><a href="{{url('/')}}/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>

                </li>
            </ul>
        </nav>
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a  href="{{url('admin')}}/settings"><i class="fa fa-dashboard"></i>Rooms Status</a>
                    </li>
					<li>
                        <a  class="active-menu" href="{{url('admin')}}/room"><i class="fa fa-plus-circle"></i>Add Room</a>
                    </li>
                    <li>
                        <a  href="{{url('admin')}}/roomdel"><i class="fa fa-desktop"></i> Delete Room</a>
                    </li>

                </ul>

            </div>

        </nav>



        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                           NEW ROOM <small></small>
                        </h1>
                    </div>
                </div>


            <div class="row">

                <div class="col-md-5 col-sm-5">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            ADD NEW ROOM
                        </div>
                        <div class="panel-body">
						<form name="form" method="post" action="{{url('admin/addroom')}}">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <input type="hidden" name="place" value="Free">
                            <div class="form-group">
                                            <label>Type Of Room *</label>
                                            <select name="type"  class="form-control" required>
												<option value selected ></option>
                                                <option value="Superior Room">SUPERIOR ROOM</option>
                                                <option value="Deluxe Room">DELUXE ROOM</option>
												<option value="Guest House">GUEST HOUSE</option>
												<option value="Single Room">SINGLE ROOM</option>
                                            </select>
                              </div>

								<div class="form-group">
                                            <label>Bedding Type</label>
                                            <select name="bedding" class="form-control" required>
												<option value selected ></option>
                                                <option value="Single">Single</option>
                                                <option value="Double">Double</option>
												<option value="Triple">Triple</option>
                                                <option value="Quad">Quad</option>
												<option value="Triple">None</option>

                                            </select>

                               </div>
							 <input type="submit" name="add" value="Add New" class="btn btn-primary">
							</form>


                        </div>

                    </div>
                </div>


            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            ROOMS INFORMATION
                        </div>
                        <div class="panel-body">
								<!-- Advanced Tables -->
                    <div class="panel panel-default">

                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Room ID</th>
                                            <th>Room Type</th>
											<th>Bedding</th>

                                        </tr>
                                    </thead>
                                    <tbody>

									<?php
										foreach ($rooms as $room)
										{
												$id = $room['id'];
											if($id % 2 == 0)
											{
												echo "<tr class=odd gradeX>
													<td>".$room['id']."</td>
													<td>".$room['type']."</td>
												   <th>".$room['bedding']."</th>
												</tr>";
											}
											else
											{
												echo"<tr class=even gradeC>
													<td>".$room['id']."</td>
													<td>".$room['type']."</td>
												   <th>".$room['bedding']."</th>
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
        </div>
    <script src="{{url('admin')}}/assets/js/jquery-1.10.2.js"></script>
    <script src="{{url('admin')}}/assets/js/bootstrap.min.js"></script>
    <script src="{{url('admin')}}/assets/js/jquery.metisMenu.js"></script>
    <script src="{{url('admin')}}/assets/js/custom-scripts.js"></script>


</body>
</html>
