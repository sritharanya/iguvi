<!DOCTYPE html>
<html>
    <head>
        <title>
            insert page</title>
</head>
<body>
    <?php
    $conn=mysqli_connect("localhost","root","","iguvi");
    if($conn===false)
    {
        die("ERROR:Couldnotconnect".mysqli_connect_error());
    }
    $email=$_REQUEST['email'];
    $pwd=$_REQUEST['pwd'];
    $sql="INSERT INTO tab VALUES('$email','$pwd')";
    if(mysqli_query($conn,$sql))
    {
        echo" database stored";
        echo nl2br("\n$email");

    }
    else{
        echo"ERROR".mysqli_error($conn);
    }
    mysqli_close($conn);
    ?>
</body>
</html>
