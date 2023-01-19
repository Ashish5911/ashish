<?php
echo "hii";
// $con=mysqli_connect("localhost","hestabit","hestabit","ashish");
// echo $con;

echo "Ashish";

if($con=mysqli_connect("localhost","hestabit","hestabit","ashish")){
    echo "connnect to database";

}
else{
    echo "failed to connect";
}
$q="insert into users(name,age) values('ashish',20)";
echo $q;
// die;
if(mysqli_query($con,$q)){
    echo "data inserted succesfully";
}else{
    echo "failed to insert";
}
echo "ashish";
