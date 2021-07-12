<?php 
$host = "localhost";
 $username = "root"; 
$passwd = ""; $dbname = "robonas";
 //Creating a 
//connection 
$con = new mysqli($host, $username, $passwd, $dbname);
$stmt=$con->prepare("select* from movement ");
$stmt->execute();
$result=$stmt->get_result();

 if(isset($_POST['right'])){
    $stmt=$con->prepare("insert into movement(dir) values('r')");
    $stmt->execute(); 
    echo "right";
}
elseif(isset($_POST['left'])){
    $stmt=$con->prepare("insert into movement(dir) values('l')");
    $stmt->execute();
    echo"lift";
}
elseif (isset($_POST['backward'])){
         $stmt=$con->prepare("insert into movement(dir) values('b')");
    $stmt->execute();
    echo "backward";
}
elseif(isset($_POST['forward'])){
         $stmt=$con->prepare("insert into movement(dir) values('t')");
    $stmt->execute();
    echo"forward";
}

elseif(isset($_POST['stop'])){
    $stmt=$con->prepare("insert into movement(dir) values('s')");
    $stmt->execute();
    echo "stop";
}
else{ echo" try again";}
//Closing the connection
 $con ->close(); ?>