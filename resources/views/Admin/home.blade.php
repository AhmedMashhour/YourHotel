
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
    <link href='{{url("admin")}}/http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
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
                    <a class="dropdown-toggle" data-toggle="dropdown" href="{{url('admin')}}/#" aria-expanded="false">
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
                        <a class="active-menu" href="{{url('admin')}}/home"><i class="fa fa-dashboard"></i> Status</a>
                    </li>
                    <li>
                        <a href="{{url('admin/messages')}}"><i class="fa fa-desktop"></i> News Letters</a>
                    </li>

                    <li>
                        <a href="{{url('admin')}}/payment"><i class="fa fa-qrcode"></i> Payment</a>
                    </li>
                    <li>
                        <a  href="{{url('admin')}}/profit"><i class="fa fa-qrcode"></i> Profit</a>
                    </li>
                    <li>
                        <a href="{{url('admin')}}/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>




					</ul>

            </div>

        </nav>
        <div id="page-wrapper">
            <div id="page-inner">


                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Status <small>Room Booking </small>
                        </h1>
                    </div>
                </div>

                <?php
                $c=0;
                foreach ($roombooking as $i)
                {
                    if($i['stat']=='Not Conform')
                    $c+=1;
                }


                ?>


					<div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">

                        </div>
                        <div class="panel-body">
                            <div class="panel-group" id="accordion">

							<div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="{{url('admin')}}/#collapseTwo">
											<button class="btn btn-default" type="button">
												 New Room Bookings  <span class="badge">{{$c}}</span>
											</button>
											</a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse in" style="height: auto;">
                                        <div class="panel-body">
                                           <div class="panel panel-default">

                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Country</th>
											<th>Room</th>
											<th>Bedding</th>
											<th>Meal</th>
											<th>Check In</th>
											<th>Check Out</th>
											<th>Status</th>
											<th>More</th>

                                        </tr>
                                    </thead>
                                    <tbody>



                              @foreach ($roombooking as $i)
                                  @if($i->stat=="Not Conform")
                                  <tr>
                                    <th>{{$i->id}}</th>
                                    <th>{{$i->firstName.' '}} {{$i->lastName}}</th>
                                    <th>{{$i->email}}</th>
                                    <th>{{$i->country}}</th>
                                    <th>{{$i->roomType}}</th>
                                    <th>{{$i->Bed}}</th>
                                    <th>{{$i->Meal}}</th>
                                    <th>{{$i->wantedAt}}</th>
                                    <th>{{$i->leftAt}}</th>
                                    <th>{{$i->stat}}</th>

                                    <th><a href='{{url("admin")}}/roombook/{{$i->id}} ' class='btn btn-primary'>Action</a></th>
                                    </tr>

                                  @endif
                              @endforeach

                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                                        </div>
                                    </div>
                                </div>


                                <?php
                                $x=0;
                                foreach ($roombooking as $i)
                                {
                                    if($i['stat']=='Not Conform')
                                    $x+=1;
                                }


                                ?>

                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="{{url('admin')}}/#collapseOne" class="collapsed">
											<button class="btn btn-primary" type="button">
												 Booked Rooms  <span class="badge">{{$x}}</span>
											</button>

											</a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse" style="height: 0px;">
                                        <div class="panel-body">


                                        @foreach ($roombooking as $r)
                                        @if($r->stat=='Conform')
                                        <div class='col-md-3 col-sm-12 col-xs-12'>
                                            <div class='panel panel-primary text-center no-boder bg-color-blue'>
                                                <div class='panel-body'>
                                                    <i class='fa fa-users fa-5x'></i>
                                                    <h3>{{$r->firstName}}</h3>
                                                </div>
                                                <div class='panel-footer back-footer-blue'>
                                                <a href="{{url('admin/show/'.$r->id)}}"><button  class='btn btn-primary btn'>
                                            Show
                                            </button></a>
                                                    {{$r->roomType}}
                                                </div>
                                            </div>
                                    </div>
                                        @endif

                                        @endforeach
										</div>

                                    </div>

                                </div>

                                <?php
                                $f=0;
                                foreach ($contacts as $i)
                                {

                                    $f+=1;
                                }


                                ?>
                                <div class="panel panel-danger">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="{{url('admin')}}/#collapseThree" class="collapsed">
											<button class="btn btn-primary" type="button">
												 Followers  <span class="badge"><?php echo $f ; ?></span>
											</button>
											</a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Full Name</th>
                                            <th>Email</th>
											<th>Follow Start</th>
                                            <th>Permission status</th>


                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($contacts as $k)
                                        <tr>
                                            <th>{{$k->id}}</th>
                                            <th>{{$k->fullname}}</th>
                                            <th>{{$k->email}} </th>
                                            <th>{{$k->cdate}} </th>
                                            <th>{{$k->approval}}</th>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
								<a href="{{url('admin')}}/messages" class="btn btn-primary">More Action</a>
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
            </div>









                <!-- /. ROW  -->

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>


</body>

</html>
