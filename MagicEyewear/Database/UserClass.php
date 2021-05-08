<?php
  include_once('DatabaseConnection.php');
  class User extends DatabaseConnection
  {
    // Connecting to Database
    public function __construct()
    {
      parent::__construct();
    }

    // Registering User
   public function registerUser($FirstName, $LastName, $Username, $Password, $Email, $MobileNumber)
   {
     $userType = "Client";

     // Checking for already registered users with the same username
     $sql = "SELECT * FROM user WHERE UserType='Client' AND Username='$username'";
     $check = $this->database->query($sql);
     $rows = $check->num_rows;

     if($rows == 0) //If username does not exist in database
     {
       $register = "INSERT INTO user SET Username='$Username', Password='$Password', FirstName='$FirstName', LastName='$LastName', Email='$Email', MobileNumber='$MobileNumber', UserType='$userType'";
       $result = mysqli_query($this->database, $register)
          or die(myqli_connect_errorno()."Could Not Insert Data Into Database.");
       return $result;
     }
     else //If username exists in Database
     {
       return false;
     }
   }

   // User Login
   public function loginUser($Username, $Password)
   {
     $login = "SELECT id FROM user WHERE Username='$Username' AND Password='$Password'";

     // Checking if the username is available in the Database
     $result = mysqli_query($this->database, $login);
     $userData = mysqli_fetch_array($result);
     $rows = $result->num_rows;

     if($rows == 1) //If username exists in database
     {
       $_SESSION['login'] = true; //Login successful
       $_SESSION['id'] = $userData['id'];
       return true;
     }
     else //If username does not exist
     {
       return false;
     }
   }

   // Displaying user's first name
   public function displayName($id)
   {
     $displayName = "SELECT FirstName FROM user WHERE id='$id'";
     $result = mysqli_query($this->database, $displayName);
     $userData = mysqli_fetch_array($result);
     echo $userData['FirstName'];
   }

   // Getting current session
   public function getSession()
   {
     return $_SESSION['login'];
   }

   // Logging out user
   public function logoutUser()
   {
     $_SESSION['login'] = FALSE;
     session_destroy();
   }

}


?>
