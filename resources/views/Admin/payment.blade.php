
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
                        <a class="active-menu" href="{{url('admin')}}/payment"><i class="fa fa-qrcode"></i> Payment</a>
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
                           Payment Details<small> </small>
                        </h1>
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
											<th>Room type</th>
                                            <th>Bed Type</th>
                                            <th>Check in</th>
											<th>Check out</th>
											<th>No of Room</th>
											<th>Meal Type</th>

                                            <th>Room Rent</th>
											<th>Bed Rent</th>
											<th>Meals </th>
											<th>Gr.Total</th>
											<th>Print</th>

                                        </tr>
                                    </thead>
                                    <tbody>


@foreach ($pay as $p)
@if($p->id % 2 ==1 )
{
    <tr class='gradeC'>
        <td>{{$p->title}} {{$p->firstName}} {{$p->lastName}}</td>
        <td>{{$p->roomType}}</td>
        <td>{{$p->typeOfBed}}</td>
        <td>{{$p->wantedAt}}</td>
        <td>{{$p->leftAt}}</td>
        <td>{{$p->numberOfRoom}}</td>
        <td>{{$p->meal}}</td>

        <td>{{$p->ttot}}</td>
        <td>{{$p->mepr}}</td>
        <td>{{$p->btot}}</td>
        <td>{{$p->fintot}}</td>
        <td><a href='{{url("admin")}}/print/{{$p->id}}'  class='btn btn-primary'> <i class='fa fa-print' ></i> Print</a></td>
        </tr>
}
@endif
@if($p->id % 2 ==0 )
{
    <tr class='gradeU'>
            <td>{{$p->title}} {{$p->firstName}} {{$p->lastName}}</td>
            <td>{{$p->roomType}}</td>
            <td>{{$p->typeOfBed}}</td>
            <td>{{$p->wantedAt}}</td>
            <td>{{$p->leftAt}}</td>
            <td>{{$p->numberOfRoom}}</td>
            <td>{{$p->meal}}</td>

            <td>{{$p->ttot}}</td>
            <td>{{$p->mepr}}</td>
            <td>{{$p->btot}}</td>
            <td>{{$p->fintot}}</td>
        <td><a href='{{url("admin")}}/print/{{$p->id}}'  class='btn btn-primary'> <i class='fa fa-print' ></i> Print</a></td>
        </tr>
}
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
