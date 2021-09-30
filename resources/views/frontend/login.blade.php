<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC&family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sacramento&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/login-style.css">
    <title>Login</title>
</head>
<body>
  <P class="project-title ">
   Welcome
 </P>
    <div class="container">
        <div class="card"></div>
        <div class="card">
            <h1 class="title">Login</h1>
            <form action="" autocomplete="off">
                <div class="input-container">
                    <input type="text" id="username" placeholder="Username" required>
                    <!-- <label for="username">User Name  </label> -->
                    <div class="bar"></div>
                </div>
                <div class="input-container">
                    <input type="password" id="password" placeholder="Password" required>
                    <!-- <label for="password">  Password</label> -->
                    <div class="bar"></div>
                </div>
                <div class="button-container">
                    <button><span>Let's Go</span></button>
                </div>
                <div class="footer"><a href="#">Forget Password</a></div>
            </form>
        </div>
        <div class="card alt">
            <div class="toggle"></div>
            <h1 class="title">Register Now!
                <div class="close"></div>
            </h1>
            <form action="">
                <div class="input-container">
                    <input type="text" id="user-name" placeholder="Username"  required>
                    <!-- <label for="user-name">  User Name</label> -->
                    <div class="bar"></div>
                </div>
                <div class="input-container">
                    <input type="password" id="pass" placeholder="Password" required>
                    <!-- <label for="pass">  Password</label> -->
                    <div class="bar"></div>
                </div>
                <div class="input-container">
                    <input type="password" id="pass-repeat" placeholder="Password-Repeat" required>
                    <!-- <label for="pass-repeat">    Re Password</label> -->
                    <div class="bar"></div>
                </div>
                <div class="button-container">
                    <button><span>Submit</span></button>
                </div>
            </form>
        </div>
    </div>

        <!-- JS -->
        <script src="js/jquery-3.2.1.slim.min.js"></script>
       <script src="js/bootstrap.min.js"></script>
       <script src="js/popper.min.js"></script>
       <script src="js/jquery.min.js"></script>
       <script src="js/all.min.js"></script>
       <script>
           $(document).ready(function () {
  $('.toggle').on('click', function () {
      $('.container').stop().addClass('active');
  });
  $('.close').on('click', function () {
      $('.container').stop().removeClass('active');
  });
});
       </script>
</body>
</html>