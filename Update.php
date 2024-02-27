<?php
$host='localhost';
$user='root';
$pass='';
$db='Students';

$conn=new mysqli($host,$user,$pass,$db);
echo 'Connection Success...<br>';

$id=$_POST['sid'];
$sname=$_POST['sname'];
$sphone=$_POST['sphone'];
$saddr=$_POST['saddr'];

$sql="update student_det set sname='$sname',sphone='$sphone',saddr='$saddr' where cid='$id'";

$res=$conn->query($sql);

if($res==TRUE)
{
    echo 'Data updation Success...';
}
else 
{
    echo 'Error...';
}

$conn->close();
?>