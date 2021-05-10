<?php   

 class Database{  
      public $conn;  
      public $error;  
	  var $host = 'localhost'; //host NAME.
	  var $database = 'magiceyewear'; //Database Name
	  var $dbusername = 'root'; //Database Username
	  var $dbpassword = ''; //Database Password

     
     public function connect()
      {
               $conn=mysqli_connect($this->host,$this->dbusername,$this->dbpassword ,$this->database); 
               return $conn;
      } 

      public function AddProducts($tbname, $data)  
      {  
		  //INSERT INTO tbname Values (a, b);
           $product = "INSERT INTO ".$tbname." (";      
           $product .= implode(",", array_keys($data)) . ') VALUES (';            
           $product .= "'" . implode("','", array_values($data)) . "')";  
           if(mysqli_query($this->conn, $product))  
           {  
                return true;  
           }  
           else  
           {  
                echo mysqli_error($this->conn);  
           }  
      }  
      
      public function ViewProducts($tb){

          $conn=$this->connect();
                    
          echo "<table border='1'>";
          echo "<tr>
          <th >ID</th><th >BrandName</th><th >Code</th><th >Size</th><th >Color</th>
    
           <th >Rim</th><th >Feature</th><th> Material</th> <th >Gender</th> <th>Category</th> <th >Description</th></tr>";
                    
          $p=mysqli_query($conn,"SELECT * from $tb");

          while($result=mysqli_fetch_array($p))
          {
          echo "<tr>";
          echo "<td>".$result['FrameID']."</td>";
          echo "<td>".$result['FrameCode']."</td>";
          echo "<td>".$result['BrandName']."</td>";
          echo "<td>".$result['Size']."</td>";
          echo "<td>".$result['Color']."</td>";
          echo "<td>".$result['Rim']."</td>";
          echo "<td>".$result['Feature']."</td>";
          echo "<td>".$result['Material']."</td>";
          echo "<td>".$result['Gender']."</td>";
          echo "<td>".$result['Category']."</td>";
          echo "<td>".$result['Description']."</td>";
          echo "</tr>";
          } // echo "error";
          echo "</table>";
          }	

          

      }
     


 
 ?>  
