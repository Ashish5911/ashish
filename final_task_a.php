<?php
interface Db
{
    public static function DbConnect();

}


class D implements Db
{
    private static $db;

    public static function DbConnect()
    {
        self::$db = new mysqli('localhost','hestabit','hestabit','ashish');
        echo 'hello';
        return self::$db;
    }
}

$obj = D::DbConnect();
$q = "select * from users";
$data = $obj->query($q);
$res = $data->fetch_array();
 
print_r($res);