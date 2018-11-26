

<!DOCTYPE html>
<html >
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
                <a class="navbar-brand" href="{{url('admin')}}/home">MAIN MENU </a>
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
                        <a class="active-menu" href="{{url('admin')}}/settings"><i class="fa fa-dashboard"></i>User Dashboard</a>
                    </li>


</ul>

            </div>

        </nav>

        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                           ADMINISTRATOR<small> accounts </small>
                        </h1>
                    </div>
                </div>


            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>User ID</th>
											<th>User name</th>
                                            <th>Email</th>


											<th>Remove</th>

                                        </tr>
                                    </thead>
                                    <tbody>


                                    <script >
                                            function cpyid(x)
                                            {

                                                document.getElementById('id_update').value=x;

                                            }
                                         </script>

            @foreach ($mes as $m)
            @if($m->id % 2 ==0 &&$m->email!='ahmed@admin.com')
            <tr class='gradeC'>
                    <td>{{$m->id}}</td>
                    <td>{{$m->name}}</td>
                    <td>{{$m->email}}</td>


                    <td> @if($m->email!='ahmed@gmail.com')
                        <form action="{{url('admin/deleteuser')}}" method="post">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="hidden" name="id" value="{{$m->id}}">
                        <input type="submit" class='btn btn-danger fa fa-edit'  value='Delete'>
                    </form> @endif
                </td>
                </tr>
            @endif
            @if($m->id % 2 ==1 )
            <tr class='gradeC'>
                    <td>{{$m->id}}</td>
                    <td>{{$m->name}}</td>
                    <td>{{$m->email}}</td>


                    <td> @if($m->email!='ahmed@gmail.com')
                        <form action="{{url('admin/deleteuser')}}" method="post">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="hidden" name="id" value="{{$m->id}}">
                        <input type="submit" class='btn btn-danger fa fa-edit'  value='Delete'>
                    </form>
                    @endif
                </td>
                </tr>
            @endif
            @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
					<div class="panel-body">
                            <button class="btn btn-primary btn" data-toggle="modal" data-target="#myModal1">
															Add New Admin
													</button>
                            <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Add the User name and Password</h4>
                                        </div>
                                        <form method="post" action="{{url('admin/adduser')}}">
                                            <input type="hidden" name="_token" value="{{csrf_token()}}">

                                        <div class="modal-body">
                                            <div class="form-group">
                                            <label>Add new User name</label>
                                            <input name="name"  class="form-control" placeholder="Enter User name">
											</div>
                                        </div>
                                        <div class="modal-body">
                                                <div class="form-group">
                                                <label>New User Email</label>
                                                <input name="email"  class="form-control" placeholder="Enter Email">
                                                </div>
                                            </div>
										<div class="modal-body">
                                            <div class="form-group">
                                            <label>New Password</label>
                                            <input name="password"  class="form-control" placeholder="Enter Password">
											</div>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                                           <input type="submit" name="in" value="Add" class="btn btn-primary">
										  </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

					<div class="panel-body">
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Change the User name and Password</h4>
                                        </div>
                                        <form method="post" action="{{url('admin/updateuser')}}">
                                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                                            <input type="hidden" name="id" id="id_update" value="">
                                        <div class="modal-body">
                                            <div class="form-group">
                                            <label>Change User name</label>
                                            <input name="usname" value="" class="form-control" placeholder="Enter User name">
											</div>
										</div>
										<div class="modal-body">
                                            <div class="form-group">
                                            <label>Change Password</label>
                                            <input name="new_pass" value="" class="form-control" placeholder="Enter New Password">
											</div>
                                        </div>
                                        <div class="modal-body">
                                                <div class="form-group">
                                                <label>Enter Old Password</label>
                                                <input name="old_pass" value="" class="form-control" placeholder="Enter Old Password">
                                                </div>
                                            </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                                           <input type="submit" name="up" value="Update" class="btn btn-primary">
                                        </div>
										  </form>

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
    <script>new WOW().init();</script>

</body>
</html>
