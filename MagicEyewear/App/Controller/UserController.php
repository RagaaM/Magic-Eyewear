<?php

// Common functions between user types (admin and client)

class UserController extends Controller{
    
//----------------------------------LOGIN FUNCTION----------------------------------//

public $active = 'login'; 
$public $loginModel; 

// public function __construct()
// {
//     if(isset($_SESSION['auth_status']))
//         header("Location:dashboard.php"); 
//     $this->loginModel = new LoginModel();

// }//End of construct()

public function login(array $data)
{
    $email = stripcslashes(strip_tags($data['email']));
    $password = stripcslashes(strip_tags($data['password']));

    $EmailRecords = $this->loginModel->fetchEmail($email); 

    if(!$EmailRecords['status'])
    {
        if (password_verify($password, $EmailRecords['data']['password']))
        {
            //check if the remember_me was selected...
            $result = array(
              'status' => true
            );
    
            $_SESSION['data'] = $EmailRecords['data'];
            $_SESSION['auth_status'] = true;
            header("Location: dashboard.php");

        }//End of second if statement

        $result = array('status'=>false); 
        return $result;

    }//End of first if statement

}//End of login()




//----------------------------------VIEW PROFILE FUNCTION----------------------------------//


}

?>