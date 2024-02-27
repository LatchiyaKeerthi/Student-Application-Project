<?php
$host='localhost';
$user='root';
$pass='';
$db='Students';

//create connection
$conn=new mysqli($host,$user,$pass,$db);
echo 'connection success...';

$sid=$_POST['sid'];
$sname=$_POST['sname'];
$sphone=$_POST['sphone'];
$saddr=$_POST['saddr'];

$sql="insert into student_det(sid,sname,sphone,saddr) values('$sid','$sname','$sphone','$saddr')";

$res=$conn->query($sql);

if($res==TRUE)
{
    echo '<br>Data insertion Success...';
}
else
{
    echo 'Error...';
}

$conn->close();
?>