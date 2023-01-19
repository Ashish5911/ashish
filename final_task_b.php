<?php
// ini_set('display_error',1);
// ini_set('display_startup_error',1);
// error_reporting(E_ALL);
class D
{   
    //singleton method
    private static $db;

    public static function ConnectDB($db_name)
    {
        self::$db = new mysqli('localhost','hestabit','hestabit',$db_name); //or die("failed to connect");
        echo 'Connected to database succesfully<br>';
        return self::$db;
    }

    public function Select($tableName, $col1,$col2)
    {
        $con = $this->ConnectDB("ashish");
        $query = "SELECT $col1,$col2  FROM $tableName";
        $res = $con->query($query);
        $data = $res->fetch_all();
        
        return $data;
    }

    public function Insert($tableName , $val1 , $val2)
    {
        $con = $this->ConnectDB("ashish");
        $q = "insert into {$tableName} (name , emp_id) values('$val1' ,'$val2')";
        if($con->query($q)){
            $res = "data inserted successfully<br>";
        }else{
            $res = "Failed to insert data<br>";
        }
        return $res;
    }

    public function UpdateRow($tableName , $val1 , $val2 , $id)

    {
        $con = $this->ConnectDB("ashish");
        // echo $id." ".$val1." " .$val2;
        $q = "update {$tableName} set name = '$val1', emp_id = '$val2' where id = '$id'";
        if($con->query($q)){
            $res = "data updated successfully<br>";
        }else{
            $res = "Failed to update data<br>";
        }
        return $res;
    }

    public function DeleteRow($tableName , $id)
    {
        $con = $this->ConnectDB("ashish");
        // echo $id." ".$val1." " .$val2;
        $q = "delete from  {$tableName}  where id = '$id'";
        if($con->query($q)){
            $res = "data deleted successfully<br>";
        }else{
            $res = "Failed to delete data<br>";
        }
        return $res;
    }


}


$obj = new D();

// $con = $obj->ConnectDB("ashish");



$res2 = $obj->Insert("employee","shivam","22");
echo '<pre>';
print_r($res2);

$res = $obj->Select("employee","name","emp_id");
echo '<pre>';
print_r($res);

$res3 = $obj->UpdateRow("employee","shivam","0098",1);
echo '<pre>';
print_r($res3);

$res4 = $obj->DeleteRow("employee",1);
echo '<pre>';
print_r($res4);
