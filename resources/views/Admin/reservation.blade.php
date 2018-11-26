<doctype html>
<html >
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RESERVATION YOUR HOTEL</title>
    <link href="{{url('admin')}}/assets/css/bootstrap.css" rel="stylesheet" />
    <link href="{{url('admin')}}/assets/css/font-awesome.css" rel="stylesheet" />
    <link href="{{url('admin')}}/assets/css/custom-styles.css" rel="stylesheet" />
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a  href="{{url('/')}}/home"><i class="fa fa-home"></i> Homepage</a>
                    </li>

					</ul>

            </div>

        </nav>

        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            RESERVATION <small></small>
                        </h1>
                    </div>
                </div>


            <div class="row">

                <div class="col-md-5 col-sm-5">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            PERSONAL INFORMATION
                        </div>
                        <div class="panel-body">
						<form name="form" method="post" action="{{url('insert/reservation')}}">
                            <div class="form-group">
                                            <label>Title*</label>
                                            <select name="titel" class="form-control" required >
												<option value selected ></option>
                                                <option value="Dr.">Dr.</option>
                                                <option value="Miss.">Miss.</option>
                                                <option value="Mr.">Mr.</option>
                                                <option value="Mrs.">Mrs.</option>
												<option value="Prof.">Prof.</option>
												<option value="Rev .">Rev .</option>
												<option value="Rev . Fr">Rev . Fr .</option>
                                            </select>
                              </div>
							  <div class="form-group">
                                            <label>First Name</label>
                                            <input name="firstName" class="form-control" required>

                               </div>
							   <div class="form-group">
                                            <label>Last Name</label>
                                            <input name="lastName" class="form-control" required>

                               </div>
							   <div class="form-group">
                                            <label>Email</label>
                                            <input name="email" type="email" class="form-control" required>

                               </div>
							   <div class="form-group">
                                            <label>Nationality*</label>
                                            <label class="radio-inline">
                                                <input type="radio" name="national"  value="Egyption" checked="">Egyption
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="national"  value="Non Egyption">Non Egyption
                                            </label>

                                </div>
								<?php

								$countries = array("Afghanistan", "Albania", "Algeria", "American Samoa",
                                    "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda",
                                    "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan",
                                    "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium",
                                    "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina",
                                    "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory",
                                    "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia",
                                    "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic",
                                    "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia",
                                    "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands",
                                    "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus",
                                    "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic",
                                    "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea",
                                    "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)",
                                    "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan",
                                    "French Guiana", "French Polynesia", "French Southern Territories",
                                    "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece",
                                    "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea",
                                    "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands",
                                    "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary",
                                    "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq",
                                    "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan",
                                    "Kenya", "Kiribati", "Korea, Democratic People's Republic of",
                                    "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic",
                                    "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya",
                                    "Liechtenstein", "Lithuania", "Luxembourg", "Macau",
                                    "Macedonia, The Former Yugoslav Republic of", "Madagascar",
                                    "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands");

								?>
								<div class="form-group">
                                            <label>Passport Country*</label>
                                            <select name="country" class="form-control" required>
												<option value selected ></option>
                                               <?php
												foreach($countries as $key => $value):
												echo '<option value="'.$value.'">'.$value.'</option>';
												endforeach;
												?>
                                            </select>
								</div>
								<div class="form-group">
                                            <label>Phone Number</label>
                                            <input name="phone" type ="text" class="form-control" required>

                               </div>

                        </div>

                    </div>
                </div>


            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            RESERVATION INFORMATION
                        </div>
                        <div class="panel-body">
								<div class="form-group">
                                            <label>Type Of Room *</label>
                                            <select name="roomType"  class="form-control" required>
												<option value selected ></option>
                                                <option value="Superior Room">SUPERIOR ROOM</option>
                                                <option value="Deluxe Room">DELUXE ROOM</option>
												<option value="Guest House">GUEST HOUSE</option>
												<option value="Single Room">SINGLE ROOM</option>
                                            </select>
                              </div>
							  <div class="form-group">
                                            <label>Bedding Type</label>
                                            <select name="bed" class="form-control" required>
												<option value selected ></option>
                                                <option value="Single">Single</option>
                                                <option value="Double">Double</option>
												<option value="Triple">Triple</option>
                                                <option value="Quad">Quad</option>
												<option value="None">None</option>


                                            </select>
                              </div>
							  <div class="form-group">
                                            <label>No.of Rooms *</label>
                                            <select name="numberOfRoom" class="form-control" required>
												<option value selected ></option>
                                                <option value="1">1</option>
                                             <option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
												<option value="6">6</option>
												<option value="7">7</option>
                                            </select>
                              </div>


							  <div class="form-group">
                                            <label>Meal Plan</label>
                                            <select name="Meal" class="form-control"required>
												<option value selected ></option>
                                                <option value="Room only">Room only</option>
                                                <option value="Breakfast">Breakfast</option>
												<option value="Half Board">Half Board</option>
												<option value="Full Board">Full Board</option>



                                            </select>
                              </div>
							  <div class="form-group">
                                            <label>Check-In</label>
                                            <input name="wantedAt" type ="date" class="form-control">

                               </div>
							   <div class="form-group">
                                            <label>Check-Out</label>
                                            <input name="leftAt" type ="date" class="form-control">
                                   <input type="hidden" name="numberOfDays" value="4">
                                   <input type="hidden" name="stat" value="Not Conform">
                                   <input type="hidden" name="_token" value="{{csrf_token()}}">
                               </div>
                       </div>

                    </div>
                </div>


                <div class="col-md-12 col-sm-12">
                    <div class="well">
                        <h4>HUMAN VERIFICATION</h4>
                        <input type="submit" name="submit" class="btn btn-primary">



						</form>

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
