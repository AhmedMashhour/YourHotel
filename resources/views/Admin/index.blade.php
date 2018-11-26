
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Your Hotel ADMIN</title>



      <link rel="stylesheet" href="css/style.css">


</head>

<body>


 <div class="container">


      <div id="login">

        <form method="post" action="{{url('admin/login')}}">

          <fieldset class="clearfix">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <p><span class="fontawesome-user"></span><input type="text"  name="email"
                value="Email" onBlur="if(this.value == '') this.value = 'Email'"
                 onFocus="if(this.value == 'Email') this.value = ''" required></p>
            <p><span class="fontawesome-lock"></span><input type="password" name="password"
                 value="Password" onBlur="if(this.value == '') this.value = 'Password'"
                 onFocus="if(this.value == 'Password') this.value = ''" required></p>
            <p><input type="submit" name="sub"  value="Login"></p>

          </fieldset>

        </form>



      </div> <!-- end login -->

    </div>
    <div class="bottom">  <h3><a href="{{url('/')}}">Your Hotel HOMEPAGE</a></h3></div>


</body>
</html>




