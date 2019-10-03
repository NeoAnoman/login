<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $name= $_POST['name'];
    $gender= $_POST['gender'];
    $phone= $_POST['phone'];
    $college= $_POST['college'];
    $email= $_POST['email'];
    $pass= $_POST['pass'];
    $conn = new mysqli ("localhost", "root", "", "users");
    if (mysqli_connect_error()){
    die('Connect Error ('. mysqli_connect_errno() .') '. mysqli_connect_error());
    }
    else {
    $sql = "INSERT INTO signup VALUES ('$name', '$gender', '$college', '$email', '$phone', '$pass');";
    if ($conn->query($sql)) {
    echo "New record is inserted sucessfully";
    }
    else {
    echo "Error: ". $sql ."". $conn->error;
    }
    $sql= "INSERT INTO `login`(`email`, `pass`) VALUES (\"$email\", \"$pass\")";
    if ($conn->query($sql)) {
    echo "<br>New ID created";
    }
    else {
    echo "Error: ". $sql ."". $conn->error;
    }
    $conn->close();
    }
    ?>
  </body>
</html>
