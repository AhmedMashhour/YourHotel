
<!DOCTYPE html>
<html >

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Administrator	</title>
    <link href="{{url('admin')}}/assets/css/bootstrap.css" rel="stylesheet" />
    <link href="{{url('admin')}}/assets/css/font-awesome.css" rel="stylesheet" />
    <link href="{{url('admin')}}/assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
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
                <a class="navbar-brand" href="{{url('admin')}}/home.php">{{auth()->guard('admin')->user()->name}}  </a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="{{url('admin')}}/#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="{{url('admin')}}/usersetting.php"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="{{url('admin')}}/settings.php"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="{{url('admin')}}/logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a  href="{{url('admin')}}/home"><i class="fa fa-dashboard"></i> Status</a>
                    </li>
                    <li>
                        <a href="{{url('admin')}}/messages"><i class="fa fa-desktop"></i> News Letters</a>
                    </li>
					<li>
                        <a class="active-menu" href="{{url('admin/roombook')}}"><i class="fa fa-bar-chart-o"></i> Room Booking</a>
                    </li>
                    <li>
                        <a href="{{url('admin')}}/payment"><i class="fa fa-qrcode"></i> Payment</a>
                    </li>
					<li>
                        <a  href="{{url('admin')}}/profit"><i class="fa fa-qrcode"></i> Profit</a>
                    </li>

                    <li>
                        <a href="{{url('/')}}/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>




					</ul>

            </div>

        </nav>



        <div id="page-wrapper">
            <div id="page-inner">


                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Room Booking<small>	<?php echo  $curdate; ?> </small>
                        </h1>
                    </div>


					<div class="col-md-8 col-sm-8">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                           Booking Conformation
                        </div>
                        <div class="panel-body">

							<div class="table-responsive">
                                <table class="table">
                                    <tr>
                                            <th>DESCRIPTION</th>
                                            <th>INFORMATION</th>

                                        </tr>
                                        <tr>
                                            <th>Name</th>
                                            <th>{{$roo->titel.' '.$roo->firstName .' '.$roo->lastName}} </th>

                                        </tr>
										<tr>
                                            <th>Email</th>
                                            <th>{{$roo->email}} </th>

                                        </tr>
										<tr>
                                            <th>Nationality </th>
                                            <th>{{$roo->national}}</th>

                                        </tr>
										<tr>
                                            <th>Country </th>
                                            <th>{{$roo->country}}</th>

                                        </tr>
										<tr>
                                            <th>Phone No </th>
                                            <th>{{$roo->phone}}</th>

                                        </tr>
										<tr>
                                            <th>Type Of the Room </th>
                                            <th>{{$roo->roomType}}</th>

                                        </tr>
										<tr>
                                            <th>No Of the Room </th>
                                            <th>{{$roo->numberOfRoom}}</th>

                                        </tr>
										<tr>
                                            <th>Meal Plan </th>
                                            <th>{{$roo->Meal}}</th>

                                        </tr>
										<tr>
                                            <th>Bedding </th>
                                            <th>{{$roo->bed}}</th>

                                        </tr>
										<tr>
                                            <th>Check-in Date </th>
                                            <th>{{$roo->wantedAt}}</th>

                                        </tr>
										<tr>
                                            <th>Check-out Date</th>
                                            <th>{{$roo->leftAt}}</th>

                                        </tr>
										<tr>
                                            <th>No of days</th>
                                            <th>{{$roo->numberOfDays}}</th>

                                        </tr>
										<tr>
                                            <th>Status Level</th>
                                            <th>{{$roo->stat}}</th>

                                        </tr>





                                </table>
                            </div>



                        </div>
                        <div class="panel-footer">
                                <form method="post" action="{{url('admin/conform')}}" >

										<div class="form-group">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="id" value="{{$roo->id}}"
														<label>Select the Conformation</label>
														<select name="conf"class="form-control">
															<option value selected>	</option>
															<option value="Conform">Conform</option>


														</select>
                                         </div>
    @if(($roo->roomType=='Superior Room'&&$su>0)||($roo->roomType=='Guest House'&&$gu>0)||($roo->roomType=='Single Room'&&$si>0||($roo->roomType=='Deluxe Room'&&$de>0)))
							<input type="submit" name="co" value="Conform" class="btn btn-success">
@endif
@if(($roo->roomType=='Superior Room'&&$su<=0)||($roo->roomType=='Guest House'&&$gu<=0)||($roo->roomType=='Single Room'&&$si<=0||($roo->roomType=='Deluxe Room'&&$de<=0)))
<div class="btn btn-danger">thir is no Room for this !</div>
@endif
							</form>
                        </div>
                    </div>
					</div>

					<div class="col-md-4 col-sm-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Available Room Details
                        </div>
                        <div class="panel-body">
						<table width="200px">

							<tr>
								<td><b>Superior Room	 </b></td>
								<td><button type="button" class="btn btn-primary btn-circle">
                                    @if($su<=0)
                                    {{'NO'}}
                                    @endif
                                    @if($su>0)
                                    {{$su}}
                                    @endif

                                    </button></td>
							</tr>
							<tr>
								<td><b>Guest House</b>	 </td>
								<td><button type="button" class="btn btn-primary btn-circle">
                                        @if($gu<=0)
                                        {{'NO'}}
                                        @endif
                                        @if($gu>0)
                                        {{$gu}}
                                        @endif </button></td>
							</tr>
							<tr>
								<td><b>Single Room	 </b></td>
								<td><button type="button" class="btn btn-primary btn-circle">
                                        @if($si<=0)
                                        {{'NO'}}
                                        @endif
                                        @if($si>0)
                                        {{$si}}
                                        @endif</button></td>
							</tr>
							<tr>
								<td><b>Deluxe Room</b>	 </td>
								<td><button type="button" class="btn btn-primary btn-circle">
                                        @if($de<=0)
                                        {{'NO'}}
                                        @endif
                                        @if($de>0)
                                        {{$de}}
                                        @endif </button></td>
							</tr>
							<tr>
								<td><b>Total Rooms	</b> </td>
								<td> <button type="button" class="btn btn-danger btn-circle">
                                        @if($total<=0)
                                        {{'NO'}}
                                        @endif
                                        @if($total>0)
                                        {{$total}}
                                        @endif</button></td>
							</tr>
						</table>





						</div>
                        <div class="panel-footer">

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
    <script src="{{url('admin')}}/assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="{{url('admin')}}/assets/js/morris/morris.js"></script>
    <script src="{{url('admin')}}/assets/js/custom-scripts.js"></script>


</body>

</html>
