<?php

class UserModel extends Model{

    public function fetchEmail(string $email) :array
    {
        $this->query("SELECT * FROM user WHERE Email=:email");
        $this->bind('Email', $email); 
        $this->execute();

        $Email = $this->fetch(); 
        if(empty($Email))
        {
            $result = array('status'=>true,'data'=>$Email); 
            return $result;
        }

        if(!empty($Email))
        {
            $result = array('status'=>false, 'data'=>$Email);
            return $result;
        }




    }//End of fetchEmail()


}


?>