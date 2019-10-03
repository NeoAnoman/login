<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css" />
  <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css" />
  <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css" />
  <body>
    <div class="bg-image">
    </div>
    <div class="main">
      <style>
      body, html {
        height: 100%;
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
      }
      .bg-image {
        position: absolute;
        /* The image used */
        background-image: url("background.jpg");

        /* Add the blur effect */
        filter: blur(8px);
        -webkit-filter: blur(8px);

        height: 100%;
        width: 100%;

        /* Center and scale the image nicely */
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;

      }
      </style>
      <div class="navbar" style=" background-color: black ">
        <div class="nav-brand" style=" color: red">
          <a href="#"><h1>AVIATOR</h1></a>
        </div>
      </div>
      <a href="#">
        <div style= " position: fixed; border-radius: 60px;  text-align: center; height: 80vh; width: 20%; background-color: grey; transition: 1s" id="back">
          <h1 style=" padding-top: 20vh ">GET BACK</h1>
          <h1 style=" font-size: 10em " >&#8678;</h1>
        </div>
      </a>
      <style>
      #back:hover {
        transform: translateX(20px);
      }
      </style>
      <div class="container">
        <div class="row">
          <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
              <div class="card-header" style=" font-size: 1.5em; background-color: black">
                <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#panel1" role="tab" ><i class="fa fa-user mr-1 fa-lg"></i>
                      Login
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#panel2" role="tab" ><i class="fa fa-user-plus mr-1 fa-lg"></i>
                      Register
                    </a>
                  </li>
                </ul>
              </div>
              <div class="card-body" style= " font-size: 1.4em">
                <div class="tab-content">
                  <div class="tab-pane fade show active" id="panel1" role="tabpanel">
                    <form class="form-signin" action="login.php" method="post">
                      <div class="form-label-group">
                        <label for="inputEmail">Email address</label>
                        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                      </div>

                      <div class="form-label-group">
                        <label for="inputPassword">Password</label>
                        <input type="password" name="pass" id="inputPassword" class="form-control" placeholder="Password" required>
                      </div>
                      <div class="options text-center text-md-right mt-1">
                        <p style="color: blue;">Not a member? <a href="#panel2" data-toggle="tab" role="tab" style="color: rgb(171, 194, 219);">Sign Up</a></p>
                        <p style="color: blue;">Forgot <a href="#" style="color:rgb(169, 190, 214);">Password?</a></p>
                      </div>

                      <div class="custom-control custom-checkbox mb-3">
                        <input type="checkbox" class="custom-control-input" id="customCheck1" value="chkMe">
                        <label class="custom-control-label" for="customCheck1">Remember password</label>
                      </div>
                      <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" onclick="<?php handleCache(); ?>" >Sign in</button>
                      <hr class="my-4">
                    </form>
                  </div>
                  <div class="tab-pane fade" id="panel2" role="tabpanel">
                    <form class="form-signin" action="signup.php" method="post">
                      <div class="form-label-group">
                        <label for="inputName">Your Name</label>
                        <input type="text" id="inputName" name="name" class="form-control" placeholder="Username" required autofocus>
                      </div>

                      <div class="form-label-group">
                        <label for="inputGender">Gender</label>
                        <select id="inputGender" name="gender" class="form-control">
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                        </select>
                      </div>

                      <div class="form-label-group">
                        <label for="inputCollege">Enter your College name</label>
                        <input type="text" id="inputCollege" name="college" class="form-control" placeholder="College Name" required autofocus>
                      </div>

                      <div class="form-label-group">
                        <label for="inputEmail">Email address</label>
                        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                      </div>

                      <div class="form-label-group">
                        <label for="inputNumber">Phone Number</label>
                        <input type="text" name="phone" id="inputNumber" class="form-control" placeholder="Eneter your phone number here" required autofocus>
                      </div>

                      <div class="form-label-group">
                        <label for="inputPass">Make a Password</label>
                        <input type="password" name="pass" id="inputPass" class="form-control" placeholder="Make a password" required autofocus>
                      </div>

                      <div class="form-label-group">
                        <label for="inputPassword">Confirm pass</label>
                        <input type="password" name="confirm_pass" id="inputConfirm" class="form-control" placeholder="Confirm your password" required>
                      </div>
                      <div class="options text-center text-md-right mt-1">
                        <p style="color: blue;">Already Member? <a data-toggle="tab" href="#panel1" role="tab" style="color: rgb(171, 194, 219);">Sign Up</a></p>
                      </div>
                      <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign Up</button>
                      <hr class="my-4">
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="result">
    </div>
    <?php
    function handleCache() {
      echo "document.getElementById('result').innerHTML='<h1>HELLO</h1>'";
    }
    echo "php working";
     ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
