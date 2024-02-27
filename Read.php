<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        a {
            padding-right: 25px;
            text-decoration: none;
            color: rebeccapurple;
        }

        #hd {
            background-color: plum;
            color: red;
        }
        body{
        background-image: url(stupho1.jpg);
        background-attachment: fixed;
        background-repeat: no-repeat;
        background-size: cover;
    }
    </style>
</head>

<body style="background-color: bisque;">

    <div id="hd">
    <center><h3>STUDENT INFORMATION</center>
            <hr>
        </h3>

        <div id="nav"><center><b>
            <a href="Home.html"><b>Home</b></a>
            <a href="New_Student.html"><b>New Student</b></a>
            <a href="Update.html"><b>Modify Student</b></a>
            <a href="Remove.html"><b>Remove Student</b></a>
            <a href="Read.php"><b>View Student</b></a>
        </div></center></b>
    </div>
    <br>
    <?php
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'Students';

    $conn = new mysqli($host, $user, $pass, $db);
    //echo 'Connection Success...<br>';
    
    $sql = "select * from student_det";

    $res = $conn->query($sql);

    if ($res->num_rows > 0) {
        echo "<table border='3' align='center'>";
        while ($row = $res->fetch_assoc()) {
            echo "<tr>";
            echo '<td>' . $row['sid'] . '</td>';
            echo '<td>' . $row['sname'] . '</td>';
            echo '<td>' . $row['sphone'] . '</td>';
            echo '<td>' . $row['saddr'] . '</td>';
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo 'Record is empty...';
    }

    $conn->close();
    ?>
</body>

</html>