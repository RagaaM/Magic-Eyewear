<?php

class DatabaseConnection
{
    protected $host="localhost";
    protected $user="root";
    protected $pass="";
    protected $database="magic_eyewear";
    protected $databaseHandler, $databaseStatement; 

    /**
      * @param null|void
      * @return null|void
      * @desc Creates or resume an existing database connection...
    **/

  public function __construct(){
    $conn = 'mysql:host='.$this->host.';database='.$this->database;
    
    $OptionsPDO = array(PDO::ATTR_PERSISTENT => true,
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
    
    try{
      $this->databaseHandler = new PDO($conn, $this->user, $this->pass, $OptionsPDO); 

    } catch(Exception $exception)
      {
        var_dump('Failed To Establish A Database Connection. Reason: ' . $e->getMessage());

      }

  } //End of construct()


    /**
      * @param string
      * @return null|void
      * @desc Creates a PDO statement object
    **/

  public function query($query)
  {
    $this->databaseStatement->prepare($query);
  }

    /**
      * @param string|integer|
      * @return null|void
      * @desc Matches the correct datatype to the PDO Statement Object.
    **/

  public function bind($tableColumn, $inputValue, $type = null)
  {
    if(is_null($type))
    {
      switch(true)
      {
        case is_int($inputValue):
          $type = PDO::PARAM_INT;
        break;

        case is_bool($inputValue):
          $type = PDO::PARAM_BOOLEAN;
        break;

        case is_null($inputValue):
          $type = PDO::PARAM_NULL;
        break;

        default:
          $type = PDO::PARAM_STR; 

        break;

      }//End of swtich case

    }//End of if statement

    $this->databaseStatement->bindValue($tableColumn, $inputValue, $type);

  }//End of bind()

    /**
      * @param null|void
      * @return null|void
      * @desc Executes a PDO Statement Object or a db query...
    **/

  public function execute()
  {
    $this->databaseStatement->execute();
    return true;
  }//End of execute()

  /**
      * @param null|void
      * @return null|void
      * @desc Executes a PDO Statement Object an returns a single database record as an associative array...
    **/

  public function fetch()
  {
    $this->execute();
    return $this->$databaseStatement->fetch(PDO::FETCH_ASSOC);

  }

     /**
      * @param null|void
      * @return null|void
      * @desc Executes a PDO Statement Object an returns nultiple database record as an associative array...
    **/

  public fetchAll()
  {
    $this->execute();
    return $this->$databaseStatement->fetchAll(PDO::FETCH_ASSOC);

  }//End of fetchAll()


} // End of class



?>