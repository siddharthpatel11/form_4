<?php 

/*
$host="localhost";
$user="root";
$password="";
$db="siddharth";

mysql_connect($host,$user,$password);
mysql_select_db($db);
*/

$con =mysqli_connect("localhost","root","","siddharth");
   
if(isset($_POST['username'])){
    
    $uname=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="SELECT * from `loginform` WHERE `user`='$uname' AND `Password`='$password'";
    //$sql="INSERT INTO `loginform`(`id`, `user`, `password`) VALUES ('$id','$uname','$password')"; 
    
    $result=mysql_query($sql);
    
    //$result= mysqli_query($con,$sql);
    if(mysql_num_rows($result)==1)
    {
       //if($result){
        echo " You Have Successfully Logged in";
        exit();
    }
    else
    {
        echo " You Have Entered Incorrect Password";
        exit();
    }
        
}
?>