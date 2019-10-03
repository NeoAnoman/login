<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    class loginInfo {
    }
    $conn = new mysqli ("localhost", "root", "", "users");
    $givenEmail = $_POST['email'];
    $givenPass = $_POST['pass'];
    $logObj = new loginInfo;
    $logObj->email = $givenEmail;
    $logObj->pass = $givenPass;
    $cache = 'sample.cache.php';

    $pass = $conn->query("select pass from login where email='$givenEmail'");
    $row = $pass->fetch_assoc();
    if($givenPass == $row['pass']) {
      echo "COrrect Pass Login Granted<br>";
      if (isset($_POST['chkMe'])) {
        $f = fopen($cache, 'w+') or die("error writing file");
        $objData = serialize($logObj);
        fwrite($f, $objData);
        fclose($f);
        echo"cache Written";
      }
      else {
        echo "not ticked";
      }
    }
    else {
      echo "Wrong pass Try Again";
    }
    ?>
  </body>
</html>
