<?php
// ini_set('display_error',1);
// ini_set('display_startup_error',1);
// error_reporting(E_ALL);
class DataBase
{   
    //singleton method
    private static $db;

    public static function ConnectDB($dn_name)
    {
        self::$db = new mysqli('localhost','hstbit','hestabit',$db_name);
        echo 'Connected to database succesfully';
        return self::$db;
    }

    public function Select($tableName = "users" , $col1,$col2)
    {
        $query = "select '$col1','$col2' from '$tableName'";
    }


}
$obj = DataBase::ConnectDB("ashsh");

// $obj->