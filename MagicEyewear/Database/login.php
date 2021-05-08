

<?php
session_start();
include_once 'UserClass.php';
$user = new User();

if(isset($_REQUEST['submit']))
{
  extract($_REQUEST);
  $login = $user->loginUser($Username, $Password);
  if($login)
  {
    echo "login successfull";
  }
  else echo "Wrong username or password";
}
?>
<html>
<head>
  <title>Login</title>
  <script type="text/javascript" language="javascript">
function submitlogin() {

                var form = document.login;

                if(form.username.value == ""){

                    alert( "Username is Required.");

                    return false;

                }

                else if(form.password.value == ""){

                    alert( "Password is Required." );

                    return false;
}
}
</script>
</head>
<body>
   <span style="font-family: 'Courier 10 Pitch', Courier, monospace; font-size: 13px; font-style: normal; line-height: 1.5;"><div id="container"></span>
    <h1>Login Here</h1>
    <form action="" method="post" name="login">

    <table>

    <tbody>

    <tr>

    <th>UserName:</th>

    <td><input type="text" name="username" required="" /></td>

    </tr>

    <tr>

    <th>Password:</th>

    <td><input type="password" name="password" required="" /></td>

    </tr>

    <tr>

    <td></td>

    <td><input onclick="return(submitlogin());" type="submit" name="submit" value="Login" /></td>

    </tr>

    <tr>

    <td></td>

    <td><a href="registration.php">Register new user</a></td>

    </tr>

    </tbody>

    </table>

    </form></div>

</body>
</html>
