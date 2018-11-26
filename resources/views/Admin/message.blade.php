
<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>YOUR HOTEL</title>

    <link href="{{url('admin')}}/assets/css/bootstrap.css" rel="stylesheet" />

    <link href="{{url('admin')}}/assets/css/font-awesome.css" rel="stylesheet" />

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
                        <a href="{{url('admin')}}/home"><i class="fa fa-dashboard"></i> Status</a>
                    </li>
                    <li>
                        <a class="active-menu" href="{{url('admin')}}/messages"><i class="fa fa-desktop"></i> News Letters</a>
                    </li>
					<li>
                        <a href="{{url('admin')}}/roombook"><i class="fa fa-bar-chart-o"></i>Room Booking</a>
                    </li>
                    <li>
                        <a href="{{url('admin')}}/payment"><i class="fa fa-qrcode"></i> Payment</a>
                    </li>
                    <li>
                        <a  href="{{url('admin')}}/profit"><i class="fa fa-qrcode"></i> Profit</a>
                    </li>
                    <li>
                        <a href="{{url('admin')}}/logout" ><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>




            </div>

        </nav>

        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                           News letters<small> panel</small>
                        </h1>
                    </div>
                </div>



				 <div class="row">
                <div class="col-md-12">
                    <div class="jumbotron">
                        <h3>Send The News Letters to Followers</h3>


                        <p></p>
                        <p>
						<div class="panel-body">
                            <button class="btn btn-primary btn" data-toggle="modal" data-target="#myModal">
                              Send New News Letters
                            </button>
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Compose News Letter</h4>
                                        </div>
										<form method="post">
                                        <div class="modal-body">
                                            <div class="form-group">
                                            <label>Title</label>
                                            <input name="title" class="form-control" placeholder="Enter Title">
											</div>
										</div>
										<div class="modal-body">
                                            <div class="form-group">
                                            <label>Subject</label>
                                            <input name="subject" class="form-control" placeholder="Enter Subject">
											</div>
                                        </div>
										<div class="modal-body">
										<div class="form-group">
										  <label for="comment">News</label>
										  <textarea name="news" class="form-control" rows="5" id="comment"></textarea>
										</div>
										 </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                                           <input type="submit" name="log" value="Send" class="btn btn-primary">
										  </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        </p>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
											<th>Phone Number</th>
                                            <th>Email</th>
                                            <th>Date</th>
											<th>Status</th>
											<th>Approval</th>
											<th>Remove</th>

                                        </tr>
                                    </thead>
                                    <tbody>


                                    @foreach ($mes as $m)
                                    @if($m->id % 2 ==1 )

												<tr class='gradeC'>
													<td>{{$m->fullName}}</td>
													<td>{{$m->phone}}</td>
													<td>{{$m->email}}</td>
													<td>{{$m->cdata}}</td>
													<td>{{$m->approval}}</td>
                                                    <td><a href='{{url("admin/newsletter/".$m->id)}}'class='btn btn-primary'> <i class='fa fa-edit' ></i> Permission</a></td>
                                                        <td><a href='{{url("admin/newsletterdel/".$m->id)}}' class='btn btn-danger'> <i class='fa fa-edit' ></i> Delete</a></td>
												</tr>
											@endif
                                            @if($m->id % 2 ==0 )
                                            <tr class='gradeU'>
													<td>{{$m->fullName}}</td>
													<td>{{$m->phone}}</td>
													<td>{{$m->email}}</td>
													<td>{{$m->cdata}}</td>
													<td>{{$m->approval}}</td>
                                                <td><a href='{{url("admin/newsletter/".$m->id)}}' class='btn btn-primary'> <i class='fa fa-edit' ></i> Permission</a></td>
                                                <td><a href='{{url("admin/newsletterdel/".$m->id)}}'class='btn btn-danger'> <i class='fa fa-edit' ></i> Delete </a></td>
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
